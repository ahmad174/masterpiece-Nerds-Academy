<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use App\Courses;

class CommentsController extends Controller
{

    



    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','show']]);
    }


    public function index()
    {
        $this->authorize('create',Majors::class);
        $comments = Comments::all();
        return view('comments.index')->with('comments',$comments);   
    }




    
    public function create()
    {
        $courses = Courses::all();
        return view('comments.create',['courses'=>$courses]);
    }


    

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'text' => 'required',
        ]);

        $comments = new Comments;
        $comments -> text = $request->input('text');
        $comments -> user_id = auth()->user()->id;
        $comments -> course_id = $request->input('course_id');
        $comments -> save();

        return redirect('/courses/' . $comments->course_id);
    }

    
    public function show($id)
    {
        $comments = Comments::find($id) ;
        return view('comments.show')->with('comments',$comments);
    }

    


    public function edit($id)
    {
        $courses = Courses::all();
        $comments = Comments::find($id) ;
        return view('comments.edit',['comments' => $comments,'courses'=>$courses]);
    }






    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'text' => 'required',
        ]);

        $comments = Comments::find($id) ;
        $comments -> text = $request->input('text');
        $comments -> user_id = auth()->user()->id;
        $comments -> course_id = $request->input('course_id');
        $comments -> save();
        return redirect('/courses/' . $comments->course_id)->with('success','Comment Update');

    }





    public function destroy($id)
    {
        $comment = Comments::find($id);
        $comment -> delete();

        return redirect('/comments')->with('success','Comment Deleted');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Users;
use App\Majors;
use App\Courses;
use App\Comments;

class CoursesController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','show']]);
    }



    public function index()
    {
        $courses = Courses::all();
        return view('courses.index')->with('courses',$courses);  
    }




    public function create()
    {
      
        $majors = Majors::all();
        return view('courses.create')->with('majors',$majors); 
    }


    




    public function store(Request $request)
    {
  
      
        $validatedData = $request->validate([
            'name' => 'required',
            'major_id' => 'required',
            'description'=> 'required',
            'Author'=> 'required',
        ]);

        $course = new Courses;
        $course -> name = $request->input('name');
        $course -> major_id = $request->input('major_id');
        $course -> description = $request->input('description');
        $course -> Author = $request->input('Author');
        $course -> user_id = auth()->user()->id;
        $course -> image = 'aaa';
        $course -> save();

        // return redirect('/courses')->with('success','majors created');
        return redirect('/majors/' . $course->major_id);


    }


    



    public function show($id)
    {

        $course = Courses::find($id);
        $comments = $course->comments;
        return view('courses.show',['course'=>$course,'comments'=>$comments]);
    }
    
    
    
    
    
    public function edit($id)
    {

      
        $majors = Majors::all();
        $course = Courses::find($id) ;
        return view('courses.edit',['course'=>$course,'majors'=>$majors]);
    }


    




    public function update(Request $request, $id)
    {
        

        $validatedData = $request->validate([
            'name' => 'required',
            'Author'=> 'required',
            'major_id' => 'required',
            'description'=> 'required',

        ]);


        $course = Courses::find($id);
        $course -> name = $request->input('name');
        $course -> major_id = $request->input('major_id');
        $course -> description = $request->input('description');
        $course -> Author = $request->input('Author');
        $course -> user_id = auth()->user()->id;
        $course -> image = 'aaa';

        $course -> save();
        
        return redirect('/courses')->with('success','course  Updated');






    }


    



    public function destroy($id)
    {
        $course = Courses::find($id);
        $course -> delete();

        return redirect('/courses')->with('success','course Deleted');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Majors;


class MajorsController extends Controller
{

    
    public function index()
    {
        $x = Majors::all();
        return view('majors.index')->with('x',$x);        
    }

    
    
    public function create()
    {
        $this->authorize('create',Majors::class);
        $x = Majors::all();
        return view('majors.create')->with('x',$x); 
    }

    
    public function store(Request $request)
    {


        $this->authorize('create',Majors::class);
        $validatedData = $request->validate([
            'name' => 'required',
            'parent_id' => 'required',
        ]);

        $x = new Majors;
        $x -> name = $request->input('name');
        $x -> parent_id = $request->input('parent_id');
        $x -> save();

        return redirect('/majors')->with('success','majors created');
    }

    

    public function show($id)
    {
        $x = Majors::find($id);
        $courses = $x->courses;
        return view('majors.show',['x'=>$x,'courses'=>$courses]);

    }



    public function edit($id)
    {
        $this->authorize('create',Majors::class);
        $y = Majors::all() ;
        $x = Majors::find($id) ;
        return view('majors.edit',['x' => $x, 'y' => $y]);
        
    }


    






    public function update(Request $request, $id)
    {
        $this->authorize('create',Majors::class);
        $validatedData = $request->validate([
            'name' => 'required',
            'parent_id' => 'required',
        ]);
        
        $x = Majors::find($id);
        $x -> name = $request->input('name');
        $x -> parent_id = $request->input('parent_id');
        $x -> save();
        
        return redirect('/majors')->with('success','Post Updated');
    }


    


    public function destroy($id)
    {
        $this->authorize('create',Majors::class);
        $x = Majors::find($id);
        $x -> delete();

        return redirect('/majors')->with('success','majors Deleted');
    }
}

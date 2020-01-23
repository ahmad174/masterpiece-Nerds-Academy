<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Majors;
use DB;




class FacilitiesController extends Controller
{

    public function index()
    {
        $facilities = Majors::all();
        return view('facilities.index',['facilities'=>$facilities]);
        // return view('facilities.index')->with('facilities',$facilities);        
 
    }

   
    public function create()
    {
        $this->authorize('create',Majors::class);
        $facilities = Majors::all();
        return view('facilities.create',['facilities'=>$facilities]); 
    }

    


    public function store(Request $request)
    {
        $this->authorize('create',Majors::class);
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        $facilities = new Majors;
        $facilities -> name = $request->input('name');
        $facilities -> parent_id = 0 ;
        $facilities -> save();

        return redirect('/facilities')->with('success','facilities created');
    }



    
    public function show($id)
    {
        $facilities = Majors::find($id);
        $majors = $facilities->children;
        return view('facilities.show',['facilities'=>$facilities,'majors'=>$majors]);
    }

    public function edit($id)
    {
        $this->authorize('create',Majors::class);
        $facilities = Majors::find($id) ;
        return view('facilities.edit',['facilities' => $facilities]) ;

    }


    public function update(Request $request, $id)
    {
        $this->authorize('create',Majors::class);
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
        $facilities = Majors::find($id);
        $facilities -> name = $request->input('name');
        $facilities -> parent_id = 0 ;
        $facilities -> save();
        return redirect('/facilities')->with('success','facilities Updated');
    }

    public function destroy($id)
    {
        $this->authorize('create',Majors::class);
        $facilities = Majors::find($id);
        // $facilities = DB::DELETE FROM Majors WHERE parent_id = $id;
        // DB::('Majors')->where('Majors', '=', $id)->delete();
        // DB::('DELETE FROM Majors WHERE parent_id  = $id ');
        $facilities -> delete();

        return redirect('/facilities')->with('Success','Facilities Deleted');
    }
}

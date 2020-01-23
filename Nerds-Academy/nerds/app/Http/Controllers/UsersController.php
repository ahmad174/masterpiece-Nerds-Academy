<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Users;
use App\User;
use App\Majors;

class UsersController extends Controller
{

    


    public function index()
    {
        $this->authorize('create',Majors::class);
        $person = Users::all();
        return view('users.index')->with('person',$person); 
    }




    public function create()
    {
        $this->authorize('create',Majors::class);
        $major = Majors::all();
        return view('users.create')->with('major',$major);
    }

   
    
    public function store(Request $request)
    {
 
        


        $this->authorize('create',Majors::class);
        $validatedData = $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'email'=> 'required',
            'password' => 'required',
            'username'=> 'required',
            'university_name'=> 'required',
            'major_id'=> 'required',
        ]);

         User::create([
            'f_name' => $request['f_name'],
            'l_name' => $request['l_name'],
            'username' => $request['username'],
            'university_name' => $request['university_name'],
            // 'image' => $request['image'],
            'major_id' => $request['major_id'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('/users')->with('success','majors created');


    }

    

    public function show($id)
    {
        $this->authorize('create',Majors::class);
        $person = Users::find($id) ;
        return view('users.show')->with('person',$person);
    }

    


    public function edit($id)
    {
        $this->authorize('create',Majors::class);
        $person = User::find($id) ;
        $majors = Majors::all();
        return view('Users.edit',['person' => $person , 'majors'=>$majors ]);
    }



    public function update(Request $request, $id)
    {
        $this->authorize('create',Majors::class);
        $validatedData = $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'email'=> 'required',
            'password' => 'required',
            'username'=> 'required',
            'university_name'=> 'required',
            'major_id'=> 'required',
        ]);

        $person =  User::find($id);
        $person -> f_name = $request->input('f_name');
        $person -> l_name = $request->input('l_name');
        $person -> email = $request->input('email');
        $person -> password = Hash::make($request['password']);
        $person -> username = $request->input('username');
        $person -> university_name = $request->input('university_name');
        $person -> major_id = $request->input('major_id');
        $person -> save();
        
        return redirect('/users')->with('success','Users Updated');


        
    }

    
    
    public function destroy($id)
    {
        $this->authorize('create',Majors::class);
        $person = users::find($id);
        $person -> delete();

        return redirect('/users')->with('success','majors Deleted');

    }
}

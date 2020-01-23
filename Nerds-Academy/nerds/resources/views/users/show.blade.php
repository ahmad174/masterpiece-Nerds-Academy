@extends('layouts.app')
 
@section('content')
    <div class="container">
        <p><a href="/users"  class="btn btn-outline-secondary">Go Back</a></p>
        <div class="row">
  
        <div class="col-xs-6 col-md-3 col-lg-3">
            <p>First Name : {{$person->f_name}}</p>
            <p>First Last : {{$person->l_name}}</p>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3">
            <p>Username : {{$person->username}}</p>
            <p>Email : {{$person->email}}</p>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3">
            <p>User-id : {{$person->id}}</p>
            <p>User-role : {{$person->role}}</p>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3">
            <p>$person->major->name</p>
            <p>{{$person->major->name}}</p>
            <p>University Name : {{$person->university_name}}</p>
        </div>

        </div>
       
    
        <form action="{{ route('users.destroy',$person->id) }}" method="POST">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button type="submit" style="margin:0px 20px 0px 0px" class="btn btn-outline-danger ">Delete User</button>
            <a href="/users/{{$person->id}}/edit"  class="btn btn-outline-primary">Edit</a>
        </form>
        
    </div>

    @endsection




        
        
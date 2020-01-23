@extends('layouts.app')
 
@section('content')
    <div class="container">



        <div class="container coursesContainer" >
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12" >

 <a class="btn btn-outline-primary" style="float:right" href="/users/create">Add User</a><br><br><br>





    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">University</th>
          </tr>
        </thead>
        <tbody>

@foreach ($person as $user)


    <tr >
        <th scope="row"><a href="/users/{{$user->id}}">{{$user->id}}</th>
        <td><a href="/users/{{$user->id}}">{{$user->f_name}}</td>
        <td><a href="/users/{{$user->id}}">{{$user->l_name}}</td>
        <td><a href="/users/{{$user->id}}">{{$user->username}}</td>
        <td><a href="/users/{{$user->id}}">{{$user->email}}</td>
        <td><a href="/users/{{$user->id}}">{{$user->university_name}}</td>
    </tr>

@endforeach


        </tbody>
      </table>

                </div>
            </div>
        </div>    


    </div>

    @endsection
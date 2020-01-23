@extends('layouts.app')
 
@section('content')
    <div class="container">

    <h1>Edit</h1>

    
    <form  action="{{ route('facilities.update',$facilities->id) }}"  method="post">
        <input name="_method" type="hidden" value="PUT">
        {{csrf_field()}}


        <div class="form-group">
            <input type="text" value="{{$facilities->name}}"  name='name' class="form-control" placeholder="Facility Name">
        </div>


        <input type="submit" value="Update" class="btn btn-outline-primary">
    </form>
    

    </div>
@endsection






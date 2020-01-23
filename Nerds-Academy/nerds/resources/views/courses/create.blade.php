@extends('layouts.app')
 
@section('content')
    <div class="container">

<form  action="{{route('courses.store')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="text" name='name' class="form-control" placeholder="Course Name">
    </div>

    <div class="form-group">
        <input type="text" name='Author' class="form-control" placeholder="Author Name">
    </div>

    <div class="form-group">


<select name="major_id"  class="form-control" >

@foreach ($majors as $major)
@if(($major->parent_id)>0)
<option value="{{$major->id}}">{{$major->name}}</option>
@endif
@endforeach
</select>
</div>

<div class="form-group">
<textarea id="article-ckeditor" name="description" placeholder="Courses Description"></textarea>
</div>
    <input type="submit" class="btn btn-primary  ">
</form>

    </div>

@endsection
@extends('layouts.app')
 
@section('content')
    <div class="container">


<form  action="{{route('comments.update',$comments->id)}}" method="post">
    <input name="_method" type="hidden" value="PUT">
    {{ csrf_field() }}
    <div class="form-group">
        <textarea type="text" name='text'  class="form-control" placeholder="Write Comment">{{$comments->text}}</textarea>
    </div>

    <div class="form-group">
        <select name="course_id"  class="form-control" >
            @foreach ($courses as $course)
            <option value="{{$course->id}}">{{$course->name}}</option>
            @endforeach
            </select>
        </div>


    <input type="submit" value="Update" class="btn btn-outline-primary">
</form>
</div>

@endsection

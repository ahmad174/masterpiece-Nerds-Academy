@extends('layouts.app')
 
@section('content')
    <div class="container">

    <h1>Edit</h1>

    
    <form  action="{{ route('courses.update',$course->id) }}"  method="post">
        <input name="_method" type="hidden" value="PUT">
        {{csrf_field()}}


        <div class="form-group">
            <input type="text" value="{{$course->name}}"  name='name' class="form-control" placeholder="course Name">
        </div>


        <div class="form-group">
            <input type="text" value="{{$course->Author}}" name='Author' class="form-control" placeholder="Author Name">
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
            <textarea name="description" id="article-ckeditor"  placeholder="Courses Description">{!!$course->description!!}</textarea>
        </div>

        <input type="submit" value="Update" class="btn btn-outline-primary  ">
    </form>
    
</div>

@endsection


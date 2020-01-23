@extends('layouts.app')
 
@section('content')
    <div class="container">

        <p>
    <a href="/courses"  class="btn btn-outline-secondary">Go Back</a>
</p>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-6">

            <img width="90%" src="/Books.png" alt="Books.png">
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6">

<aside style="margin :50px 0px">
    <h4>Subject : {{$course->name}}</h4>
    
    <form action="{{ route('courses.destroy',$course->id) }}" method="POST">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="DELETE">
        <button type="submit" style="margin:0px 20px 0px 0px" class="btn  btn-outline-danger ">Delete Course</button>
        <a href="/courses/{{$course->id}}/edit"  class="btn  btn-outline-primary">Edit</a>
    </form>
    
</aside>

</div>
</div>
</div>

<div class="container coursesContainer" >
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12" >


<p>{{$course->name}} : {!!$course->description!!}</p>


</div>
</div>
</div>




<div class="container coursesContainer" >
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12" >

<h4 style="display:inline-block">Course Comments </h4>    <h4 style="display:inline-block ;float:right"> <a href="/comments/create">Add Comment </a></h4>

@foreach ($comments as $comment)
<div class="commetsContainer" >  
<div style="margin:5px">
    <img style="border-radius:50%" width="30px" src="/person2.jpg" alt="">  
    <br>
</div>
    <div style="display:inline-block">
     <div>{{$comment->text}}</div>
    <small>created by {{$comment->user->username}} </small>
 </div>
</div>
@endforeach     

        </div>
    </div>
</div>





</div>



@endsection
@extends('layouts.app')
 
@section('content')
    <div class="container">



<p>
    <a href="/majors"  class="btn btn-outline-secondary">Go Back</a>
</p>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-6">

            <img width="90%" src="/Books.png" alt="Books.png">
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6">

<aside style="margin :50px 0px">
    <h4>Major : {{$x->name}}</h4>
    <h4>Facility : {{$x->parent->name}}</h4>
    @can('create', App\Majors::class)    
    <form action="{{ route('majors.destroy',$x->id) }}" method="POST">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="DELETE">
        <button type="submit" style="margin:0px 20px 0px 0px" class="btn btn-outline-danger ">Delete Major</button>
        <a href="/majors/{{$x->id}}/edit"  class="btn  btn-outline-primary">Edit</a>
    </form>
    @endcan

</aside>

        </div>
    </div>
</div>







    

{{-- @foreach ($courses as $course)
<p><a href="/courses/{{$course->id}}">      {{$course->id}}    {{$course->name}}   <br/></a></p>
@endforeach  --}}




        <div class="container coursesContainer" >
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12" >

<h4 style="display:inline-block">{{$x->name}} Courses </h4>    <h4 style="display:inline-block ;float:right"> <a href="/courses/create">Add course </a></h4>

@foreach ($courses as $course)
<div  class="coursesbox">  
<div style="width:100px;float:left"><img width="100px" src="/Books.png" alt="Books.png">
</div>

<p style="width:calc(100% - 110px);float:right">
    <h5>  <a href="/courses/{{$course->id}}">Title : {{$course->name}}   <br/></a>  </h5> 
    <h6><a href="/courses/{{$course->id}}">Author Name :    {{$course->Author}}   <br/></a> </h6>
    <h6><a href="/courses/{{$course->id}}">Views  : 3099 <br/></a> </h6>
    
</p>
</div>
@endforeach 

                </div>
            </div>
        </div>
    
    

    
    



    </div>
@endsection






@extends('layouts.app')
 
@section('content')
    <div class="container">



        <div class="container coursesContainer" >
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12" >

 <a class="btn btn-outline-primary" style="float:right" href="/courses/create">Add Course</a> <br><br>

 
 @foreach ($courses as $course)
 <div  style="display:block !important;height:120px;border:1px solid #a2a2e7;padding:10px;margin :10px 0px">  
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

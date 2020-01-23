@extends('layouts.app')
 
@section('content')




    <div class="container coursesContainer" >
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12" >
    

    <p>
        <a href="/comments"  class="btn btn-outline-secondary">Go Back</a>
    </p>

    

    <div style="margin:5px">
        <img style="border-radius:50%" width="30px" src="/person2.jpg" alt="">  
        <br>
    </div>
        <div style="display:inline-block">
         <div>{{$comments->text}}</div>
        <small>created by {{$comments->user->username}} </small>
   
   
</div>

<div style="float:right">

    <form action="{{ route('comments.destroy',$comments->id) }}" method="POST">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="DELETE">
        <button type="submit" class="btn  btn-outline-danger ">Delete</button>
        <a href="/comments/{{$comments->id}}/edit"  class="btn  btn-outline-primary">Edit</a>
    </form>
    
</div>












    
            </div>
        </div>
    </div>











@endsection
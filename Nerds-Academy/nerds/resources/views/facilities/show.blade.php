@extends('layouts.app')
 
@section('content')
    <div class="container">



<p>
    <a href="/facilities"  class="btn btn-outline-secondary">Go Back</a>
</p>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-6">

            <img width="90%" src="/Books.png" alt="Books.png">
        </div>
        <div class="col-xs-12 col-md-6 col-lg-6">

<aside style="margin :50px 0px">
    <h4>Facility : {{$facilities->name}}</h4>

    @can('create', App\Majors::class)        
    <form action="{{ route('facilities.destroy',$facilities->id) }}" method="POST">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="DELETE">
        <button type="submit" style="margin:0px 20px 0px 0px" class="btn btn-outline-danger ">Delete Facility</button>
        <a href="/facilities/{{$facilities->id}}/edit"  class="btn  btn-outline-primary">Edit</a>
    </form>
    @endcan

</aside>

        </div>
    </div>
</div>








        <div class="container coursesContainer" >
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12" >

<h4 style="display:inline-block">{{$facilities->name}} </h4> 
   <h4 style="display:inline-block ;float:right">
    @can('create', App\Majors::class)        
    <a href="/majors/create">Add majors </a>
    @endcan
    </h4>

@foreach ($majors as $major)
<div  class="coursesbox">  
<div style="width:100px;float:left"><img width="100px" src="/Books.png" alt="Books.png">
</div>

<p style="width:calc(100% - 110px);float:right">
    <h5>  <a href="/majors/{{$major->id}}">{{$major->name}}   <br/></a>  </h5> 
    <h6><a href="/majors/{{$major->id}}">Views  : 4329 <br/></a> </h6>
    
</p>
</div>
@endforeach 

                </div>
            </div>
        </div>
    
    

    
    



    </div>
@endsection






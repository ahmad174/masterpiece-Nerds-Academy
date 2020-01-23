@extends('layouts.app')
 
@section('content')



<div class="container">

    @can('create', App\Majors::class)
    <div class="container coursesContainer" >
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12" >
                
<a class="btn btn-outline-primary" style="float:right" href="/majors/create">Add Major</a>



</div>
</div>
</div>
@endcan



<div class="container coursesContainer" >
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12" >


    <div class="row">

@foreach ($x as $item)
@if(($item->parent_id) > 0 )

    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
        <a href="/majors/{{$item->id}}">
            <div class="major_current">
            <img src="/Books.png" width="95%" alt="">
                <p class="text-center person-major">{{$item->name}}  </p>
            </div>
        </a>
    </div>
@endif
@endforeach

    </div>

</div>

            </div>
        </div>
    </div>


    </div>
@endsection
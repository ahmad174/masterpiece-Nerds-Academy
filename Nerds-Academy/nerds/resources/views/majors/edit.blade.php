@extends('layouts.app')
 
@section('content')
    <div class="container">

    <h1>Edit</h1>

    
    <form  action="{{ route('majors.update',$x->id) }}"  method="post">
        <input name="_method" type="hidden" value="PUT">
        {{csrf_field()}}


        <div class="form-group">
            <input type="text" value="{{$x->name}}"  name='name' class="form-control" placeholder="Major Name">
        </div>



        <div class="form-group">
        <select name="parent_id"  class="form-control">

            @foreach ($y as $item)
            @if(($item->parent_id)==0)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endif
            @endforeach
            
            </select>
        </div>


        <input type="submit" value="Update" class="btn btn-outline-primary  ">
    </form>
    

    </div>
@endsection






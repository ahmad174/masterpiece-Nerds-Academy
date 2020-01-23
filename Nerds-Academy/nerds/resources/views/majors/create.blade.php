@extends('layouts.app')
 
@section('content')
    <div class="container">
    <form  action="{{route('majors.store')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
    <input type="text" name='name' class="form-control" placeholder="Major Name">
    </div>
    <div class="form-group">


    <select name="parent_id"  class="form-control">

    @foreach ($x as $item)
    @if(($item->parent_id)==0)
    <option value="{{$item->id}}">{{$item->name}}</option>
    @endif
    @endforeach

    </select>

    </div>
    <input type="submit" class="btn btn-outline-primary  ">
    </form>
</div>



@endsection

    








































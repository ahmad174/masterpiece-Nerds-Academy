@extends('layouts.app')
 
@section('content')
    <div class="container">
    <form  action="{{route('facilities.store')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
    <input type="text" name='name' class="form-control" placeholder="Facility Name">
    </div>

    <input type="submit" class="btn btn-outline-primary  ">
    </form>
</div>



@endsection

    








































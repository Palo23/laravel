@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card col-lg-8 col-md-12 col-sm-12 col-xs-12">
    <div class="card-header">User Page</div>
    <div class="card-body">
        
        <form action="{{ url('user/' .$users->id) }}" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
          <label>Name</label></br>
          <input type="text" name="name" id="name" value="{{$users->name}}" class="form-control"></br>
          <label>Email</label></br>
          <input type="text" name="address" id="address" value="{{$users->email}}" class="form-control"></br>
          <label>Phone</label></br>
          <input type="text" name="mobile" id="mobile" value="{{$users->phone}}" class="form-control"></br>
          <input type="submit" value="Update" class="btn btn-success"></br>
      </form>
    
    </div>
  </div>
</div>

@stop
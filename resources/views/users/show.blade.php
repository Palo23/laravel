@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center">
  <div class="card col-lg-8 col-md-12 col-sm-12 col-xs-12">
    <div class="card-header">Users Page</div>
    <div class="card-body">
    
          <div class="card-body">
          <h5 class="card-title">Name : {{ $users->name }}</h5>
          <p class="card-text">Email : {{ $users->email }}</p>
          <p class="card-text">Phone : {{ $users->phone }}</p>
    </div>
        
      </hr>
    
    </div>
  </div>
</div>

@endsection
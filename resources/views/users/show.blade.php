@extends('layouts.layout')
@section('content')
<div class="card">
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
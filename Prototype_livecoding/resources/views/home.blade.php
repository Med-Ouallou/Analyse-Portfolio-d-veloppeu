@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header">
    {{ $developer['name'] }}
  </div>
  <div class="card-body">
    <h5 class="card-title">{{ $developer['role'] }}</h5>
    <p class="card-text">{{ $developer['bio'] }}</p>
    <a href="mailto:{{ $developer['email'] }}" class="btn btn-primary">Me contacter</a>
  </div>
</div>
@endsection
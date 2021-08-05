@extends('app')

@section('title', $user->name)

@section('content')
  @include('nav')
  <div class="container">
    <form method="POST" action="/{name}/update" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="d-flex flex-row">
        <!-- <i class="fas fa-user-circle fa-3x"></i> -->
        <img src="/storage/app/public/images" width="100px" height="100px">
      </div>
      <div class="md-form">
        <input class="form-control" type="text" id="name" name="name" required value="{{ $user->name }}">
      </div>
      <input type="file" name="image">
      <button type="submit" class="btn btn-primary">変更</button>
    </form>
  </div> 
  @if (session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
  @endif
@endsection
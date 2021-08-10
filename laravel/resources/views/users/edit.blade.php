@extends('app')

@section('title', $user->name)

@section('content')
  @include('nav')
  <div class="container">
    <form method="POST" action="{{ route('users.update', ['name' => $user->name]) }}" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="d-flex flex-row">
        <img src="{{ asset("storage/images/$user->image_path") }}" width="100" height="100">
      </div>
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
          </ul>
      </div>
      @endif
      <div class="md-form">
        <input class="form-control" type="text" id="name" name="name" required value="{{ $user->name }}">
      </div>
      <input type="file" name="image_path">
      <button type="submit" class="btn btn-primary">登録</button>
      {{ csrf_field() }}
    </form>
  </div> 
  @if (session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
  @endif
@endsection
@extends('layouts.app')
@section('content')
<h1>update</h1>
  <form action="{{ url('uses/'.$user->id) }}" enctype="multipart/form-data">
  @csrf
  @method('PUT')

    <img src="{{ $user->profile_image }}" class="mr-2 rounded-circle" width="80" height="80" alt="profile_image">
    <input type="file" name="profile_image" class="@error('profile_image') is-invalid @enderror" autocomplete="profile_image">

    @error('profile_image')
      <strong>{{ $message }}</strong>
    @enderror
  </form>
@endsection
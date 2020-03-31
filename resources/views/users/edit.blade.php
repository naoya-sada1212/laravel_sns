@extends('layouts.app')
@section('content')
<h1>update</h1>
<form method="POST" action="{{ url('users/ .$user->id) }}"
@endsection
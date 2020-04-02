@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">編集</div>

        <div class="card-body">
          <form method="POST" action="{{ url('users/'.$user->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')


            <div class="form group row">
              <label for="screen_name" class="col-md-4 col-form-label text-md-right">{{ __('text') }}</label>
              
              <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is_invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>  
                @enderror  
              </div>
            </div>

            <div class="form group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
              
              <div class="col-md-6">
                <input id="email" type="text" class="form-control @error('email') is_invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>  
                @enderror  
              </div>
            </div>

            <div class="form-group row md-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn-btn-primary">更新する</button>
              </div>
            </div>
              

        </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
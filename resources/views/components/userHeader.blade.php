@guest
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
      {{ config('app.name', 'Baseball') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">

      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
       
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
        </li>
          @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('新規登録') }}</a>
            </li>

          @endif
      </ul>
    </div>   
  </div>
</nav> 
@else
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
      
    <a class="navbar-brand" href="{{ url('/') }}">laravel_sns</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="justify-content-end">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item mr-4">
          <a class="nav-link" href="{{ url('tweets') }}">タイムライン</a>
        </li>
        <li class="nav-item mr-4 active">
          <a class="nav-link" href="{{ url('users/'.Auth::user()->id) }}">プロフィール</a>
        </li>
        <li class="nav-item mr-5">
          <a href="{{ url('tweets/create') }}" class="btn btn-primary">ツイートする</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}<span class="caret"></span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ url('users/' .Auth::user()->id) }}">プロフィール</a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">{{ ('logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
      </ul>  
    </div>
    </div>
    </div>
  </nav>
@endguest

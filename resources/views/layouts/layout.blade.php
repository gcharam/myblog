<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyBlog</title>

    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="../style.css">
</head>
<body class="d-flex flex-column min-vh-100">
    
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">MyBlog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Console
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{url('showgame/'.$Console='Playstation_5')}}">Playstation 5</a></li>
                  <li><a class="dropdown-item" href="{{url('showgame/'.$Console='playstation_4')}}">Playstation 4</a></li>
                  <li><a class="dropdown-item" href="{{url('showgame/'.$Console='xboxseriesxs/'.$ConsoleID='3')}}">Xbox series X/S</a></li>
                  <li><a class="dropdown-item" href="{{url('showgame/'.$Console='xboxone/'.$ConsoleID='4')}}">Xbox One</a></li>
                  <li><a class="dropdown-item" href="{{url('showgame/'.$Console='pc/'.$ConsoleID='5')}}">PC</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Είδος
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{url('showkind/'.$Kind='adventure/'.$KindID='1')}}">Adventure</a></li>
                  <li><a class="dropdown-item" href="{{url('showkind/'.$Kind='fps/'.$KindID='2')}}">Fps</a></li>
                  <li><a class="dropdown-item" href="{{url('showkind/'.$Kind='strategy/'.$KindID='3')}}">Strategy</a></li>
                  <li><a class="dropdown-item" href="{{url('showkind/'.$Kind='sports/'.$KindID='4')}}">Sports</a></li>
                </ul>
              </li>
            </ul>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                          <span class="navbar-toggler-icon"></span>
                      </button>
      
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <!-- Left Side Of Navbar -->
                          <ul class="navbar-nav me-auto">
      
                          </ul>
      
                          <!-- Right Side Of Navbar -->
                          <ul class="navbar-nav ms-auto">
                              <!-- Authentication Links -->
                              @guest
                                  @if (Route::has('login'))
                                      <li class="nav-item">
                                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                      </li>
                                  @endif
      
                                  @if (Route::has('register'))
                                      <li class="nav-item">
                                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                      </li>
                                  @endif
                              @else
                                  <li class="nav-item dropdown">
                                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          {{ Auth::user()->name }}
                                      </a>
      
                                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="{{ route('profile') }}">
                                            {{ __('Profile') }}
                                          </a>
                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                              {{ __('Logout') }}
                                          </a>
                                          
      
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                              @csrf
                                          </form>
                                      </div>
                                  </li>
                              @endguest
                          </ul>
                      </div>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      

      @yield('content')

      <footer class="foot mt-auto bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-dark" href="">MyBlog</a>
        </div>
      </footer>

</body>
</html>
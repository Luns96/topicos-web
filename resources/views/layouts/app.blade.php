<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Curso Chino</title>

    {{-- font-icon --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('mdb/js/mdb.min.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{asset('mdb/css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ route('welcome') }}">Course</a>
            <div class="collapse navbar-collapse col-12 col-sm-10" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link pl-0">About</a></li>
                </ul>
            </div>
    
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                @guest
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Accounts
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                    @else
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @can('read-user')
                            <a href="{{  route('user.index') }}" class="dropdown-item">Manager Account</a>
                            <a href="{{  route('section.index') }}" class="dropdown-item">Manager Class</a>
                            @endcan
                            @hasanyrole('student|teacher')
                                <a href="{{ route('class', Auth::user()->id) }}">Class</a>
                            @endhasanyrole
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    @endguest
                    </div>
              </li>
            </ul>
          </nav>
            @yield('content')
    </div>
</body>
</html>

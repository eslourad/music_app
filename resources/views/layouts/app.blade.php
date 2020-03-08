<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{csrf_token()}}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'thenewj') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @guest
            <div class="guest-style ">
                <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'thenewj') }}
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav> -->
                <div class="container main-cont">
                    <h1 class="logo text-white">thenewj</h1>
                    <nav class="text-white">
                        <a class="links pt-2" href="{{ route('login') }}">Login</a>
                        <a class="links ml-5 pt-2" href="{{ route('register') }}">Register</a>
                    </nav>
                    
                </div>
                <main class="py-4">
                        @yield('content')
                    </main>
            </div>
        @else
            <div class="user-style">
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm override-navbar">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'thenewj') }}
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
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        @if(Auth::user()->is_admin == 1)
                                        <a class="dropdown-item" href="{{ route('music/add') }}"
                                        ">
                                                Add Music
                                        </a>
                                        <a class="dropdown-item" href="{{ route('users') }}"
                                        ">
                                                Users List
                                        </a>
                                        @endif
                                        <a class="dropdown-item" href="{{ route('playlists') }}">
                                                My Playlist
                                        </a>
                                        <a class="dropdown-item" href="{{ route('settings') }}">
                                                Update Profile
                                        </a>
                                        <a class="dropdown-item" href="{{ route('updatepassword') }}">
                                                Change Password
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        @endguest
    </div>
    <style>
        .main-cont {
            padding-top: 20px !important;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
        .logo {
        }
        .links {
            font-size: 1.5em;
            text-decoration: none;
            color: inherit;
        }
        .links:hover {
            color: #adadad;
            text-decoration: none;
            cursor: pointer
        }
        .text-white {
            color: white;
        }
        html, body, #app{
            height: 100% !important;
            width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            background-color: #e9e9e9;
        }
        .navbar {
            padding 0;
        }
        .guest-style {
            height: 110vh;
            background-color: #30303D;
        }
    </style>
</body>
</html>

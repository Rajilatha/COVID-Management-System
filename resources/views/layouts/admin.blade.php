<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
    <style>
        .navbar-custom {
            background-color:#336BFF;
        }
    
li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  font-size:20px;
  padding: 14px 25px;
  text-decoration: none;
}

li a:hover {
  background-color: #0052cc;
}
    </style>
</head>
<body >
<div  style="background-image:url({{url('/images/headern.jpg')}}); height:100px; width:1024; left-padding:0px;">  
    </div>
    <div id="app">
        
        <nav class="navbar navbar-expand-md navbar-light navbar-custom shadow-sm ">
            <div class="container">
                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.home') }}">{{ __('Dashboard') }}</a>
                                </li>
                    
                    <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.covid') }}">{{ __('Covid_Details') }}</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{ route('notices.index') }}">{{ __('Special Notice') }}</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.adminindex') }}">{{ __('SriLankan_Details') }}</a>
                                </li>     
                                
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
            </div>
        </nav>
        

        <main class="py-4">
        <div  style="background-image:url({{url('/images/bg4.jpg')}});">
            
        @yield('admin_content') 
        </div>
        </main>
    </div>
</body>
</html>

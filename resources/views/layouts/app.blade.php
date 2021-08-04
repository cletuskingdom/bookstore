<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('imgs/logo.png') }}" alt="{{ config('app.name') }}" class="img-fluid" id="logo">
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}"> Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!"> About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!"> Contact us</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/author/dashboard">
                                       Profile
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
                        @endguest
                        
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <footer>
            <div class="text-center bg-dark py-3 shadow-lg text-light">

                <div class="container pt-4">
                    <div class="row">
                        <div class="col-md-4 mb-4 py-2">
                            <h4>{{ config('app.name') }}</h4>

                            <article class="pt-2">
                                <b>{{ config('app.name') }}</b> is a
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </article>
                        </div>

                        <div class="col-md-4 mb-4 py-2">
                            <h4>Useful links</h4>

                            <ul class="navbar-nav ml-auto pt-2">
                                <li class="nav-item">
                                    <a class="nav-link txtColor" href="{{ url('/') }}">
                                        Home
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link txtColor" href="">{{ __('How it works') }}</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-4 mb-4 py-2">
                            <h4>Contact us</h4>

                            <article class="pt-2">
                                
                                <ul class="navbar-nav ml-auto pt-2">
                                    <li class="nav-item txtColor">
                                        <i class="fa fa-map-marker pr-2"></i>
                                        7 factory Road Aba, Abia State, Nigeria.
                                    </li>                                

                                    <li class="nav-item">
                                        <a href="tel:07063964065" class="nav-link txtColor"><i class="fa fa-phone pr-2" aria-hidden="true"></i> Call Now - 07063964065</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="tel:07063964065" class="nav-link txtColor"><i class="fa fa-phone pr-2" aria-hidden="true"></i> Call Now - 07063964065</a>
                                    </li>    
                                </ul>
                            </article>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="container">
                    <div class="row">
                        <div class="col-md-6 pt-3">
                            <p> <b class="txtColor">{{ config('app.name') }}.</b> &#169; Copyright <?=date('Y')?> </p>
                        </div>
    
                        <div class="col-md-6 pt-2">
                            <div class="d-flex justify-content-around">
                                <a href="" class="nav-link txtColor">Terms and conditions</a>
                                <a href="" class="nav-link txtColor">Privacy policy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>

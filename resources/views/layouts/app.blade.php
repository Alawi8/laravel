<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    
    
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{URL('style/css/style.css')}}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a>llll</a>

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
            @yield('content')
            
        </main>
        <footer>
            <div>
                <main class="flex-shrink-0">
                    <div class="container">
                        <h1 class="mt-5"></h1>
                        <p class="lead"></p>
                    </div>
                </main>

                <footer class="footer mt-auto py-3 bg-dark text-light">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <h5>futs</h5>
                                <a href="{{ route('fut.index') }}" class="nav-link active ">index</a>
                                <a href="{{ route('fut.create') }}" class="nav-link active">create</a>
                                <a href="#" class="nav-link active">softDelete</a>
                                <a href="" class="nav-link active">term مصطلح</a>
                            </div >
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <h5>admin</h5>
                                <a href="{{ route('admin.admin') }}" class="nav-link active">admin</a>
                                <a href="" class="nav-link active">is هو</a>
                                <a href="" class="nav-link active">person شخص </a>
                                <a href="" class="nav-link active">a</a>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <h5>posts</h5>
                                <a href="" class="nav-link active">arch itec ture</a>
                                <a href="" class="nav-link active">a</a>
                                <a href="" class="nav-link active">a</a>
                                <a href="" class="nav-link active">a</a>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <h5>doc</h5>
                                <a href="https://laravel.com/docs/9.x" class="nav-link active">documntation</a>
                                <a href="" class="nav-link active">a</a>
                                <a href="" class="nav-link active">a</a>
                                <a href="" class="nav-link active">a</a>
                            </div>
                        </div>
                    </div>
                </footer>
        </footer>

</body>

</html>

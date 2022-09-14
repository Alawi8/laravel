<html>

<head>
    <title>@yield('title')</title>
    <!--<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="{{url('style.style.css')}}"rel="stylesheet">
      </head>

<body>
    @section('sidebar')
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4 shadow p-3 mb-5  rounded">
            <div class="container-fluid ">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-light" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-1 ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">welcom</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                menu
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="">users</a>
                                </li>
                                <li>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('fut.index') }}">show fut</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="">create fut</a>
                                </li>
                                <li><a class="dropdown-item" href="">create</a></li>
                                <li><a class="dropdown-item" href="">store</a></li>
                                <li><a class="dropdown-item" href="">admin</a></li>
                                <li><a class="dropdown-item" href="">edit</a></li>
                                <li><a class="dropdown-item" href="">update</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    @show

    <div class="container">
        @yield('content')
    </div>

</body>

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
                    </div>
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
     <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</footer>

</html>

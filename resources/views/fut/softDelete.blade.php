<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @extends('../layouts/app')

    <title>Document</title>
</head>

<body>
    @section('content')
soft delete
        <div class="">
            <div class="row">
                @foreach ($futs as $fut)
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <a class="nav-link active" href="#">
                        <div class="card" >
                            <img src="https://www.apple.com/newsroom/images/product/os/macos/standard/Apple-WWDC22-macOS-Ventura-Spotlight-show-220606_big.jpg.large.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $fut->title }}</h5>
                                <p class="card-text">{{ $fut->body }}</p>
                                <p class="card-text">{{ $fut->created_at }}</p>
                                <a href="{{ route('fut.restore',$fut->id) }}" class="btn btn-primary">restore</a>

                                <form action="{{route('fut.forceDelete',$fut->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                </form>
                            </div>
                        </div>
                    </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
</body>

</html>

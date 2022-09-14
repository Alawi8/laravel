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
        <div class="container">
            <a href="{{ route('fut.show') }}" class="btn ">
                trash
            </a>

            <div class="row">

                @foreach ($futs as $fut)
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <a class="nav-link active" href="{{route('fut.product',$fut->id)}}">
                            @method('POST')
                            @csrf
                            <div class="card shadow p-3 mb-5 bg-body rounded ">
                                <form  action="{{ route('fut.destroy', $fut->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                        </svg>
                                    </button>
                                </form>

                                <img src="https://www.apple.com/newsroom/images/product/os/macos/standard/Apple-WWDC22-macOS-Ventura-Spotlight-show-220606_big.jpg.large.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $fut->title }}</h5>
                                    <p class="card-text">{{ $fut->body }}</p>
                                    <p class="card-text text-primary">{{ $fut->created_at }}</p>
                                </div>
                                <div class="row">
                                    <a href="{{ route('fut.edit', $fut->id) }}" class="btn shadow p-3 mb-0 bg-body ">edit</a>
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

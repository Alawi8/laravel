@extends('../layouts/app')

@section('content')
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <h5>{{ $futs->title }}</h5>
                <p>{{ $futs->body }}</p>
            </div>
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://www.apple.com/newsroom/images/product/os/macos/standard/Apple-WWDC22-macOS-Ventura-Spotlight-show-220606_big.jpg.large.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.apple.com/newsroom/images/product/os/macos/standard/Apple-WWDC22-macOS-Ventura-Spotlight-show-220606_big.jpg.large.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.apple.com/newsroom/images/product/os/macos/standard/Apple-WWDC22-macOS-Ventura-Spotlight-show-220606_big.jpg.large.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <h5>comments</h5>
                @foreach ($futs->comments as $comm)
                    <div class="alert alert-secondary" role="alert">
                        {{ $comm->comment }}
                    </div>
                @endforeach
            </div>
            <div class="col">
                <h5>phone</h5>
                @foreach ($futs->telephones as $phone)
                    <div class="alert alert-secondary" role="alert">
                        {{ $phone->number }}
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection

@extends('../layout/nav')

@section('content')
    
        @foreach ($posts as $post)

        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$post->title}}</h5>
              <p class="card-text">{{$post->body}}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
            <h1></h1>
            <p></p>
        @endforeach

@endsection
@section('footer')
    ffffffffffffffffffffffffffffffffffffffffffff
@endsection
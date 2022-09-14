@extends('../layouts/app')
@section('content')
    <!-- /resources/views/post/create.blade.php -->
    <!-- /resources/views/post/create.blade.php -->


    <!-- Create fut Form -->
    <h1>edit new futs</h1>

    <form class=" w-25" action="{{ route('fut.update', $futs->id) }}" method="POST">
        @method('PUT')
        @csrf
        <input class="w-100 form-control " type="text" name="title" value="{{ $futs->title }}"
            class="@error('title') is-invalid @enderror"><br>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input class="form-control w-100" class=" @error('title') is-invalid @enderror" type="text" name="body"
            value="{{ $futs->body }}"><br>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button class="btn btn-secondary" type="">submit</button>
    </form>
@endsection

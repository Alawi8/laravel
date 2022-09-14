@extends('../layout/nav')
@section('content')
    
<form action="{{route('posts.insert')}}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="enter title" >
    <input type="text" name="body" placeholder="enter title" >
    <button type="submit">submit</button>
</form>
@endsection
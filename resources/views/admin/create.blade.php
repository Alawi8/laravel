@extends('./layout/nav')
  @section('content')
      
  <h1>create new posts</h1>
  
  <form action="{{route('admin.store')}}" method="POST">
    @csrf
    <input class="" type="text" name="title" placeholder="enter title">
    <input  type="text" name="body" placeholder="enter body">
    <input type="datetime">
    <button type="submit">submit data</button>
</form>
@endsection
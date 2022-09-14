
<form action="{{route('admin.add',$posts-> id)}}" method="POST">
    @csrf
    <input type="text" name="title" value="{{$posts->title}}">
    <input type="text" name="body" value="{{$posts->body}}">
    <button type="submit">submit</button>

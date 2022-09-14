
<form action="{{route('admin.store')}}" method="POST">
    @csrf
    <input type="text" name="title" value="{{}}">
    <input type="text" name="body"  value="{{}}">
    <button type="submit">submit update</button>
</form>
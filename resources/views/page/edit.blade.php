Edit


<form action="/page/{{$page->id}}" method="POST">
    @method('PATCH')
    @csrf
    <input type="text" name="title" value="{{$page->title}}">
    <button type="submit">Izmeni</button>
</form>

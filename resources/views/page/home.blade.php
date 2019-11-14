<h1>Admin</h1>

<a href="/page/create">Kreiraj novu stranicu</a>
<br>

@foreach($pages as $page)
    <a href="/page/{{$page->id}}"> {{$page->title}}</a>||

    @endforeach
<h1>Kontrola stranice</h1>
{{$page->id}} {{$page->title}}

<a href="/page/{{$page->id}}/edit">Promeni naziv stranice</a><br>

Izaberi templejt <br>

<iframe src="/" height="600" width="1200"></iframe>





<form action="/page/{{$page->id}}" method="POST" >
    @method('DELETE')
    @csrf
    <br>
    <button type="submit">Obrisi</button>
</form>

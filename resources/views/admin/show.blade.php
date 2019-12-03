@extends('layouts.admin_layout')

@section('content')
<h1>Lista stranica</h1>

<ul>
    @foreach($pages as $page)
    <li>{{$page->page_title}} <a href="/admin/pages/{{$page->page_title}}/edit" class="btn btn-sm btn-info">Izmeni stranicu</a>
        <form action="/admin/pages/{{$page->page_title}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger">Obrisi stranicu</button>
        </form>
    </li>
        @endforeach
</ul>
@endsection
@extends('layouts.admin_layout')

@section('content')
    <h1>{{$page->page_title}}</h1>
    <form action="/admin/pages/{{$page->page_title}}" class="form-inline" enctype="multipart/form-data" method="POST">
        @csrf
        @method("PATCH")
        @include('layouts.input')
        <div class="col-md-12">
            <div class="content-box-large">
                @include('editable_templates.home')
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-info">Sacuvaj promene</button>
    </form>
@endsection
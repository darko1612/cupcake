@extends('layouts.admin_layout')

@section('content')
    <h1>Kreiraj novu stranicu</h1>
    <form action="store" method="POST" class="form-inline">
        @include('layouts.input')
        <button type="submit" class="btn btn-success btn-sm form-control form-control-sm mb-2">Sacuvaj</button>
    </form>
@endsection






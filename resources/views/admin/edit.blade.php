@extends('layouts.admin_layout')

@section('content')
    @include('layouts.admin_pages')
    <div class="col-md-12">
        <div class="content-box">
            <form action="" class="form-inline">
                @include('layouts.input')
            </form>
        </div>
    </div>
    <div class="col-md-12">
        <div class="content-box-large">

    Mesto za editovanje sadrzaja stranice
        </div>
    </div>
@endsection
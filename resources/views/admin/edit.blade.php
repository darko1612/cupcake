@extends('layouts.admin_layout')

@section('content')
    @include('layouts.admin_pages')
    <form action="" class="form-group" enctype="multipart/form-data">
        <div class="col-md-12">
            <div class="content-box">
                @include('layouts.input')
            </div>
        </div>
        <div class="col-md-12">
            <div class="content-box-large">
                @include('editable_templates.home')
            </div>
        </div>
    </form>
@endsection
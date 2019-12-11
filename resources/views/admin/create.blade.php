@extends('layouts.admin_layout')

@section('content')
    <h1>Kreiraj novu stranicu</h1>
    <form action="/admin/pages" method="POST" class="form-inline" enctype="multipart/form-data">
        @include('layouts.input')
        <button type="submit" class="btn btn-success btn-sm form-control form-control-sm mb-2">Sacuvaj</button>

        <div class="col-md-12">
            <div class="content-box-large" id="content">
                <div class="field">

                    @include('editable_templates.home')
                </div>
            </div>
        </div>
    </form>
    <script>
        $(document).ready(function () {
            $('#template').on('change', function () {
                let content = $('#content');
                var selected = ($('#template').children("option:selected").val());
                let field = $('.field');
                switch (selected) {
                    case '/home':
                        field.remove();
                        content.append(`<div class="field">@include('editable_templates.home')</div>`);
                        break;
                    case '/kontakt':
                        field.remove();
                        content.append(`<div class="field">@include('editable_templates.kontakt')</div>`);
                        break;
                    case '/o_meni':
                        field.remove();
                        content.append(`<div class="field">@include('editable_templates.o_meni')</div>`);
                        break;
                    case '/proizvodi':
                        field.remove();
                        content.append(`<div class="field">@include('editable_templates.proizvodi')</div>`);
                        break;
                }
            })
        });
    </script>

    <script src="{{asset('font_and_color.js')}}">

    </script>
@endsection






<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{asset('css/business-casual.min.css')}}" rel="stylesheet">
    {{--js--}}
    <script src="{{asset('font_and_color.js')}}"></script>
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <link href="https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyAu_CAaXrRB7Tfb6Dg6QwqzGXnJv3jw0vg" rel="stylesheet">
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('jquery/jquery.min.js')}}"></script>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!-- Logo -->
                <div class="logo">
                    <h1><a href="/admin">Admin</a></h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="row">
        <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="/admin"> Dashboard</a></li>
                    <li><a href="/admin/pages/create"> Dodaj novu stranicu</a></li>
                    @isset($first_page->page_title)
                        <li><a href="/{{ $first_page->page_title }}"> Poseti website</a></li>
                        <li><a href="/admin/pages">Upravljanje stranicama</a></li>
                    @endisset
                    <li><a href="#"> Pomoc</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-box">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{$page->page_title}}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/business-casual.min.css')}}" rel="stylesheet">
    <style>
        body {
            background-image:linear-gradient(rgba(47,23,15,.65),rgba(47,23,15,.65)),url("{{$page->background}}");background-attachment:fixed;background-position:center;background-size:cover
        }
    </style>

</head>

<body>

<h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3" style="font-family: 'Indie Flower'">{{$page->pre_title}}</span>
    <span class="site-heading-lower">{{$page->title}}</span>
</h1>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav" style="background-color:{{$page->nav_bar_color}} ">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                @foreach($pages as $page)
                    <li class="nav-item px-lg-4 {{Request::path() === $page->page_title ? 'active' : ''}}">
                        <a class="nav-link text-uppercase text-expanded" href="{{$page->page_title}}">{{$page->page_title}}
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    @endforeach
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="footer text-faded text-center py-5">
    <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2019</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('jquery/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>

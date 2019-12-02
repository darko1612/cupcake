<nav class="navbar navbar-expand-lg navbar-dark py-lg-4">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                @foreach($pages as $page)
                    <li class="nav-item px-lg-4 {{Request::path() === '/' ? 'active' : ''}}">
                        <a class="nav-link text-expanded text-secondary" href="/admin/pages/{{$page->page_title}}/edit">{{$page->page_title}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
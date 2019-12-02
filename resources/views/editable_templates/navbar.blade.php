<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <span class="text-primary">Izaberi boju navigacione trake</span><input name="nav_bar_color" type="color"/>
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                @foreach($pages as $page)
                    <li class="nav-item px-lg-4">
                        <span class="nav-link text-uppercase text-expanded">{{$page->page_title}}</span>
                    </li>
                @endforeach
            </ul>
        </div>
        <span class="text-primary">Izaberi boju linkova</span><input name="link_color" type="color"/>
    </div>
</nav>
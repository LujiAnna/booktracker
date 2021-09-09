<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
        <div class="container-fluid">
{{--            <a class="navbar-brand" style="text-align: center" href="{{ route('') }}">--}}
{{--                TBD--}}
{{--            </a>--}}
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar navbar-light">
                    <a class="nav-link active" style="text-align: center" aria-current="page" href="{{ route('home') }}">Your book tracker</a>
                </div>
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item">
                   <a class="nav-link" href="/home">My Books</a>
                  </li>
                </ul>
                <form class="d-flex"  method="get" action='search'>
                @csrf
                  <input class="form-control me-2" type="search" name='search' placeholder="Search books" aria-label="Search" value="">
                  <a href="/search" class="btn btn-outline-primary" role="button" type="submit">Search</a>
                </form>
            </div>
        </div>
    </nav>
</header>

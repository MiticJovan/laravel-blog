

    <div class="blog-masthead">
        <div class="container">
            <nav class="nav blog-nav">

                <a class="py-2" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
                </a>
                <a class="nav-link active" href="#">Tour</a>
                <a class="nav-link" href="#">Home</a>
                <a class="nav-link" href="#">About</a>

                @if (Auth::check())
                <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
                @endif
            </nav>
        </div>
    </div>

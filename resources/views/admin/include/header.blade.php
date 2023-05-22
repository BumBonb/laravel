<nav class="main-header navbar navbar-expand navbar-white navbar-light mb-3">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" class="ms-3 me-1" viewBox="0 0 65 65" role="img"><path xmlns="http://www.w3.org/2000/svg" fill="#ffffff" stroke="#000000" d="M60,52V4c0-2.211-1.789-4-4-4H14v51v3h42v8H10c-2.209,0-4-1.791-4-4s1.791-4,4-4h2v-3V0H8  C5.789,0,4,1.789,4,4v54c0,3.313,2.687,6,6,6h49c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1v-8C59.104,54,60,53.104,60,52z M23,14h12  c0.553,0,1,0.447,1,1s-0.447,1-1,1H23c-0.553,0-1-0.447-1-1S22.447,14,23,14z M42,28H23c-0.553,0-1-0.447-1-1s0.447-1,1-1h19  c0.553,0,1,0.447,1,1S42.553,28,42,28z M49,22H23c-0.553,0-1-0.447-1-1s0.447-1,1-1h26c0.553,0,1,0.447,1,1S49.553,22,49,22z"/></svg>
                <span class="fw-light fs-4">Library</span>
            </a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <div class="dropdown ">
                <a id="navbarDropdown" class="nav-link dropdown-toggle me-3" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('author') }}">
                        {{ Auth::user()->name }}
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                        {{ __('Выйти') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </li>
    </ul>
</nav>

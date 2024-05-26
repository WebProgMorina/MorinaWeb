<nav class="navbar navbar-expand-lg navbar-light" style="background-color: var(--1);">
    <div class="container">
        <img class="me-4" id="logo" src="{{ asset('images/logo.png') }}" alt="" style="width: px; height: auto;">
        <a id="font" class="navbar-brand text-white" href="">PKBM Morina</a>
        <button style="background-color: white; border: 2px solid var(--3);" class="navbar-toggler btn" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @if (Route::has('login'))
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @auth

                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <!-- resources/views/layouts/navigation.blade.php -->


                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ url('/dashboard') }}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ url('/paketa') }}">Paket A</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ url('/paketb') }}">Paket B</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ url('/paketc') }}">Paket C</a>
                            </li>
                            <li class="nav-item">
                                <button class="btn nav-link text-danger fw-bold ms-2" style="background-color: var(--2);"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Log Out
                                </button>
                                <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                </ul>
            @endif
        </div>
    </div>
</nav>
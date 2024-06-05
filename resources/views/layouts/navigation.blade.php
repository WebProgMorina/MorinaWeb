<nav class="navbar navbar-expand-lg navbar-light" style="background-color: var(--1);">
    <div class="container">
        <img class="me-4" id="logo" src="{{ asset('images/logo.png') }}" alt="" style="width: px; height: auto;">
        <a id="font" class="navbar-brand text-white" href="{{ route('dashboard') }}">PKBM Morina</a>
        <button style="background-color: white; border: 2px solid var(--3);" class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @if (Route::has('login'))
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @auth
                        @if(Auth::user()->role == 'admin')
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('paketa.index') }}">Paket A</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('paketb.index') }}">Paket B</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('paketc.index') }}">Paket C</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('pdf.index') }}">PDF Paket A</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('pdfB.index') }}">PDF Paket B</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('pdfC.index') }}">PDF Paket C</a>
                            </li>
                        @endif

                        @if(Auth::user()->role == 'user')
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('dashboard') }}">Library</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('pdf.view') }}">Paket A</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('pdfB.view') }}">Paket B</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('pdfC.view') }}">Paket C</a>
                            </li>
                        @endif

                        <li class="nav-item">
                            <button class="btn nav-link text-danger fw-bold ms-2" style="background-color: var(--2);"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Log Out
                            </button>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('info-a') }}">Paket A</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('info-b') }}">Paket B</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('info-c') }}">Paket C</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
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

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
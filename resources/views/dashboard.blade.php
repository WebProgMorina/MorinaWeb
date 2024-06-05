<x-app-layout>

    <body>


        <!-- <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: var(--1);">
            <div class="container">
                <img class="me-4" id="logo" src="images/logo.png" alt="" style="width: px; height: auto;">

                <a id="font" class="navbar-brand text-white" href="">PKBM Morina</a>
                <button style="background-color: white; border: 2px solid var(--3);" class="navbar-toggler btn"
                    type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    @if (Route::has('login'))
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            @auth
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
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
                                        <button class="btn  nav-link text-danger fw-bold ms-2"
                                            style="background-color: var(--2) ;"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Log Out
                                        </button>
                                        <form id="logout-form" method="POST" action="{{ route('logout') }}"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>

                            @else
                                <li class="nav-item">
                                    <a class="nav-link text-white " href="{{ route('login') }}">Log in</a>
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
    </header>-->
        <!--<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>

        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/pexels-andrea-piacquadio-840996.jpg " class="d-block w-100 object-fit-cover " alt="...">
                <div class="carousel-caption  ">
                    <h5 style=" color: var(--4); ">APAKAH KAMU <br> INGIN MENABUNG</h5>
                    <p class>Koperasi kami menawarkan beragam produk dan layanan tabungan</p>
                    <p><a href="pembayaran.php" class="btn   mt-3"
                            style=" border: 1px solid var(--3); color: var(--3); background-color: var(--4) ;">Learn
                            More</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/pexels-cowomen-2041627.jpg" class="d-block w-100 object-fit-cover " alt="...">
                <div class="carousel-caption">
                    <h5>INGIN TRANSFER <br> TANPA BIAYA ADMIN</h5>
                    <p>Nikmati kemudahan transfer tanpa biaya admin di koperasi kami</p>
                    <p><a href="pembayaran.php" class="btn   mt-3"
                            style=" border: 1px solid var(--3); color: var(--3); background-color: var(--4) ;">Learn
                            More</a>
                    </p>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>-->
        <div id=""><img class="img-fluid" id="img-hero" src="images/hero-image.png" alt=""></div>
        <section class="bg-light py-5">
            <div class="container-xl" style="">
                <div class="row mb-4">
                    <div class="col-12 mb-2 text-center">
                        <h1 style="font-size: 30px ; font-style: fw-bold; ">Tentang Kami</h1>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 text-center">
                        <img src="images\aboutus.png" class="img-fluid rounded" alt="Gambar Tentang Kami">
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0 pt-4 text-start">

                        <h3>YAYASAN MORINA</h3>
                        <p>PKBM Morina adalah lembaga pendidikan non-formal di Indonesia yang berfungsi sebagai pusat
                            kegiatan pembelajaran bagi masyarakat. PKBM Morina juga memberikan berbagai layanan
                            pendidikan
                            dan pelatihan yang bertujuan untuk meningkatkan keterampilan dan pengetahuan masyarakat di
                            luar
                            sistem pendidikan formal.</p>
                        <a href="mailto:sekolahmorina1@gmail.com" class="btn btn-dark">HUBUNGI KAMI</a>
                    </div>
                </div>
            </div>
        </section>


        <section class="services section-padding" id="services" style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(17,19,62,1) 33%, rgba(252,217,128,1) 100%);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center pb-5">
                            <h2 class="text-start mb-5 text-light ">Informasi Paket</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-4 mb-3">
                        <h3 class="card-title text-center text-light">Paket A</h3>
                        <img src="/images/paket-placeholder.png" class="card-img-top img-fluid " alt="Paket C">
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 mb-3">
                        <h3 class="card-title text-center text-light">Paket B</h3>
                        <img src="/images/paket-placeholder.png" class="card-img-top" alt="Paket C">
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 mb-3">
                        <h3 class="card-title text-center text-light">Paket C</h3>
                        <img src="/images/paket-placeholder.png" class="card-img-top  " alt="Paket C">
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-light py-5" style="background-color: #EBF2FF;">
            <div class="container-xl ">
                <div class="row mb-4">
                    <div class="col-12 mb-2 text-center">
                        <h2>INFO KONTAK</h2>
                        <hr>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6 mt-5  ">
                        <h2 class="mb-4 fw-bold  ">KISMAN - PEMILIK YAYASAN</h2>
                        <p>PKBM Morina adalah Pusat Kegiatan Belajar Masyarakat yang didedikasikan untuk menyediakan
                            pendidikan berkualitas bagi masyarakat. Kami berkomitmen untuk memberdayakan individu
                            melalui berbagai program pendidikan, termasuk Paket A, Paket B, dan Paket C. Hubungi kami
                            untuk informasi lebih lanjut tentang program kami atau untuk mendapatkan bantuan dari staf
                            kami yang ramah dan profesional.
                        </p>
                        <a href="mailto:sekolahmorina1@gmail.com" class="btn text-light mt-4  "
                            style="background-color: #11133E;  ">HUBUNGI
                            KONTAK</a>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="/images/omkisman.jpg" class="img-fluid rounded" alt="Om Kisman">
                    </div>
                </div>
            </div>
        </section>

        <section>
            </div>
            <section class="text-center py-5">
                <div class="container">
                    <p class="fs-5">VISIT US!</p>
                    <h1 class="display-4">Come and visit us at</h1>
                    <div class="ratio ratio-16x9">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.27567587927!2d106.684515!3d-6.2216111!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9877d204d91%3A0x2c372af0b19673d9!2sSekolah%20PKBM%20Morina%20pinang!5e0!3m2!1sen!2sid!4v1715961354007!5m2!1sen!2sid"
                            width="1180" height="418" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </section>



        </section>

    </body>
</x-app-layout>
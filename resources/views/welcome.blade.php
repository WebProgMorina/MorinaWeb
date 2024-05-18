<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PKBM Morina | Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap');

    * {
        font-family: 'Montserrat', sans-serif;
    }

    #img-hero {

        background-size: cover;
        background-position: center;
        height: auto;
        width: 100%;
        position: relative;
    }

    :root {
        --1: #11133E;
        --2: #FFDDBA;
        --3: #EBF2FF;
        --4: #FFFFFF;
        --5: #000000;

    }

    .section-padding {
        padding: 100px 0;
    }

    .carousel-item {
        height: 100vh;
        min-height: 300px;
    }

    .carousel-caption {
        bottom: 175px;

        z-index: 2;

    }


    .carousel-caption h5 {
        font-size: 45px;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-top: 40px;
    }

    .carousel-caption p {
        width: 60%;
        margin: auto;
        font-size: 18px;
        line-height: 1.9;
    }

    .carousel-inner:before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.7);
        z-index: 1;
    }

    .navbar .getstarted {
        background: #106eea;
        margin-left: 30px;
        border-radius: 4px;
        font-weight: 400;
        color: #dc7373;
        text-decoration: none;
        padding: .5rem 1rem;
        line-height: 2.3;
    }

    .navbar-nav a {
        font-size: 15px;
        text-transform: uppercase;
        font-weight: 500;
    }

    .navbar-light .navbar-brand {
        color: #000;
        font-size: 25px;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 2px;
    }

    .navbar-light .navbar-brand:focus,
    .navbar-light .navbar-brand:hover {
        color: #000;
    }

    .navbar-light .navbar-nav .nav-link {
        color: #000;
    }

    .navbar-light .navbar-nav .nav-link:focus,
    .navbar-light .navbar-nav .nav-link:hover {
        color: #000;
    }

    .w-100 {
        height: 100vh;
    }

    .navbar-toggler {
        padding: 1px 5px;
        font-size: 18px;
        line-height: 0.3;
        background: #791414;

    }

    .portfolio .card {
        box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);
    }

    .team .card {
        box-shadow: 15px 15px 40px rgba(0, 0, 0, 0.15);
    }

    .services .card-body i {
        font-size: 50px;

    }

    .team .card-body i {
        font-size: 20px;
    }


    #logo {
        width: 70px;
        height: auto;

    }

    #font {
        font-size: 30px;
    }



    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .carousel-caption {
            bottom: 370px;
        }

        .carousel-caption p {
            width: 100%;
        }

        .card {
            margin-bottom: 30px;
        }

        .img-area img {
            width: 100%;
        }

        #logo {
            width: 60px;
            height: auto;

        }

        #font {
            font-size: 30px;
        }
    }

    @media only screen and (max-width: 767px) {
        .navbar-nav {
            text-align: center;
        }

        .carousel-caption {
            bottom: 125px;
        }

        .carousel-caption h5 {
            font-size: 17px;
        }

        .carousel-caption a {
            padding: 10px 15px;
            font-size: 15px;
        }

        .carousel-caption p {
            width: 100%;
            line-height: 1.6;
            font-size: 12px;
        }

        .about-text {
            padding-top: 50px;
        }

        .card {
            margin-bottom: 30px;
        }

        #logo {
            width: 50px;
            height: auto;

        }

        #font {
            font-size: 20px;
        }
    }
</style>

<body>

    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
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
    </header>
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
                    <h2>Tentang Kami</h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <img src="images\aboutus.png" class="img-fluid rounded" alt="Gambar Tentang Kami">
                </div>
                <div class="col-md-6 mt-4 mt-md-0 pt-4 text-start">

                    <h3>YAYASAN MORINA</h3>
                    <p>PKBM Morina adalah lembaga pendidikan non-formal di Indonesia yang berfungsi sebagai pusat
                        kegiatan pembelajaran bagi masyarakat. PKBM Morina juga memberikan berbagai layanan pendidikan
                        dan pelatihan yang bertujuan untuk meningkatkan keterampilan dan pengetahuan masyarakat di luar
                        sistem pendidikan formal.</p>
                    <a href="mailto:contact@example.com" class="btn btn-dark">HUBUNGI KAMI</a>
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
                <div class="col-md-6 mt-5">
                    <h3>KISMAN - PEMILIK YAYASAN</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in velit metus. Nullam vel leo nec
                        lacus dignissim imperdiet. Proin luctus, ex id varius dignissim, odio velit rutrum ligula, vel
                        posuere lacus nisi eu mi. Nulla facilisi. Integer sit amet magna at elit mollis hendrerit.
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque
                        ut justo vel sapien interdum congue. Nam sed mauris in neque posuere lobortis.</p>
                    <a href="mailto:contact@example.com" class="btn text-light mb-4  "
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

    <footer class="text-center text-lg-start" style="background-color: var(--1);">



        <section class="mt-4">
            <div class="container text-center text-md-start pt-3 " style="color: white;  ">

                <div class="row mt-3">

                    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                        <h4 class="text-uppercase fw-bold">PKBM Morina</h4>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>Bacot hay</p>

                        <div class=" p-3 d-flex rounded-1" style="background-color: var(--2); color: black; ">
                            <div class="me-2 flex-grow-1">
                                <h6><i class=" "></i> E-mail</h6>
                                <p><i class=" "></i> ase@gmail.com</p>
                            </div>
                            <div class="flex-grow-1">
                                <h6><i class=""></i> Phone</h6>
                                <p><i class=""></i> +62 812 2166 6690</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-9 col-lg-8 col-xl-9 text-center ">
                        <div class="row justify-content-end">
                            <div class="col-md-4 col-lg-4 col-xl-4 mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold">Social media</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <p><i class="fa fa-envelope mr-3"></i> Instagram</p>
                                <p><i class="fa fa-envelope mr-3"></i> Facebook</p>
                                <p><i class="fa fa-envelope mr-3"></i> X</p>


                            </div>

                            <div class="col-md-4 col-lg-4 col-xl-4 mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold">Program</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <p><i class="fa fa-envelope mr-3"></i> ase@gmail.com</p>
                                <p><i class="fa fa-phone mr-3"></i> +62 812-2166-6690</p>
                            </div>

                            <div class="col-md-4 col-lg-4 col-xl-4 mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold">Dukungan</h6>
                                <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <p><i class="fa fa-envelope mr-3"></i> Tentang Kami</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a class="" style="color: white;">Damen.com</a>
        </div>
    </footer>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PKBM Morina | Dashboard</title>
    <link rel="stylesheet" href="">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap');

    * {
        font-family: 'Montserrat', sans-serif;
    }

    body {
        background-color: var(--3);
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
    @include('layouts.navigation')
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif
    <main>
        {{ $slot }}
    </main>

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
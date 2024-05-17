<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PKBM Morina | Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .about-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            padding-top: 100px;
            padding-bottom: 100px;
            background-color: #EBF2FF;
        }

        .about-container img {
            max-width: 100%;
            height: auto;
            flex: 1;
            display: block;
            margin: 0 auto;
        }

        .text-content {
            flex: 1;
            text-align: left;
        }

        .text-content h1 {
            margin-top: 0;
            font-size: 36px;
        }

        .text-content p {
            margin-top: 10px;
            line-height: 1.6;
            margin-right: 300px;
            font-size: 18px;
        }

        #h1-paket {
            padding-left: 300px;
            padding-top: 25px;
            padding-bottom: 25px;
        }

        #paket-info {
            display: flex;
            justify-content: space-evenly;
            padding: 100px 200px 100px;
            background-color: #11133E;
        }

        .paket-card {
            text-align: center;
            flex: 1;
        }

        .paket-card p {
            margin-bottom: 10px;
            font-size: 20px;
        }

        .paket-card img {
            max-width: 100%;
            height: auto;
        }

        #info-kontak {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            padding-top: 100px;
            padding-bottom: 100px;
            background-color: #EBF2FF;
        }

        #info-kontak .text-content {
            text-align: left;
            margin-right: 0;
        }

        #info-kontak img {
            max-width: 100%;
            height: auto;
            flex: 1;
            display: block;
            margin: 0 auto;
        }

        #h1-kontak {
            padding-top: 50px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="hero">

    </div>
    <div class="about-container">
        <img src="aboutus.png" alt="About Us">
        <div class="text-content">
            <h1>TENTANG KAMI</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in velit metus. Nullam vel leo nec lacus
                dignissim imperdiet. Proin luctus, ex id varius dignissim, odio velit rutrum ligula, vel posuere
                lacus nisi eu mi. Nulla facilisi. Integer sit amet magna at elit mollis hendrerit. Vestibulum ante
                ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque ut justo vel sapien
                interdum congue. Nam sed mauris in neque posuere lobortis.</p>
        </div>
    </div>
    <h1 id="h1-paket">INFORMASI PAKET</h1>
    <div id="informasi-paket">
        <div id="paket-info">
            <div class="paket-card">
                <p>Paket A</p>
                <img src="paket-placeholder.png" />
            </div>
            <div class="paket-card">
                <p>Paket B</p>
                <img src="paket-placeholder.png" />
            </div>
            <div class="paket-card">
                <p>Paket C</p>
                <img src="paket-placeholder.png" />
            </div>
        </div>
    </div>
    <h1 id="h1-kontak">INFO KONTAK</h1>
    <div id="info-kontak">
        <div class="text-content">
            <h1>KISMAN - PEMILIK YAYASAN</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in velit metus. Nullam vel leo nec lacus
                dignissim imperdiet. Proin luctus, ex id varius dignissim, odio velit rutrum ligula, vel posuere
                lacus nisi eu mi. Nulla facilisi. Integer sit amet magna at elit mollis hendrerit. Vestibulum ante
                ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque ut justo vel sapien
                interdum congue. Nam sed mauris in neque posuere lobortis.</p>
        </div>
        <img src="aboutus.png" alt="About Us">
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    /* Rectangle 11 */
    .about-container {
        display: flex;
        align-items: flex-start;
        /* Align items to the start of the container vertically */
        gap: 20px;
        /* Space between the image and text */
    }

    .about-container img {
        max-width: 100%;
        /* Ensure the image doesn't exceed its container's width */
        height: auto;
        /* Maintain aspect ratio */
        flex: 1;
        /* Allow the image to grow and shrink based on container size */
    }

    .text-content {
        flex: 2;
        /* Allow the text content to take up more space than the image */
    }

    .text-content h1 {
        margin-top: 0;
        /* Remove default margin from the top of h1 */
    }

    .text-content p {
        margin-top: 10px;
        /* Add some space between the h1 and p elements */
        line-height: 1.6;
        /* Improve readability */
    }
    </style>
</head>

<body>
    <div id="hero">

    </div>
    <div id="about-us">
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

    </div>
</body>

</html>
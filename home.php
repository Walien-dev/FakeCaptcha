<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Un captcha cool</title>

    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class="captcha">
        <div class="c-center-container c-left">
            <div class="c-checkbox-0 c-checkbox-border"></div>
            <div class="c-checkbox-1 c-checkbox-borderAnimation"></div>
            <div class="c-checkbox-2"></div>
            <div class="c-checkbox-3"></div>
            <div class="c-checkbox-4"></div>
            <div class="c-checkbox-5"></div>
        </div>
        <div class="text">I'm not a robot</div>
        <div class="logo">
            <div class="imglogo"></div>
            <p>reCAPTCHA</p>
            <p class="bas">Privacy - Terms</p>
        </div>
        <div class="challenge">
            <div class="prompt">
                Select all images with
                <strong>cats</strong>
            </div>
            <div class="grid">
                <div class="grid-img1"></div>
                <div class="grid-img2"></div>
                <div class="grid-img3"></div>
                <div class="grid-img4"></div>
                <div class="grid-img5"></div>
                <div class="grid-img6"></div>
                <div class="grid-img7"></div>
                <div class="grid-img8"></div>
                <div class="grid-img9"></div>
            </div>
            <div class="below">
                <button class="main">Verify</button>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
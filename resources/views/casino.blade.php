<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Хит-Продукт</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
</head>
<body>
@include('layouts.header')
<div class="casino-container">
    <div class="left-side">
        <img class="left-side-img" src="{{ asset('images/banners/меню.png') }}" alt="Зелёная зона">
    </div>
    <div class="right-side">
        <div class="animation-zone">
            <img class="right-side-img" src="{{ asset('animations/m2-2b.svg') }}" alt="Зелёная зона">
        </div>
        <div class="right-bottom">
            <div class="text-zone">
                <h3>КАЗИНО</h3>
                <p>Текст</p>
            </div>
        </div>
    </div>
</div>
<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    .casino-container {
        display: flex;
        width: 100%;
        height: 100vh;
    }

    .left-side,
    .right-side {
        flex: 1;
        height: 100%;
    }

    .left-side {
        border-right: 5px solid black;
    }

    .left-side img {
        height: 100%;      /* растягивает изображение по высоте */
        width: 100%;
        object-fit: cover; 
        display: block;
    }

    .right-side{
        border-right: 5px solid black;
        display: flex;
        flex-direction: column;
        height: 100%;
        background-color: #D2F8A9;
        min-height: 100vh;
    }

    .right-side img {
        width: 104%;
        margin-left:-30px;
        object-fit: cover;
        display: block;
    }

    .animation-zone {
        display: block;
        z-index: 1;
        overflow: hidden;
    }

    .right-bottom{
        background-color: #D2F8A9;
        width: 100%;
        height: 50%; /* точно половина высоты, как и animation-zone */
        position: relative;
        z-index: 2;
    }

    .text-zone {
        flex: 1;
        padding: 50px 71px;
        color: #00A237;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .text-zone h3 {
        font-size: 28px;
    }

    .text-zone p {
        font-size: 11.7px;
    }

    /* Desktop responsive breakpoints */
    @media (min-width: 1980px) {
        .casino-container {
            height: 100vh;
        }

        .animation-zone {
        }

        .right-bottom {
            height: 50%;
        }

        .text-zone {
            padding: 50px 100px;
        }

        .text-zone h3 {
            font-size: 40px;
        }

        .text-zone p {
            font-size: 16px;
        }
    }

    @media (min-width: 1920px) and (max-width: 1979px) {
        .casino-container {
            height: 100vh;
        }

        .animation-zone {
            height: 50%;
        }

        .right-bottom {
            height: 50%;
        }

        .text-zone {
            padding: 70px 85px;
        }

        .text-zone h3 {
            font-size: 36px;
        }

        .text-zone p {
            font-size: 14px;
        }
    }

    @media (min-width: 1366px) and (max-width: 1919px) {
        .casino-container {
            height: 100vh;
        }

        .animation-zone {
            height: 50%;
        }

        .right-bottom {
            height: 50%;
        }

        .text-zone {
            padding: 60px 80px;
        }

        .text-zone h3 {
            font-size: 32px;
        }

        .text-zone p {
            font-size: 12px;
        }
    }

    /* Responsive breakpoints for mobile */
    @media (max-width: 870px) {
        .casino-container {
            flex-direction: column;
        }

        .left-side {
            border-right: 0;
            border-bottom: 5px solid black;
            height: 50vh;
        }

        .right-side {
            border: 5px solid black;
            border-top: 0;
            height: auto;
            min-height: 50vh;
        }

        .text-zone {
            padding: 30px 20px;
        }

        .text-zone h3 {
            font-size: 24px;
        }
    }

    @media (max-width: 480px) {
        .casino-container {
        }

        .left-side {
            height: 40vh;
        }

        .right-side {
            min-height: 40vh;
        }

        .text-zone {
            padding: 20px 15px;
        }

        .text-zone h3 {
            font-size: 20px;
        }

        .text-zone p {
            font-size: 10px;
        }
    }

</style>
@include('layouts.footer')
</body>
</html>

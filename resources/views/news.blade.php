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
<div class="hit-product-container">
    <div class="left-side">

    </div>
    <img class="center-image" src="{{ asset('images/banners/корзина (1).png') }}" alt="Зелёная зона">
    <div class="right-side">

    </div>
</div>
<div class="bottom-section">
    <div></div>
    <div></div>
    <div></div>
    <div style="border-right: 5px solid black!important;"></div>
</div>
<style>
    .hit-product-container {
        display: flex;
        width: 100%;
        height: 90vh; /* верхняя часть экрана — половина высоты */
        border: 5px solid black;
        position: relative;
    }

    .center-image {
        position: absolute;
        top: 98%;              /* по вертикали */
        left: 50%;             /* по горизонтали */
        transform: translate(-50%, -50%); /* точно в центр */
        z-index: 10;
        width: 200px; /* или нужный размер */
        height: auto;
        pointer-events: none; /* чтобы не перекрывать клики (по желанию) */
    }

    .left-side,
    .right-side {
        flex: 1; /* 50% ширины каждый */
    }

    .left-side{
        border-right: 5px solid black;
    }

    /* Правая часть */
    .green-zone {
        height: 100px;
    }
    .green-zone img{
        width: 100%;
    }

    .text-zone {
        width: 100%;
        height: 450px;
        margin-top: -21px;
        padding: 30px 20px;
        border-top: 5px solid black;
        color: #00A438;
        background-color: #F3DFE9;
    }

    .image-zone img.product-image {
        max-width: 100%;
        height: auto;
        max-height: 200px;
        object-fit: contain;
    }

    /* Нижняя секция */
    .bottom-section {
        display: flex;
    }

    .bottom-section > div {
        flex: 1;
        height: 300px;
        background-color: #f2f2f2;
        border: 5px solid black;
        border-top: 0;
        border-right: 0;

    }
</style>
@include('layouts.footer')
</body>
</html>

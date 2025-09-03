<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Хит-Продукт</title>
    <link rel="stylesheet" href="{{asset('css/cart.css')}}"/>
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
        height: 100dvh; /* теперь точно вся высота экрана */
    }

    .left-side,
    .right-side {
        flex: 1;
    }

    .left-side {
        border-right: 5px solid black;
    }

    .left-side img {
        height: 100%;      /* растягивает изображение по высоте */
        width: 100%;
        object-fit: cover; /* сохраняет пропорции и обрезает лишнее */
        display: block;
    }

    .right-side{
        display: flex;
        flex-direction: column;
        height: 100%;
        border: 5px solid black;
        border-left: 0;
        border-top: 0
    }

    .animation-zone {
        height: auto;
        display: block;
        z-index: 1;

    }

    .right-side img {
        height: 102%;      /* растягивает изображение по высоте */
        width: 100%;
        object-fit: cover; /* сохраняет пропорции и обрезает лишнее */
        display: block;
    }

    .right-bottom{
        background-color: #D2F8A9;
        width: 100%;
        flex: 1; /* занимает всё оставшееся пространство */
        margin-top: -34px;
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

</style>

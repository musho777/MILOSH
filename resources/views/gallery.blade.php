<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>МАГАЗИН/SHOP</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/shop.css')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">

</head>
<body>
@include('layouts.header')
<div class="shop-container">
    <div class="shop-banner">
        <img class="shop-image" style="width: 50%" src="{{ asset('images/banners/галерея.png') }}" alt="Subtract">
        <p class="description">
            В нашей Галерее представлены товары, выпущенные ограниченным тиражом, в единственном экземпляре и изготовленные в ателье.
            Каждое изделие имеет сертификат подлинности и представлено в фирменной упаковке.
        </p>
    </div>

    <div class="product-row">
        <div class="product-box">Товар 1</div>
        <div class="product-box">Товар 2</div>
        <div class="product-box">Товар 3</div>
        <div class="product-box">Товар 4</div>

        <div class="product-box tall-box">
            <img src="{{ asset('animations/n2.svg') }}" alt="Subtract">
        </div>
        <div class="product-box">Товар 6</div>
        <div class="product-box">Товар 7</div>
        <div class="product-box">Товар 8</div>

        <!-- Пропускаем товар 9 — он объединён с 5 -->

        <div class="product-box">Товар 10</div>
        <div class="product-box">Товар 11</div>
        <div class="product-box tall-box">Товар 12 (12+16)</div>
        <div class="product-box">Товар 13</div>
        <div class="product-box">Товар 14</div>
        <div class="product-box">Товар 15</div>

        <!-- Пропускаем товар 16 — он объединён с 12 -->
    </div>



</div>
<div>
    <img style="display: block;" src="{{ asset('animations/n1.svg') }}" alt="Subtract">
</div>
</body>
<style>
    .product-row {
        display: grid;
        grid-template-columns: repeat(4, 1fr); /* 4 столбца */
    }


    .product-box {
        border: 2px solid black;
        text-align: center;
        height: 360px;
        box-sizing: border-box;
        border-bottom: 0;
        border-top: 5px solid black;

    }

    .product-box.tall-box {
        position: relative; /* нужно для абсолютного позиционирования вложенного img */
        grid-row: span 2;
        height: calc(2 * 350px + 20px); /* 2 строки + gap */
        padding: 20px;
        border: 2px solid black;
        box-sizing: border-box;
        border-top: 3px solid black;
        border-bottom: 0;
    }

    .product-box.tall-box img {
        position: absolute;
        top: -3px;
        right: -4px;
        width: 59.3px;
    }



</style>
</html>

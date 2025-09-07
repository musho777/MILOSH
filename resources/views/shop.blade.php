<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>МАГАЗИН/SHOP</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">

</head>
<body>
@include('layouts.header')
<div class="shop-container">
    <div class="shop-banner">
        <img class="shop-image" style="width: 50%" src="{{ asset('images/banners/Group 79.png') }}" alt="Subtract">
        <p class="description">
            Наш интернет-магазин, это удобное и комфортное пространство для покупок.<br>
            К вашим услугам — персональная консультация специалиста, который посоветует и поможет сориентироваться в выборе.<br>
            Здесь Вы можете приобрести изделие из ограниченных серий или из классических коллекций.<br>
            Тщательно подобранный ассортимент, находясь на грани коммерческой реальности и культурного интереса, всегда оригинальный, эклектичный.<br>
            Это микс аксессуаров, которые превосходят повседневные вещи, определяют индивидуальность и привносят дополнительный штрих<br>
            стиля и красоты, что всегда неожиданно, но так приятно.<br>Каждое изделие имеет сертификат подлинности и представлено в фирменной упаковке.<br>
            Откройте для себя динамичное приобретение, новые материалы, в которых сочетаются прошлое и будущее.<br>
            Будьте с нами, Интернет-магазин бренда открыт для всех!
        </p>
    </div>

    <main class="grid">
        <a href="{{ route('showCatalogPage', ['category' => 'Сумка-пакет']) }}"><div class="grid-item">Сумка-пакет</div></a>
        <a href="{{ route('showCatalogPage', ['category' => 'Аксессуары']) }}"><div class="grid-item">Аксессуары</div></a>
        <a href="{{ route('showCatalogPage', ['category' => 'Одежда']) }}"><div class="grid-item">Одежда</div></a>
        <a href="{{ route('showCatalogPage', ['category' => 'Сумки']) }}"><div class="grid-item">Сумки</div></a>
    </main>




</div>
<div>
    <img style="display: block" src="{{ asset('animations/n1.svg') }}" alt="Subtract">
</div>
</body>
</html>

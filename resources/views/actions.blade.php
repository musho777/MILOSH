<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>MILOSH</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
</head>
<body>
@include('layouts.header')
<div class="container-actions">


    <div class="top-block">
        <img src="{{ asset('/images/banners/Group 98.png') }}" alt="♥">
    </div>

    <div class="top-block-2">

    </div>

    <div class="grid">
        <!-- 12 ячеек -->
        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>

        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>

        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>
        <div class="cell"></div>
    </div>
</div>
@include('layouts.footer')
</body>
</html>
<style>

    .container-actions {
        border: 4px solid #000;
    }

    /* Заголовок (если используется) */
    .title {
        text-align: center;
        margin-bottom: 20px;
        font-size: 24px;
    }

    /* Первый верхний блок с изображением */
    .top-block {
        height: 300px; /* увеличенная высота */
        border: 3px solid #000;
        border-top: 0;

        display: flex;              /* центрирование */
        justify-content: center;   /* по горизонтали */
        align-items: center;       /* по вертикали */
    }

    /* Второй верхний блок */
    .top-block-2 {
        height: 300px; /* увеличенная высота */
        border: 2px solid #000;
    }

    /* Сетка */
    .grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
    }

    /* Ячейки */
    .cell {
        aspect-ratio: 1 / 1;
        border: 3px solid #000;
    }


</style>

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
    <div class="right-side">
        <div class="green-zone">
            <img class="green-zone-img" src="{{ asset('images/banners/Green zone.png') }}" alt="Зелёная зона">
        </div>
        <div class="text-zone">
            <h3>ХИТ-продукт</h3>
            <p>Особая примета бренда – направление Хит-продукт – воплощение<br> fashion-модернизма - бесподкладочные кожгалантерейные изделия,<br>включающие в себя большой и разнообразный товарный ряд:<br>
                сумки-пакеты, клатчи, чехлы, футляры. Ироничные, яркие,смелые вещи,<br> возведенные в ранг настоящего искусства.<br>Своеобразная визитная карточка – удобные, функциональные и при этом <br>невероятно стильные сумки-пакеты. Собственно, именно MILOSH <br>принадлежит сама идея подобного форм-фактора сумок. Уникальные <br>изделия, напоминающие по форме пакет, невероятно прочные, <br>практичные и очень вместительные. Ноу-хау заключается в том,<br>
                что изнанке уделяется не меньше внимания, чем лицевой стороне.<br>
                Не прикрывая подкладкой внутреннюю сторону изделия, наглядно <br>демонстрируется технологическое совершенство исполнения, которое<br> исключительно сочетается с продуманным выбором кож и молний.<br>Так притворяется в жизнь главный принцип<br>
                «совершенство снаружи и внутри».
            </p>
        </div>
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
    }

    .left-side,
    .right-side {
        flex: 1; /* 50% ширины каждый */
    }

    .left-side{
        border-right: 5px solid black;
    }


    .green-zone img{
       display: block;
       width: 100%;
    }

    .right-side {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .text-zone {
        flex: 1; /* займет всё оставшееся место */
        margin-top: 0;
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
        border: 5px solid black;
        border-top: 0;
        border-right: 0;

    }
</style>

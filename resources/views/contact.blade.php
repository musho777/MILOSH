<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Контакт</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
</head>
<body>
@include('layouts.header')
<div class="contact-container">
    <div class="contact">
        <img class="contact-img" src="{{asset('images/banners/контакты (1).png')}}" alt="контакт">
    </div>
</div>
<style>

    .contact-container {
        display: flex;
        justify-content: center;
        align-items: center;
        border: 5px solid black;
        flex-direction: column;
        height: 100dvh;
        padding: 30px 0;
        box-sizing: border-box;
    }

    .nav__right{
        flex: 0 0 44%;
    }


    .contact-img {
        max-height: 80vh;
        width: auto;
    }
</style>

</body>
</html>

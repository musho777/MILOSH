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
<section class="certificates">
    <h2 class="cert-title">СЕРТИФИКАТЫ</h2>

    <img src="{{ asset('images/banners/_Слой_1.svg') }}" alt="Сертификаты" class="cert-image">

    <div class="cert-descriptions">
        <p>Регистрационный номер декларации о соответствии<br>
            № ЕАЭС N RU Д-RU.АЮ58.B.62127/22</p>

        <p>Регистрационный номер декларации о соответствии<br>
            ЕАЭС N RU Д-RU.АЮ38.B.30715/21</p>

        <p>Регистрационный номер декларации о соответствии<br>
            ЕАЭС N RU Д-RU.ПА01.В.48132/24</p>
    </div>
</section>
@include('layouts.footer')
</body>
<style>

    .certificates {
        padding: 50px 20px;
        text-align: center;
        border: 4px solid black;
    }

    .cert-title {
        font-size: 36px;
        margin-bottom: 40px;
    }

    .cert-image {
        max-width: 63%;
        height: auto;
        margin-bottom: 30px;
    }

    .cert-descriptions {
        display: flex;
        justify-content: center;
        gap: 40px;
        flex-wrap: wrap;
    }

    .cert-descriptions p {
        max-width: 300px;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        text-align: center;
    }
</style>

</html>

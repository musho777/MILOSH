<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Хит-Продукт</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
         <div class="basket-icon">
                <img src="{{ asset('assets/images/корзина5.svg') }}" alt="Корзина">
            </div>
        <div class="right-bottom">
            <div class="text-zone">
                <h3>КАЗИНО</h3>
                <p>Текст</p>
            </div>
           
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
        min-height: 100%;
        position: relative;
    }

    .center-image {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        z-index: 20;
        width: 200px;
        height: 200px;
    }

    .center-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
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
        position: relative;
    }

    .right-side img {
        width: 104%;
        margin-left:-12px;
        object-fit: cover;
        display: block;
    }

    .basket-icon img{
          width: 100%;
        margin-left:-200px;
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
        overflow: visible;
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

    .basket-icon{
        width: 400px;
        height: 50px;
        position: absolute;
        left: 0;
        right: 0;
        bottom: 100px;
        z-index: 10;
        display: flex;
        justify-content: center;
        align-items: center;
    }
     .basket-icon{
            width: 200px;
            bottom: 100px;
            left: 0;
            right: 0;
        }
        
        .basket-icon img{
            width: 200px;
            height: 190px;
        }
    
    /* .basket-icon img{
        width: 400px;
        height: 380px;
    } */

    /* Desktop responsive breakpoints */
    @media (max-width: 2280px) {
        .basket-icon{
            width: 200px;
            bottom: 100px;
            left: 0;
            right: 0;
        }
        
        .basket-icon img{
            width: 200px;
            height: 190px;
        }
    }

    @media (min-width: 1920px) and (max-width: 1979px) {
        .casino-container {
            height: 100%;
        }

        .animation-zone {
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
            min-height: 100%;
        }

        .animation-zone {
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
        .basket-icon{
            display:none
        }
        
        .center-image {
            width: 150px;
            height: 150px;
        }
        .casino-container {
                flex-direction: column-reverse;
           
        }

        .left-side {
            border-right: 0;
            border-bottom: 5px solid black;
            width: 100%;
            height: 50%;
        }

        .right-side {
            border: 5px solid black;
            border-top: 0;
            height: auto;
            width: 100%;
            position: relative;
        }

        .text-zone {
            padding: 30px 20px;
        }

        .text-zone h3 {
            font-size: 24px;
        }
        
        .basket-icon{
            width: 180px;
            bottom: 90px;
            left: 0;
            right: 0;
        }
        
        .basket-icon img{
            width: 180px;
            height: 171px;
        }
    }
      @media (max-width: 768px) {
        .basket-icon{
            display:none
        }
        
        .center-image {
            width: 120px;
            height: 120px;
        }
            .casino-container {
                flex-direction: column-reverse;
                height: auto;
            }
            .left-side img{
                width: 100%;
            }
            .left-side {
                border-right: 0;
                border-bottom: 5px solid black;
                width: 100%;
                height: auto;
                min-height: 250px;
            }
            
            .right-side {
                width: 100%;
                height: auto;
            }
            
            .text-zone {
                padding: 12px;
                max-width: 100%;
                width: 100%;
            }
            
            .text-zonep {
                font-size: 14px;
                line-height: 1.4;
                padding-bottom: 12px;
                width: 100%;
                max-width: 100%;
            }
            
            .title {
                font-size: 24px;
                margin-bottom: 10px;
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

        .basket-icon{
            width: 150px;
            bottom: 80px;
            left: 0;
            right: 0;
        }
        
        .basket-icon img{
            width: 150px;
            height: 143px;
        }
    }

</style>
@include('layouts.footer')
</body>
</html>

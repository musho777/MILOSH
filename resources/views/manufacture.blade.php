<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Хит-Продукт</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <style>

        .hit-product-container {
            display: flex;
            width: 100%;
            border: 5px solid black;
            border-bottom:0;
            border-top:0;
        }

        .left-side,
        .right-side {
            flex: 1;
            position: relative;
            min-height: 100%;
            height:auto;
            background-color: #F5DEA4;
            display: flex;
            justify-content: center;
            align-items: center;
        }



        .fone {
            display: block;
            width: 100%;
            height: 100%!important;
            margin-bottom: 0;
        }


        .left-side {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border-right: 5px solid black;
            overflow: hidden;
            height: auto;
        }

        .fone {
            width: 100%;
            height: auto;
            display: block;
        }

        .animation-glaz {
            position: absolute;
            width: 98.7%;
            height: auto;
            z-index: 1;
        }

        .left-side-bottom {
            /* border-top: 5px solid black; */
        }

        .left-side-bottom img {
            display: block;
            width: 100%;
            height: auto;
            margin-bottom: 0; /* На всякий случай */
        }


        .right-side {
            display: flex;
            flex-direction: column;
            /* align-items: center; */
        }
        .right-side  div{
        }

        .green-zone {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .green-zone img {
            max-height: 100%;
            max-width: 100%;
            width: 100%;
        }

        .text-zone {
            flex: 1;
            padding: 15px ;
            color: #784416;
            display: flex;
            flex-direction: column;
            gap: 15px;
            max-width: 663px;
        }
        .title{
            color:#CE823E;
            font-family: "Comfortaa";
            font-weight: 700;
            font-size: 32px !important;
            vertical-align: middle;
        }
        .text-zonep {
            font-size: 16px;
             color:#784416;
            font-family: "Comfortaa";
            font-weight: 700;
            vertical-align: middle;
            width: 663px;
            font-family: Comfortaa;
            line-height: 150%;
            letter-spacing: -1.1%;
            padding-bottom:40px;
            word-wrap: break-word;
            overflow-wrap: break-word;
            hyphens: auto;
        }

        /* Responsive styles to fix UI crash */
        @media (max-width: 1300px) {
            .hit-product-container {
                height: auto;
            }
            
            .left-side,
            .right-side {
                flex: 1;
                height: auto;
            }
            
            .right-side {
                overflow-x: hidden;
            }
            
            .text-zone {
                padding: 15px;
                max-height: none;
                overflow: visible;
                width: 100%;
            }
            
            .text-zonep {
                width: 100%;
                max-width: 100%;
                font-size: 12px;
                line-height: 1.4;
                margin-bottom: 15px;
                padding-bottom: 15px;
            }
            
            .title {
                font-size: 24px;
                margin-bottom: 15px;
            }
        }

        @media (max-width: 768px) {
            .hit-product-container {
                flex-direction: column-reverse;
                height: auto;
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


    </style>
</head>
<body>
@include('layouts.header')

<div class="hit-product-container">
    <div class="left-side">
        <img class="fone" src="{{ asset('images/banners/хит продукт.png') }}" alt="Фон">
        <div class="left-side-bottom">
            <img src="{{ asset('images/banners/хит.png') }}" alt="Хит-продукт нижняя часть">
        </div>
    </div>

    <div class="right-side">
        <div class="green-zone">
            <img class="green-zone-img" src="{{ asset('images/banners/мануфактура.png') }}" alt="Зелёная зона">
        </div>
        <div class="text-zone">
            <p class="title" >Мануфактура</p>
            <p class = "text-zonep">«Статус бренда – высокая репутация: 
            не следует торговать именем – имя следует заработать»</p>
            <p class = "text-zonep">
                MILOSН – это компания новой формации, создающая
                кожгалантерею класса люкс.
                Производство выстраивается по системе «Поток единичных изделий».<br>Марка предлагает стильный и новаторский продукт, отвечающий современным потребностям настоящих ценителей безупречного качества. Продукция MILOSН отличается своей целостностью<br>и роскошной лаконичностью, тщательно выверенным стилем
                и достоверностью. Это симбиоз технологии и дизайна.<br>Весь фирменный ассортимент выстроен по трехлинейному принципу: fast-fashion, street-fashion и premium.<br>Fast-Fashion - самое объемное направление, которое носит название "Хит-продукт". Хит-продукт - особенная линия бесподкладочных кожгалантерейных изделий - включает в себя большой ассортиментный ряд: сумки-пакеты для города и путешествий, клатчи, планшетки, чехлы<br>для документов, чехлы для мобильных устройств, кошельки, портмоне.<br>Street-fashion - линия кожгалантереи на подкладке высокой ценовой категории, состоящая, в основном, из лимитированных серий.<br>Premium - кожгалантерея, выполненная из экзотических кож, с элементами ручной работы.<br>MILOSH - это, в первую очередь, высокие стандарты на материалы
                и качество изготовления.<br>Фирма несет ответственность за свою продукцию не только на стадии дизайна, но и на каждой стадии производства и реализации.<br>MILOSH - уникальный союз магии, логики и профессионализма.<br>Постулат фирменного сообщества - не создавать совершенные вещи,
                а создавать культуру взаимного уважения между клиентом и создателем, быть центром притяжения через красивые и качественные товары.
            </p>
        </div>
    </div>
</div>
@include('layouts.footer')
</body>
</html>

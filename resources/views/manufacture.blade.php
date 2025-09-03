<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Хит-Продукт</title>
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}"/>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <style>

        .hit-product-container {
            display: flex;
            width: 100%;
            height: 100vh; /* фиксируем высоту на весь экран */
            min-height: 600px;
            border: 5px solid black;
        }

        .left-side,
        .right-side {
            flex: 1;
            position: relative;
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
            border-top: 5px solid black;
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
            justify-content: flex-start;
        }

        .green-zone {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .green-zone img {
            max-height: 100%;
            max-width: 100%;
        }

        .text-zone {
            flex: 1;
            padding: 15px 71px;
            background-color: #F5DEA4;
            color: #784416;
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
            <h3>Мануфактура</h3>
            <p>«Статус бренда – высокая репутация:
                не следует торговать именем – имя следует заработать»<br>
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
</body>
</html>

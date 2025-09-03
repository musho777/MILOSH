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
            height: auto;
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
            background-color: #DAEFF6;
            color: #DD221D;
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
        <img class="fone" src="{{ asset('images/banners/фон.png') }}" alt="Фон">
        <img class="animation-glaz" src="{{ asset('animations/glaz-2.svg') }}" alt="Глаз">
        <div class="left-side-bottom">
            <img src="{{ asset('images/banners/хит-п.png') }}" alt="Хит-продукт нижняя часть">
        </div>
    </div>

    <div class="right-side">
        <div class="green-zone">
            <img class="green-zone-img" src="{{ asset('images/banners/Clip path group (4).png') }}" alt="Зелёная зона">
        </div>
        <div class="text-zone">
            <h3>Австрийское наследие</h3>
            <p>В 1853 году, когда искусство модернизма было еще чьей-то дерзкой мечтой, молодой художник Альфред Эбберлин<br> приехал
                в Вену.<br>Царственная столица всех изящных искусств, приняла
                его скромной должностью подмастерья в частном ателье Венского бомонда.<br>Предприимчивый хозяин ателье, выходец из России, <br>ловко подбирал самых аккуратных и быстрых швей, <br>закройщиц и модисток. Они трудились и днем, и ночью, создавая умопомрачительные
                наряды и аксессуары для известнейших персон.<br>
                Время шло. Альфреда заваливали заказами.<br>
                И однажды … вмешалась судьба!
                Близился канун нового 1856 года, Клиенты<br>облачались в новые праздничные наряды, примеряли к ним оригинальные
                сумочки. Но, за два дня до праздника, хозяин <br>ворвался в цех в<br>смятении. Самая уважаемая и щедрая <br>клиентка отказалась
                от <br>дорогого заказа.<br>
                «Роскошью сегодня никого не удивишь! А я <br>должна поражать, восхищать!.
                Хозяин вызвал к себе Альфреда и до глубокой ночи они перебирали созданные им наброски, а отобранные Эбберлин
                переносил на дорогую кожу.<br>Монотонная работа превратилась в полет безграничного вдохновения. На утро, увидев результат, взыскательная королева балов молча оплатила названную цену, а на губах у нее играла торжествующая <br>улыбка, в которой <br>Альфред ощутил признательность
                и восхищение. С того дня жизнь Альфреда изменилась навсегда.

                P.S. Впоследствии, хозяин ателье, <br>стал первым вестником <br>модернизма, начав «вплетать» живые произведения искусства в предметы туалета
                и интерьера, и вскоре стал<br> крупнейшим фабрикантом<br>в Австрии.
                Его часто спрашивали, в чем же была формула успеха, на что старый фабрикант отвечал;<br>
                - Все просто, твори и живи с мыслью в<br>голове и с любовью в сердце.
                А «Мысли И Любовь Определяют Шедевры».<br>
                Впоследствии эта формула успеха легла в основу названия компании <br>в виде аббревиатуры –<br>«МИЛОШ».
            </p>
        </div>
    </div>
</div>
</body>
</html>

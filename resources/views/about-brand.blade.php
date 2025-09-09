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
            background:rgba(0, 189, 255, 0.11);
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
            width: 100%;
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

        .green-zone {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .green-zone img {
            max-height: 100%;
            max-width: 100%;
            width: 100%;
        }

        .text-zone {
            flex: 1;
            padding: 15px ;
            color: #E5231E;
            display: flex;
            flex-direction: column;
            gap: 15px;
            max-width: 663px;
        }

        .title{
            color:#E5231E;
            font-family: "Comfortaa";
            font-weight: 700;
            font-size: 32px !important;
            vertical-align: middle;
        }
        .text-zonep {
            font-size: 16px;
             color:#E5231E;
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
            <p class="title" >Австрийское наследие</p>
            <p class = "text-zonep">В 1853 году, когда искусство модернизма было еще чьей-то дерзкой мечтой, молодой художник Альфред Эбберлин приехал в Вену.<br>Царственная столица всех изящных искусств, приняла его скромной должностью подмастерья в частном ателье Венского бомонда.<br>Предприимчивый хозяин ателье, выходец из России, ловко подбирал самых аккуратных и быстрых швей, закройщиц и модисток. Они трудились и днем, и ночью, создавая умопомрачительные наряды и аксессуары для известнейших персон.<br>Время шло. Альфреда заваливали заказами.<br>И однажды … вмешалась судьба! Близился канун нового 1856 года, Клиенты облачались в новые праздничные наряды, примеряли к ним оригинальные сумочки. Но, за два дня до праздника, хозяин ворвался в цех в смятении. Самая уважаемая и щедрая клиентка отказалась от дорогого заказа.<br>«Роскошью сегодня никого не удивишь! А я должна поражать, восхищать!. Хозяин вызвал к себе Альфреда и до глубокой ночи они перебирали созданные им наброски, а отобранные Эбберлин переносил на дорогую кожу.<br>Монотонная работа превратилась в полет безграничного вдохновения. На утро, увидев результат, взыскательная королева балов молча оплатила названную цену, а на губах у нее играла торжествующая улыбка, в которой Альфред ощутил признательность и восхищение. С того дня жизнь Альфреда изменилась навсегда.<br><br>P.S. Впоследствии, хозяин ателье, стал первым вестником модернизма, начав «вплетать» живые произведения искусства в предметы туалета и интерьера, и вскоре стал крупнейшим фабрикантом в Австрии. Его часто спрашивали, в чем же была формула успеха, на что старый фабрикант отвечал;<br>- Все просто, твори и живи с мыслью в голове и с любовью в сердце. А «Мысли И Любовь Определяют Шедевры».<br>Впоследствии эта формула успеха легла в основу названия компании в виде аббревиатуры – «МИЛОШ».</p>
        </div>
    </div>
</div>
@include('layouts.footer')
</body>
</html>

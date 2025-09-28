<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Хит-Продукт</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <style>

        .body{
            
        }
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
        .right-side div{
            width: 100%;
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
              overflow: visible;
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

        .basket-icon{
            width: 400px;
            height: 50px;
            position: absolute;
            left: 100%;
            top: -250px;
            transform: translateX(-50%);
            z-index: 10;
            border-radius: 50%;
            >img{
                width: 400px;
                height: 380px;
            }
        }

        @media (max-width: 1980px) {
            .basket-icon{
                width: 200px;
                top: -125px;
                >img{
                    width: 200px;
                    height: 190px;
                }
            }
        }

        @media (max-width: 780px) {
            .basket-icon{
                display: none;
            }
        }

        .left-side-bottom {
              position: relative;
            overflow: visible;
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
    
            line-height: 150%;
            letter-spacing: -1.1%;
            padding-bottom:40px;
        }

        .search-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: white;
            z-index: 9999;
            padding: 80px 40px 40px;
            box-sizing: border-box;
            overflow-y: auto;
            flex-direction: row;
            gap: 40px;
        }

        .search-container.active {
            display: flex;
        }

        .search-input-wrapper {
            position: absolute;
            top: 20px;
            left: 40px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
        }

        .search-input-wrapper input {
            border: none;
            border-bottom: 2px solid black;
            padding: 6px 10px;
            width: 300px;
            outline: none;
        }

        .search-left {
            flex: 0 0 220px;
            display: flex;
            flex-direction: column;
            gap: 25px;
            font-size: 14px;
        }

        .search-right {
            flex: 1;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            margin-bottom: 20px;
        }

        .product-box {
            border: 2px solid black;
            height: 280px;
        }

        .search-button {
            background: black;
            color: white;
            padding: 8px 20px;
            font-size: 14px;
            cursor: pointer;
            border: none;
        }

        .search-left a {
            text-decoration: none;
            color: black;
        }

        .close-sidebar {
            font-size: 30px;
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 20px;
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
    .back-button{
        z-index: 1000;
        position: absolute;
        width: 61px;
        height: 61px;
        top:100px;
        left: 40px;
    }
    .back-button img{
        width: 100%;
        height: 100%;
    }


    </style>
</head>
<body>
@include('layouts.header')

<!-- Контейнер поиска -->
<div class="search-container" id="searchContainer">
    <span class="close-sidebar" id="closeSearchSidebar">&times;</span>
    <!-- Поле ввода -->
    <div class="search-input-wrapper">
        <img style="width: 35px" src="{{asset('images/Icons/search.svg')}}" alt="Поиск">
        <input type="text" placeholder="введите название или артикул">
    </div>

    <!-- Левая колонка -->
    <div class="search-left">
        <strong>ИСТОРИЯ ПОИСКА</strong>
        <span>сумка</span>
        <a href="">
            <div>НОВОЕ</div>
        </a>
        <a href="">
            <div>ХИТ-ПРОДУКТ</div>
        </a>
        <a href="">
            <div>СУМКИ</div>
        </a>
        <a href="">
            <div>ОДЕЖДА</div>
        </a>
        <a href="">
            <div>АКСЕССУАРЫ</div>
        </a>
        <a href="">
            <div>СКИДКИ И АКЦИИ</div>
        </a>
        <a href="">
            <div>КЛИЕНТСКИЙ СЕРВИС</div>
        </a>
    </div>

    <!-- Правая колонка -->
    <div class="search-right">
        <div class="product-grid">
            <div class="product-box"></div>
            <div class="product-box"></div>
            <div class="product-box"></div>
            <div class="product-box"></div>
        </div>
        <a class="search-button" href="{{route('showCatalogPage')}}">перейти в каталог</a>
    </div>
</div>
<div class = "back-button" onclick="history.back()" style="cursor: pointer;">
    <img src="{{ asset('assets/images/Group 85.svg') }}" alt="Back">
</div>

<div class="hit-product-container">
    <div class="left-side">
        <img class="fone" src="{{ asset('images/banners/manufacture-banner.png') }}" alt="Фон">
        <div class="left-side-bottom">
            <div class="basket-icon">
                <img src="{{ asset('assets/images/yellow-basket.svg') }}" alt="Корзина">
            </div>
            <img src="{{ asset('images/banners/manufacture-bottom-banner.png') }}" alt="Хит-продукт нижняя часть">
        </div>
    </div>

    <div class="right-side">
        <div class="green-zone">
            <img class="green-zone-img" src="{{ asset('images/banners/manufacture.png') }}" alt="Зелёная зона">
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
 <div class="chat-widget" id="chatWidget">
    <div class="chat-header">
        <span>ОНЛАЙН-ЧАТ</span>
        <div class="chat-controls">
            <button class="check"><img src="{{asset('assets/images/Rectangle.svg')}}" alt="Check" style="width: 20px; height: 20px;"></button>
            <button class="close">✖</button>
        </div>
    </div>
    <div class="chat-body">
        <div class="message">
            <strong>София</strong>
            <p>Чем могу быть Вам полезна?</p>
            <span class="time">4 мин. назад</span>
        </div>
    </div>
    <div class="chat-footer">
        <input type="text" placeholder="Пишите Ваше сообщение здесь"/>
        <button class="attach">📎</button>
        <button class="send">отправить</button>
    </div>

</div>
@include('layouts.footer')

<script>
    const openSearch = document.getElementById('openSearch');
    const searchContainer = document.getElementById('searchContainer');
    const closeSearch = document.getElementById('closeSearchSidebar'); // Кнопка закрытия

    openSearch.addEventListener('click', () => {
        searchContainer.classList.add('active');
    });

    closeSearch.addEventListener('click', () => {
        searchContainer.classList.remove('active');
    });
</script>

</body>
</html>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const chatBody = document.querySelector('.chat-body');
        const closeBtn = document.querySelector('.close');
        const checkBtn = document.querySelector('.check');
        const chatContainer = document.getElementById('chatWidget'); // сам контейнер чата

        // Create minimized chat icon
        const minimizedChat = document.createElement('div');
        minimizedChat.className = 'minimized-chat';
        minimizedChat.innerHTML = '<img src="{{asset("assets/images/openChat.svg")}}" alt="Open Chat">';
        minimizedChat.style.display = 'none';
        document.body.appendChild(minimizedChat);

        // Скрыть чат по умолчанию
        chatContainer.style.display = 'none';

        // Показать чат через 43 секунды (43000 миллисекунд)
        setTimeout(() => {
            chatContainer.style.display = 'flex';
        }, 3000);

        // Minimize chat functionality
        checkBtn.addEventListener('click', function () {
            chatContainer.style.display = 'none';
            minimizedChat.style.display = 'block';
        });

        // Restore chat functionality
        minimizedChat.addEventListener('click', function () {
            minimizedChat.style.display = 'none';
            chatContainer.style.display = 'flex';
        });

        closeBtn.addEventListener('click', function () {
            const existingConfirm = document.querySelector('.chat-confirmation');
            if (existingConfirm) existingConfirm.remove();

            const confirmMessage = document.createElement('div');
            confirmMessage.classList.add('chat-confirmation');
            confirmMessage.innerHTML = `
                <div class="message bot">
                    <strong>Вы уверены, что хотите завершить этот чат?</strong>
                    <div class="confirmation-buttons">
                        <button class="confirm-yes">Да</button>
                        <button class="confirm-no">Нет</button>
                    </div>
                    <span class="time">${new Date().toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'})}</span>
                </div>
            `;
            chatBody.prepend(confirmMessage);

            // Кнопка "Нет" — удалить вопрос
            confirmMessage.querySelector('.confirm-no').addEventListener('click', () => {
                confirmMessage.remove();
            });

            // Кнопка "Да" — скрыть чат
            confirmMessage.querySelector('.confirm-yes').addEventListener('click', () => {
                chatContainer.style.display = 'none';
            });
        });
    });
</script>
<style>
     .chat-widget {
        width: 450px;
        height: 600px;
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: white;
        border: 2px solid black;
        font-family: sans-serif;
        z-index: 1000;
        display: flex;
        flex-direction: column;
    }

    .chat-header, .chat-footer {
        border-bottom: 2px solid black;
        padding: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .chat-footer {
        border-top: 2px solid black;
        gap: 10px;
    }

    .chat-controls button {
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
        height: 20px;
    }

    .chat-body {
        flex: 1; /* растягивается на всё доступное пространство */
        padding: 10px;
        overflow-y: auto;
    }

    .message {
        border: 2px solid black;
        padding: 10px;
        margin-bottom: 10px;
    }

    .message .time {
        font-size: 12px;
        color: grey;
        margin-top: 5px;
        display: block;
    }

    .chat-footer input {
        flex-grow: 1; /* поле занимает всё оставшееся пространство */
        min-width: 0; /* предотвращает выход за границы */
        padding: 5px;
        border: none;
        border-bottom: 1px solid black;
    }

    .chat-footer .attach,
    .chat-footer .send,
    .confirm-yes,
    .confirm-no {
        background: black;
        color: white;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }

    .minimized-chat {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 120px;
        height: 120px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 1000;
    }

    .minimized-chat img {
        width: 100px;
        height: 100px;
    }
    .chat-controls{
            align-items: center;
    display: flex;
    gap: 5px;
    }
</style>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>МАГАЗИН/SHOP</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/shop.css')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">

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

    <div class="shop-banner">
        <div class="shop-container">
      <div class = "back-button" onclick="history.back()" style="cursor: pointer;">
        <img src="{{ asset('assets/images/Group 85.svg') }}" alt="Back">
    </div>
        <img class="shop-image" style="width: 50%" src="{{ asset('images/banners/Group 79.png') }}" alt="Subtract">
        <p class="description">
            Наш интернет-магазин, это удобное и комфортное пространство для покупок.<br>
            К вашим услугам — персональная консультация специалиста, который посоветует и поможет сориентироваться в выборе.<br>
            Здесь Вы можете приобрести изделие из ограниченных серий или из классических коллекций.<br>
            Тщательно подобранный ассортимент, находясь на грани коммерческой реальности и культурного интереса, всегда оригинальный, эклектичный.<br>
            Это микс аксессуаров, которые превосходят повседневные вещи, определяют индивидуальность и привносят дополнительный штрих<br>
            стиля и красоты, что всегда неожиданно, но так приятно.<br>Каждое изделие имеет сертификат подлинности и представлено в фирменной упаковке.<br>
            Откройте для себя динамичное приобретение, новые материалы, в которых сочетаются прошлое и будущее.<br>
            Будьте с нами, Интернет-магазин бренда открыт для всех!
        </p>
    </div>

    <main class="grid">
        <a href="{{ route('showCatalogPage', ['category' => 'Сумка-пакет']) }}"><div class="grid-item">Сумка-пакет</div></a>
        <a href="{{ route('showCatalogPage', ['category' => 'Аксессуары']) }}"><div class="grid-item">Аксессуары</div></a>
        <a href="{{ route('showCatalogPage', ['category' => 'Одежда']) }}"><div class="grid-item">Одежда</div></a>
        <a href="{{ route('showCatalogPage', ['category' => 'Сумки']) }}"><div class="grid-item">Сумки</div></a>
    </main>




</div>
<div>
    <img style="display: block" src="{{ asset('animations/n1.svg') }}" alt="Subtract">
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
        const chatContainer = document.getElementById('chatWidget');

        const minimizedChat = document.createElement('div');
        minimizedChat.className = 'minimized-chat';
        minimizedChat.innerHTML = '<img src="{{asset("assets/images/openChat.svg")}}" alt="Open Chat">';
        minimizedChat.style.display = 'none';
        document.body.appendChild(minimizedChat);

        chatContainer.style.display = 'none';

        setTimeout(() => {
            chatContainer.style.display = 'flex';
        }, 3000);

        checkBtn.addEventListener('click', function () {
            chatContainer.style.display = 'none';
            minimizedChat.style.display = 'block';
        });

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

            confirmMessage.querySelector('.confirm-no').addEventListener('click', () => {
                confirmMessage.remove();
            });

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
    .shop-banner{
        position: relative;
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
        flex: 1;
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
        flex-grow: 1;
        min-width: 0;
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
    .description{
margin-bottom:0 !important; 
padding-bottom:100px;
    }
    .back-button{
        position: absolute;
        width: 61px;
        height: 61px;
        top:40px;
        left: 40px;
        >img{
            width: 100%;
            height: 100%;
        }
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
    @media (max-width: 425px) {
        .chat-widget {
            width: 338px;
            height: 450px;
            bottom: 0;
            right: 0;
        }
    }
</style>

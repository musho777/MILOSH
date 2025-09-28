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
<div class = "back-button" onclick="history.back()" style="cursor: pointer;">
    <img src="{{ asset('assets/images/Group 85.svg') }}" alt="Back">
</div>
<div class="shop-container">
    <div class="shop-banner">
        <img class="shop-image" style="width: 50%" src="{{ asset('images/banners/gallery.png') }}" alt="Subtract">
        <p class="description">
            В нашей Галерее представлены товары, выпущенные ограниченным тиражом, в единственном экземпляре и изготовленные в ателье.
            Каждое изделие имеет сертификат подлинности и представлено в фирменной упаковке.
        </p>
    </div>

    <div class="product-row">
        <div class="product-box top">Товар 1</div>
        <div class="product-box top">Товар 2</div>
        <div class="product-box top">Товар 3</div>
        <div class="product-box top">Товар 4</div>

        <div class="product-box tall-box left">
            <img src="{{ asset('animations/n2.svg') }}" alt="Subtract">
        </div>
        <div class="product-box">Товар 6</div>
        <div class="product-box">Товар 7</div>
        <div class="product-box">Товар 8</div>

        <!-- Пропускаем товар 9 — он объединён с 5 -->

        <div class="product-box">Товар 10</div>
        <div class="product-box">Товар 11</div>
        <div class="product-box tall-box">Товар 12 (12+16)</div>
        <div class="product-box">Товар 13</div>
        <div class="product-box">Товар 14</div>
        <div class="product-box">Товар 15</div>

        <!-- Пропускаем товар 16 — он объединён с 12 -->
    </div>



</div>
<div>
    <img style="display: block; margin-top:-11px; z-index:2;position:relative" src="{{ asset('animations/n1.svg') }}" alt="Subtract">
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
</body>
<style>
    .product-row {
        display: grid;
        grid-template-columns: repeat(4, 1fr); /* 4 столбца */
        width: 100%;        
    }


    .product-box {
        border: 2px solid black;
        text-align: center;
        height: 360px;
        box-sizing: border-box;
        border-bottom: 0;
        border-top: 5px solid black;

    }

    .product-box.tall-box {
        position: relative; /* нужно для абсолютного позиционирования вложенного img */
        grid-row: span 2;
        height: calc(2 * 350px + 20px);
        padding: 20px;
        border: 2px solid black;
        box-sizing: border-box;
        border-bottom: 0;
    }

    .product-box.tall-box img {
        position: absolute;
        top: -2px;
        right: -4px;
        width: 59px;
    }

    .back-button{
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
    .left{
        border-bottom:3px solid black !important; 
    }
    .top{
        border-top:3px solid black !important; 
    }


</style>
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
</style>
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

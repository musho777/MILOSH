<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Каталог</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/shop.css')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
</head>
<body>
@include('layouts.header')
<div class="shop-container">
    <div class="product-sidebar" id="productSidebar">
        <div class="sidebar-content">
            <span class="close-sidebar" id="closeSidebar">&times;</span>
            <div class="product-info">
                <div class="title-with-fav">
                    <h3>Сумка-пакет из натуральной кожи Серия << Алиса. Кролик в шляпе>> </h3>
                    <img class="favorite-icon" src="{{ asset('/images/icons/избранное.svg') }}" alt="♥">
                </div>
                <p style="margin-top: 20px"><strong>14 850 руб.</strong></p>
                <p style="margin-top: 20px">цвет</p>
                <p style="margin-top: 10px">карамельный</p>
                <div class="black-line"></div>
                <p style="margin-top: 20px">гид по размерам</p>
                <div style="margin-top: 20px" class="black-line"></div>
                <p style="margin-top: 20px">количество</p>
                <div style="margin-top: 20px" class="black-line"></div>

                <a href=""><img class="absolute-arrow" src="{{asset('/images/icons/Rectangle.png')}}" alt="→"></a>
            </div>

            <form>
                <button type="submit" style="margin-top: 20px">добавить в корзину</button>
            </form>

            <div class="tabs">
                <a href="#" class="active"><strong>Описание</strong></a>
                <a href="#"><strong>Рекомендации по уходу</strong></a>
                <a href="#"><strong>Упаковка</strong></a>
                <a href="#"><strong>Доставка</strong></a>
            </div>

            <div class="info-text">
                <p>Вся упаковка MILOSH, не только защищает продукт, но и создает целостную фирменную идентичность, которая объединяя различные дизайны,  позволяет при этом каждому товару сохранять свой отличительный характер. В упаковке используются качественные, экологически чистые материалы. Ваши покупки с бирками будут доставлены в фирменном пакете или коробке.</p>
            </div>

            <div class="contacts">
                <a href=""><p><strong>Можем ли мы Вам помочь?</strong></p></a>
                <a href=""><p><strong>Позвоните в нашу службу поддержки клиентов (   )</strong></p></a>
                <a href=""><p><strong>Напишите нам на электронную почту</strong></p></a>
                <a href=""><p><strong>Пообщайтесь с нашими консультантами в чате</strong></p></a>
            </div>
        </div>
    </div>

    <div class="shop-banner" style="border: 2px solid black;height: 100px">
        <h1 style="margin-top: 30px">{{ $category }}</h1>
    </div>
    <div class="product-row">
        <div class="product-box">Товар 1</div>
        <div class="product-box">Товар 2</div>
        <div class="product-box">Товар 3</div>
        <div class="product-box">Товар 4</div>
        <div class="product-box">Товар 5</div>
        <div class="product-box">Товар 6</div>
        <div class="product-box">Товар 7</div>
        <div class="product-box">Товар 8</div>
        <div class="product-box">Товар 9</div>
        <div class="product-box">Товар 10</div>
    </div>

    <div class="footer-text">
        текст
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
</body>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const chatBody = document.querySelector('.chat-body');
        const closeBtn = document.querySelector('.close');
        const checkBtn = document.querySelector('.check');
        const chatContainer = document.getElementById('chatWidget');

        const minimizedChat = document.createElement('div');
        minimizedChat.className = 'minimized-chat';
        minimizedChat.innerHTML = '<img src="{{asset("assets/images/чат.svg")}}" alt="Open Chat">';
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
</style>
<script>
    const sidebar = document.getElementById('productSidebar');
    const closeBtn = document.getElementById('closeSidebar');
    const productBoxes = document.querySelectorAll('.product-box');

    productBoxes.forEach(box => {
        box.addEventListener('click', () => {
            sidebar.classList.add('active');
            document.body.classList.add('sidebar-open'); // добавляем
        });
    });

    closeBtn.addEventListener('click', () => {
        sidebar.classList.remove('active');
        document.body.classList.remove('sidebar-open'); // удаляем
    });



</script>
<script>
    const tabs = document.querySelectorAll('.tabs a');
    tabs.forEach(tab => {
        tab.addEventListener('click', function (e) {
            e.preventDefault();
            tabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
        });
    });
</script>

</html>

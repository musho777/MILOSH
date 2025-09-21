<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Каталог</title>
    <link rel="stylesheet" href="{{asset('css/cart.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>

    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
</head>
<body>
@include('layouts.header')
<div class="shop-container">
    <div class="cart-sidebar" id="cartSidebar">
        <div class="cart-header">
            <span>ДОБАВЛЕНО В КОРЗИНУ (1)</span>
            <span class="close-sidebar" id="closeSidebar">&times;</span>
        </div>
        <div class="cart-product">
            <div class="product-image"></div>
            <div class="product-details">
                <p class="product-title">Сумка-пакет из натуральной кожи<br>Серия << Алиса. Кролик в шляпе >></p>
                <p><strong>цена: 14 850 руб.</strong></p>
                <p>цвет: карамельный</p>
                <p>гид по размерам</p>
            </div>
        </div>
        <div class="step">
            <h3>ШАГ 1</h3>
            <input type="text" placeholder="Имя">
            <input type="text" placeholder="Фамилия">
            <div class="input-row">
                <input type="text" placeholder="+7 (900)">
                <input type="text" placeholder="Город">
            </div>
            <input type="text" placeholder="Email">
            <input type="text" placeholder="Почта">
            <input type="text" placeholder="Индекс">
        </div>

        <div class="step">
            <h3>ШАГ 2</h3>
            <input type="text" placeholder="Способ доставки">
        </div>

        <div class="step">
            <h3>ШАГ 3</h3>
            <input type="text" placeholder="Способ оплаты">
        </div>

        <div class="cart-footer">
            <p><strong>Итого:</strong> 14 850 руб.</p>
            <button class="checkout-btn">оформить</button>
        </div>
    </div>
    <div class="cart-row">
        <div class="cart-box">Товар 1</div>
        <div class="cart-box">Товар 2</div>
        <div class="cart-box">Товар 3</div>
        <div class="cart-box">Товар 4</div>
        <div class="cart-box">Товар 5</div>
        <div class="cart-box">Товар 6</div>
        <div class="cart-box">Товар 7</div>
        <div class="cart-box">Товар 8</div>
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
    const sidebar = document.getElementById('cartSidebar');
    const closeBtn = document.getElementById('closeSidebar');
    const productBoxes = document.querySelectorAll('.cart-box');

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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const chatBody = document.querySelector('.chat-body');
        const closeBtn = document.querySelector('.close');
        const checkBtn = document.querySelector('.check');
        const chatContainer = document.getElementById('chatWidget'); // сам контейнер чата

        // Create minimized chat icon
        const minimizedChat = document.createElement('div');
        minimizedChat.className = 'minimized-chat';
        minimizedChat.innerHTML = '<img src="{{asset("assets/images/чат.svg")}}" alt="Open Chat">';
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

</html>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Хит-Продукт</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
</head>
<body>
@include('layouts.header')
<div class="hit-product-container">
    <div class="left-side">

    </div>
    <img class="center-image" src="{{ asset('assets/images/корзина5.svg') }}" alt="Корзина">
    <div class="right-side">

    </div>
</div>
<div class="bottom-section">
    <div></div>
    <div></div>
    <div></div>
    <div style="border-right: 5px solid black!important;"></div>
</div>
<!-- <style>
    .hit-product-container {
        display: flex;
        width: 100%;
        height: 90vh; 
        border: 5px solid black;
        position: relative;
    }

    .center-image {
        position: absolute;
        top: 98%;              /* по вертикали */
        left: 50%;             /* по горизонтали */
        transform: translate(-50%, -50%); /* точно в центр */
        z-index: 10;
        width: 200px; /* или нужный размер */
        height: auto;
        pointer-events: none; /* чтобы не перекрывать клики (по желанию) */
    }

    .left-side,
    .right-side {
        flex: 1; /* 50% ширины каждый */
    }

    .left-side{
        border-right: 5px solid black;
    }

    /* Правая часть */
    .green-zone {
        height: 100px;
    }
    .green-zone img{
        width: 100%;
    }

    .text-zone {
        width: 100%;
        height: 450px;
        margin-top: -21px;
        padding: 30px 20px;
        border-top: 5px solid black;
        color: #00A438;
        background-color: #F3DFE9;
    }

    .image-zone img.product-image {
        max-width: 100%;
        height: auto;
        max-height: 200px;
        object-fit: contain;
    }

    /* Нижняя секция */
    .bottom-section {
        display: flex;
    }

    .bottom-section > div {
        flex: 1;
        height: 300px;
        background-color: #f2f2f2;
        border: 5px solid black;
        border-top: 0;
        border-right: 0;

    }
</style> -->

<style>
    .hit-product-container {
        display: flex;
        width: 100%;
        height: 90vh; /* верхняя часть экрана — половина высоты */
        border: 5px solid black;
        position: relative;
    }

    .center-image {
        position: absolute;
        bottom: -60px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 10;
        width: 200px;
        height: 200px;
    }
    .left-side,
    .right-side {
        flex: 1; /* 50% ширины каждый */
    }


    @media (max-width: 1600px) {
    .left-side {
        height: auto;
    }
    
    .center-image {
        width: 180px;
        height: 180px;
    }
}

@media (max-width: 768px) {
    .center-image {
        width: 120px;
        height: 120px;
    }
}

    .left-side{
        border-right: 5px solid black;
    }


    .green-zone img{
       display: block;
       width: 100%;
    }

    .right-side {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .text-zone {
        flex: 1; /* займет всё оставшееся место */
        margin-top: 0;
        padding: 30px 20px;
        border-top: 5px solid black;
        color: #00A438;
        background-color: #F3DFE9;
    }


    .image-zone img.product-image {
        max-width: 100%;
        height: auto;
        max-height: 200px;
        object-fit: contain;
    }

    /* Нижняя секция */
    .bottom-section {
        display: flex;
    }

    .bottom-section > div {
        flex: 1;
        height: 491px;
        border: 5px solid black;
        border-top: 0;
        border-right: 0;

    }
</style>
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

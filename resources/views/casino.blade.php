<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Хит-Продукт</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
</head>
<body>
@include('layouts.header')
<div class="casino-container">
    <div class="left-side">
        <img class="left-side-img" src="{{ asset('images/banners/меню.png') }}" alt="Зелёная зона">
    </div>
    <div class="right-side">
        <div class="animation-zone">
            <img class="right-side-img" src="{{ asset('animations/m2-2b.svg') }}" alt="Зелёная зона">
        </div>
         <div class="basket-icon">
                <img src="{{ asset('assets/images/корзина5.svg') }}" alt="Корзина">
            </div>
        <div class="right-bottom">
            <div class="text-zone">
                <h3>КАЗИНО</h3>
                <p>Текст</p>
            </div>
           
            </div>
        </div>
    </div>
</div>
<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    .casino-container {
        display: flex;
        width: 100%;
        min-height: 100%;
        position: relative;
    }

    .center-image {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        z-index: 20;
        width: 200px;
        height: 200px;
    }

    .center-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .left-side,
    .right-side {
        flex: 1;
        height: 100%;
    }

    .left-side {
        border-right: 5px solid black;
    }

    .left-side img {
        height: 100%;      /* растягивает изображение по высоте */
        width: 100%;
        object-fit: cover; 
        display: block;
    }

    .right-side{
        border-right: 5px solid black;
        display: flex;
        flex-direction: column;
        height: 100%;
        background-color: #D2F8A9;
        position: relative;
    }

    .right-side img {
        width: 104%;
        margin-left:-12px;
        object-fit: cover;
        display: block;
    }

    .basket-icon img{
          width: 100%;
        margin-left:-200px;
        object-fit: cover;
        display: block;
    }

    .animation-zone {
        display: block;
        z-index: 1;
        overflow: hidden;
    }

    .right-bottom{
        background-color: #D2F8A9;
        width: 100%;
        height: 50%; /* точно половина высоты, как и animation-zone */
        position: relative;
        z-index: 2;
        overflow: visible;
    }

    .text-zone {
        flex: 1;
        padding: 50px 71px;
        color: #00A237;
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

    .basket-icon{
        width: 400px;
        height: 50px;
        position: absolute;
        left: 0;
        right: 0;
        bottom: 100px;
        z-index: 10;
        display: flex;
        justify-content: center;
        align-items: center;
    }
     .basket-icon{
            width: 200px;
            bottom: 100px;
            left: 0;
            right: 0;
        }
        
        .basket-icon img{
            width: 200px;
            height: 190px;
        }
    
    /* .basket-icon img{
        width: 400px;
        height: 380px;
    } */

    /* Desktop responsive breakpoints */
    @media (max-width: 2280px) {
        .basket-icon{
            width: 200px;
            bottom: 100px;
            left: 0;
            right: 0;
        }
        
        .basket-icon img{
            width: 200px;
            height: 190px;
        }
    }

    @media (min-width: 1920px) and (max-width: 1979px) {
        .casino-container {
            height: 100%;
        }

        .animation-zone {
        }

        .right-bottom {
            height: 50%;
        }

        .text-zone {
            padding: 70px 85px;
        }

        .text-zone h3 {
            font-size: 36px;
        }

        .text-zone p {
            font-size: 14px;
        }
    }

    @media (min-width: 1366px) and (max-width: 1919px) {
        .casino-container {
            min-height: 100%;
        }

        .animation-zone {
        }

        .right-bottom {
            height: 50%;
        }

        .text-zone {
            padding: 60px 80px;
        }

        .text-zone h3 {
            font-size: 32px;
        }

        .text-zone p {
            font-size: 12px;
        }
    }

    /* Responsive breakpoints for mobile */
    @media (max-width: 870px) {
        .basket-icon{
            display:none
        }
        
        .center-image {
            width: 150px;
            height: 150px;
        }
        .casino-container {
                flex-direction: column-reverse;
           
        }

        .left-side {
            border-right: 0;
            border-bottom: 5px solid black;
            width: 100%;
            height: 50%;
        }

        .right-side {
            border: 5px solid black;
            border-top: 0;
            height: auto;
            width: 100%;
            position: relative;
        }

        .text-zone {
            padding: 30px 20px;
        }

        .text-zone h3 {
            font-size: 24px;
        }
        
        .basket-icon{
            width: 180px;
            bottom: 90px;
            left: 0;
            right: 0;
        }
        
        .basket-icon img{
            width: 180px;
            height: 171px;
        }
    }
      @media (max-width: 768px) {
        .basket-icon{
            display:none
        }
        
        .center-image {
            width: 120px;
            height: 120px;
        }
            .casino-container {
                flex-direction: column-reverse;
                height: auto;
            }
            .left-side img{
                width: 100%;
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

    @media (max-width: 480px) {
        .casino-container {
        }

        .left-side {
            height: 40vh;
        }

        .right-side {
            min-height: 40vh;
        }

        .text-zone {
            padding: 20px 15px;
        }

        .text-zone h3 {
            font-size: 20px;
        }

        .text-zone p {
            font-size: 10px;
        }

        .basket-icon{
            width: 150px;
            bottom: 80px;
            left: 0;
            right: 0;
        }
        
        .basket-icon img{
            width: 150px;
            height: 143px;
        }
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
        flex-grow: 1; /* поле занимает всё оставшеесь пространство */
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

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>MILOSH - Клиентский сервис</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
@include('layouts.header')
    <style>

        body {
            margin: 0;
            padding: 0;
            background: white;
            color: black;
        }

        .service-container {
            border: 5px solid black;
            min-height: 100%;
            width: 100%;
            position: relative;
        }

        .service-wrapper {
            display: flex;
            justify-content: space-between;
            padding: 60px 60px;
            max-width: 1980px;
            margin: 60px auto;
            width: 100%;
        }

        /* Responsive adjustments to keep header and content aligned */
        @media (max-width: 1919px) {
            .service-wrapper {
                padding: 60px 40px;
            }
        }

        @media (max-width: 1600px) {
            .service-wrapper {
                padding: 60px 30px;
            }
        }

        @media (max-width: 1100px) {
            .service-wrapper {
                padding: 60px 20px;
            }
        }

        @media (max-width: 980px) {
            .service-wrapper {
                padding: 60px 15px;
                flex-direction: column;
                gap: 40px;
            }
            
            .service-left,
            .service-right {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .service-wrapper {
                padding: 40px 10px;
            }
        }

        .service-left,
        .service-right {
            width: 48%;
        }

        .service-left h2,
        .service-right h2 {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .service-left p,
        .service-right p {
            max-width: 400px;
            font-size: 14px;
            line-height: 1.4;
            margin-bottom: 20px;
        }

        .service-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .service-list li {
            font-size: 14px;
            line-height: 1.8;
            margin-bottom: 10px;
        }

        .service-list li:before {
            content: "• ";
            font-weight: bold;
        }

        .black-button {
            display: inline-block;
            background: black;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 14px;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }

        .back-button{
            position: absolute;
            width: 61px;
            height: 61px;
            top: 20px;
            left: 40px;
        }
        .back-button img{
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>

<div class="service-container">
    <div class = "back-button" onclick="history.back()" style="cursor: pointer;">
        <img src="{{ asset('assets/images/Group 85.svg') }}" alt="Back">
    </div>
    <div class="service-wrapper">
        <!-- Левая сторона -->
        <div class="service-left">
            <h2>Клиентский сервис</h2>
            <p>Мы ценим каждого клиента и стремимся обеспечить высочайший уровень обслуживания на всех этапах взаимодействия с нашим брендом.</p>
            
            <ul class="service-list">
                <li>Консультации по подбору изделий</li>
                <li>Индивидуальный пошив</li>
                <li>Уход и обслуживание изделий</li>
                <li>Гарантийное обслуживание</li>
                <li>Доставка по всему миру</li>
                <li>Персональный менеджер для VIP-клиентов</li>
            </ul>
        </div>

        <!-- Правая сторона -->
        <div class="service-right">
            <h2>Свяжитесь с нами</h2>
            <p>Наша команда экспертов готова ответить на все ваши вопросы и помочь в выборе идеального изделия.</p>
            
            <p><strong>Телефон:</strong> +7 (495) 123-45-67</p>
            <p><strong>Email:</strong> service@milosh.ru</p>
            <p><strong>Часы работы:</strong> Пн-Пт 10:00-20:00, Сб-Вс 11:00-19:00</p>
            
            <a href="{{route('showContactPage')}}"><button class="black-button">связаться с нами</button></a>
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

        // Показать чат через 3 секунды (3000 миллисекунд)
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
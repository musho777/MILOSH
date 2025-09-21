<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Alisa - MILOSH</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <style>
        .alisa-content {
            min-height: 100vh;
            background: white;
        }

        .alisa-first-section {
            display: flex;
            height: 686px;
            background: white;
        }

        .alisa-first-section > div {
            flex: 1;
            background: white;
            border: 3px solid black;
        }

        .alisa-first-section .left-div {
            border-right: 1.5px solid black;
        }

        .alisa-first-section .right-div {
            border-left: 1.5px solid black;
            background-image: url('{{ asset('assets/images/меню.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .alisa-second-section {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            height: 581px;
            gap: 0;
        }

        .alisa-second-section > div {
            background: white;
            border: 3px solid black;
        }

        .alisa-second-section .border-div:nth-child(1) {
            border-right: 1.5px solid black;
            border-bottom: 1.5px solid black;
        }

        .alisa-second-section .border-div:nth-child(2) {
            border-left: 1.5px solid black;
            border-right: 1.5px solid black;
            border-bottom: 1.5px solid black;
        }

        .alisa-second-section .border-div:nth-child(3) {
            border-left: 1.5px solid black;
            border-right: 1.5px solid black;
            border-bottom: 1.5px solid black;
        }

        .alisa-second-section .border-div:nth-child(4) {
            border-left: 1.5px solid black;
            border-bottom: 1.5px solid black;
        }

        @media (max-width: 768px) {
            .alisa-first-section {
                flex-direction: column;
                height: auto;
            }

            .alisa-first-section > div {
                height: 343px;
                border: 3px solid black;
            }

            .alisa-first-section .left-div {
                border-right: 3px solid black;
                border-bottom: 1.5px solid black;
            }

            .alisa-first-section .right-div {
                border-left: 3px solid black;
                border-top: 1.5px solid black;
            }

            .alisa-second-section {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(2, 1fr);
                height: 1162px;
            }

            .alisa-second-section .border-div {
                height: 581px;
            }

            .alisa-second-section .border-div:nth-child(1) {
                border-right: 1.5px solid black;
                border-bottom: 1.5px solid black;
            }

            .alisa-second-section .border-div:nth-child(2) {
                border-left: 1.5px solid black;
                border-bottom: 1.5px solid black;
            }

            .alisa-second-section .border-div:nth-child(3) {
                border-right: 1.5px solid black;
                border-top: 1.5px solid black;
            }

            .alisa-second-section .border-div:nth-child(4) {
                border-left: 1.5px solid black;
                border-top: 1.5px solid black;
            }
        }
    </style>
</head>
<body>
@include('layouts.header')

<div class="alisa-content">
    <!-- First Section: 2 white divs side by side -->
    <section class="alisa-first-section">
        <div class="left-div"></div>
        <div class="right-div"></div>
    </section>

    <!-- Second Section: 4 bordered divs -->
    <section class="alisa-second-section">
        <div class="border-div"></div>
        <div class="border-div"></div>
        <div class="border-div"></div>
        <div class="border-div"></div>
    </section>
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
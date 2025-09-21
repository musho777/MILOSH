<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>MILOSH</title>
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

        .auth-wrapper {
            display: flex;
            justify-content: space-between;
            padding: 60px 100px;
            min-height: 91vh;
            border: 5px solid black;
        }

        .auth-left,
        .auth-right {
            width: 48%;
        }

        .auth-left h2,
        .auth-right h2 {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .auth-left p {
            max-width: 320px;
            font-size: 14px;
            line-height: 1.4;
            margin-bottom: 40px;
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
        }

        .auth-right input[type="text"],
        .auth-right input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 2px solid black;
            font-size: 14px;
        }

        .password-wrapper {
            position: relative;
        }

        .show-btn {
            position: absolute;
            right: 10px;
            top: 10px;
            background: none;
            border: none;
            color: black;
            cursor: pointer;
        }

        .auth-right label {
            display: flex;
            align-items: center;
            font-size: 13px;
            margin-bottom: 20px;
        }

        .auth-right input[type="checkbox"] {
            margin-right: 8px;
            width: 16px;
            height: 16px;
        }

        .auth-right .forgot-password {
            font-size: 12px;
            margin-bottom: 15px;
            color: black;
            text-decoration: underline;
            cursor: pointer;
        }

        .auth-right form {
            max-width: 300px;
        }
    </style>
</head>
<body>

<div class="auth-wrapper">
    <!-- Левая сторона -->
    <div class="auth-left">
        <h2>Зарегистрируйте новую учетную запись</h2>
        <p>Наслаждайтесь всеми эксклюзивными преимуществами, которые доступны только для Вашего Аккаунта</p>
        <a href="{{route('showRegistrationPage')}}"><button class="black-button">создать аккаунт</button></a>
    </div>

    <!-- Правая сторона -->
    <div class="auth-right">
        <h2>Зарегистрированный клиент</h2>
        <p style="width:400px;margin-bottom: 20px ">Если Вы зарегистрированный пользователь, пожалуйста, введите свой адрес электронной почты и пароль</p>
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <input type="text" name="email" placeholder="email" value="{{ old('email') }}">
            @error('email')
            <div style="color:red">{{ $message }}</div>
            @enderror

            <div class="password-wrapper">
                <input type="password" name="password" id="password" placeholder="пароль">
                <button type="button" class="show-btn" onclick="togglePassword()">show</button>
            </div>
            @error('password')
            <div style="color:red">{{ $message }}</div>
            @enderror

            <div class="forgot-password">Забыли пароль?</div>

            <label>
                <input type="checkbox" name="remember"> Запомнить меня
            </label>

            <button type="submit" class="black-button">войти</button>
        </form>

    </div>
</div>

<script>
    function togglePassword() {
        const passwordField = document.getElementById('password');
        const type = passwordField.type === 'password' ? 'text' : 'password';
        passwordField.type = type;
    }
</script>
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

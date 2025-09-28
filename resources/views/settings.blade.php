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

        .container-reg {
            border: 5px solid black;
            padding: 60px 100px;
            min-height: 100vh;
        }

        h2 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .privacy {
            font-size: 12px;
            margin-bottom: 40px;
        }

        form {
            max-width: 800px;
        }

        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }

        .form-row input {
            padding: 12px;
            border: 3px solid black;
            font-size: 14px;
            width: 100%;
        }

        .form-row .small {
            width: 130px;
        }

        .form-row .medium {
            width: 200px;
        }

        .form-row .large {
            width: 300px;
        }

        .divider {
            height: 3px;
            background-color: black;
            width: 300px;
            margin: 10px 0 20px;
        }

        label {
            font-size: 14px;
            margin-bottom: 5px;
            display: block;
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
    </style>
</head>
<body>
<div class = "back-button" onclick="history.back()" style="cursor: pointer;">
    <img src="{{ asset('assets/images/Group 85.svg') }}" alt="Back">
</div>

<div class="container-reg">
    <h2>Настройки учетной записи</h2>
    <div class="privacy">политика конфиденциальности</div>

    <form style="margin: 0 auto" action="{{ route('update') }}" method="POST">
        @csrf
        @if ($errors->any())
            <div style="color: red; margin-bottom: 20px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-row">
            <input type="text" value="{{$user->name}}" name="name" placeholder="{{$user->name}}" class="large">
        </div>
        <div class="form-row">
            <input type="text" value="{{$user->surname}}" name="surname" placeholder="{{$user->surname}}" class="large">
        </div>
        <div class="form-row">
            <input type="text" value="{{$user->birth_day}}" name="day" placeholder="{{$user->birth_day}}" class="small">
            <input type="text" value="{{$user->birth_month}}" name="month" placeholder="{{$user->birth_month}}" class="medium">
            <input type="text" value="{{$user->birth_year}}" name="year" placeholder="{{$user->birth_year}}" class="medium">
        </div>
        <div class="form-row">
            <input type="text" value="{{$user->phone_code}}" name="phone_code" placeholder="{{$user->phone_code}}" class="medium">
            <input type="text" value="{{$user->phone}}" name="phone" placeholder="{{$user->phone}}" class="medium">
        </div>
        <div class="form-row">
            <label>зарегистрируйтесь на нашу рассылку</label>
        </div>
        <div class="divider"></div>
        <div class="form-row">
            <label>электронная почта для входа в систему</label>
        </div>
        <div class="form-row">
            <input type="email" name="email" value="{{$user->email}}" placeholder="{{$user->email}}" class="large">
        </div>
        <div class="form-row">
            <input type="password"  name="password" placeholder="" class="large">
        </div>
        <button class="black-button" type="submit">Сохранить</button>
    </form>

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
    @media (max-width: 425px) {
        .chat-widget {
            width: 338px;
            height: 450px;
            bottom: 0;
            right: 0;
        }
    }
</style>

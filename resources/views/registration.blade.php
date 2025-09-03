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
    </style>
</head>
<body>

<div class="container-reg">
    <h2>Настройки учетной записи</h2>
    <div class="privacy">политика конфиденциальности</div>

    <form style="margin: 0 auto" action="{{ route('register') }}" method="POST">
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
            <input type="text" name="name" placeholder="имя" class="large">
        </div>
        <div class="form-row">
            <input type="text" name="surname" placeholder="фамилия" class="large">
        </div>
        <div class="form-row">
            <input type="text" name="day" placeholder="день" class="small">
            <input type="text" name="month" placeholder="месяц" class="medium">
            <input type="text" name="year" placeholder="год" class="medium">
        </div>
        <div class="form-row">
            <input type="text" name="phone_code" placeholder="+7 (926)" class="medium">
            <input type="text" name="phone" placeholder="телефон" class="medium">
        </div>
        <div class="form-row">
            <label>зарегистрируйтесь на нашу рассылку</label>
        </div>
        <div class="divider"></div>
        <div class="form-row">
            <label>электронная почта для входа в систему</label>
        </div>
        <div class="form-row">
            <input type="email" name="email" placeholder="email" class="large">
        </div>
        <div class="form-row">
            <input type="email" name="email_confirmation" placeholder="подтвердите адрес электронной почты" class="large">
        </div>
        <div class="form-row">
            <input type="password" name="password" placeholder="пароль" class="large">
        </div>
        <button class="black-button" type="submit">Регистрация</button>
    </form>

</div>

</body>
</html>

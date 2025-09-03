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

</body>
</html>

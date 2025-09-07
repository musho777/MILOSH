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

@include('layouts.footer')

</body>
</html>
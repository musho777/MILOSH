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
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden; /* скрыть скролл */
        }


        .journal-table {
            width: 100%;
            height: 500px;
            border-collapse: collapse;
            margin: 20px auto;
        }

        .journal-table td, .journal-table th {
            border: 1px solid black;
            width: 33.33%;
            height: 150px;
            background-color: #f4f4f4;
        }

        .journal-table th {
            height: 50px;
            font-size: 24px;
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: white;
        }
    </style>
</head>
<body>

<table class="journal-table">
    <tr>
        <th colspan="3">ЖУРНАЛ</th>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>

</body>
</html>

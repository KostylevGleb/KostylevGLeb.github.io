<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <title>Document</title>
</head>
<body>
<div class="menu_fon">
    <nav class="menu">
        <img src="image/logo2.png">
        <div class="menu_items">
            <a class="menu_item" href={{ route('about') }}>О сайте</a>
            <a class="menu_item" href={{ route('docall') }}>Документация</a>
            <a class="menu_item" href={{ route('home') }}>Личный кабинет</a>
        </div>
    </nav>
</div>
<main class="main">
    @yield('content')
</main>
<footer>
    <div class="foot">
        <p>Copyright © 2023 ПАО «Россети». Все права защищены.</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>
</html>

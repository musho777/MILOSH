<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Каталог</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
</head>
<body>
@include('layouts.header')
<div class="shop-container">
    <div class="cart-sidebar" id="cartSidebar">
        <div class="cart-header">
            <span>ДОБАВЛЕНО В КОРЗИНУ (1)</span>
            <span class="close-sidebar" id="closeSidebar">&times;</span>
        </div>
        <div class="cart-product">
            <div class="product-image"></div>
            <div class="product-details">
                <p class="product-title">Сумка-пакет из натуральной кожи<br>Серия << Алиса. Кролик в шляпе >></p>
                <p><strong>цена: 14 850 руб.</strong></p>
                <p>цвет: карамельный</p>
                <p>гид по размерам</p>
            </div>
        </div>
        <div class="step">
            <h3>ШАГ 1</h3>
            <input type="text" placeholder="Имя">
            <input type="text" placeholder="Фамилия">
            <div class="input-row">
                <input type="text" placeholder="+7 (900)">
                <input type="text" placeholder="Город">
            </div>
            <input type="text" placeholder="Email">
            <input type="text" placeholder="Почта">
            <input type="text" placeholder="Индекс">
        </div>

        <div class="step">
            <h3>ШАГ 2</h3>
            <input type="text" placeholder="Способ доставки">
        </div>

        <div class="step">
            <h3>ШАГ 3</h3>
            <input type="text" placeholder="Способ оплаты">
        </div>

        <div class="cart-footer">
            <p><strong>Итого:</strong> 14 850 руб.</p>
            <button class="checkout-btn">оформить</button>
        </div>
    </div>
    <div class="cart-row">
        <div class="cart-box">Товар 1</div>
        <div class="cart-box">Товар 2</div>
        <div class="cart-box">Товар 3</div>
        <div class="cart-box">Товар 4</div>
        <div class="cart-box">Товар 5</div>
        <div class="cart-box">Товар 6</div>
        <div class="cart-box">Товар 7</div>
        <div class="cart-box">Товар 8</div>
    </div>

    <div class="footer-text">
        текст
    </div>
</div>
</body>

<script>
    const sidebar = document.getElementById('cartSidebar');
    const closeBtn = document.getElementById('closeSidebar');
    const productBoxes = document.querySelectorAll('.cart-box');

    productBoxes.forEach(box => {
        box.addEventListener('click', () => {
            sidebar.classList.add('active');
            document.body.classList.add('sidebar-open'); // добавляем
        });
    });

    closeBtn.addEventListener('click', () => {
        sidebar.classList.remove('active');
        document.body.classList.remove('sidebar-open'); // удаляем
    });



</script>
<script>
    const tabs = document.querySelectorAll('.tabs a');
    tabs.forEach(tab => {
        tab.addEventListener('click', function (e) {
            e.preventDefault();
            tabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
        });
    });
</script>

</html>

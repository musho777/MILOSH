<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Каталог</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/shop.css')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
</head>
<body>
@include('layouts.header')
<div class="shop-container">
    <div class="product-sidebar" id="productSidebar">
        <div class="sidebar-content">
            <span class="close-sidebar" id="closeSidebar">&times;</span>
            <div class="product-info">
                <div class="title-with-fav">
                    <h3>Сумка-пакет из натуральной кожи Серия << Алиса. Кролик в шляпе>> </h3>
                    <img class="favorite-icon" src="{{ asset('/images/icons/избранное.svg') }}" alt="♥">
                </div>
                <p style="margin-top: 20px"><strong>14 850 руб.</strong></p>
                <p style="margin-top: 20px">цвет</p>
                <p style="margin-top: 10px">карамельный</p>
                <div class="black-line"></div>
                <p style="margin-top: 20px">гид по размерам</p>
                <div style="margin-top: 20px" class="black-line"></div>
                <p style="margin-top: 20px">количество</p>
                <div style="margin-top: 20px" class="black-line"></div>

                <a href=""><img class="absolute-arrow" src="{{asset('/images/icons/Rectangle.png')}}" alt="→"></a>
            </div>

            <form>
                <button type="submit" style="margin-top: 20px">добавить в корзину</button>
            </form>

            <div class="tabs">
                <a href="#" class="active"><strong>Описание</strong></a>
                <a href="#"><strong>Рекомендации по уходу</strong></a>
                <a href="#"><strong>Упаковка</strong></a>
                <a href="#"><strong>Доставка</strong></a>
            </div>

            <div class="info-text">
                <p>Вся упаковка MILOSH, не только защищает продукт, но и создает целостную фирменную идентичность, которая объединяя различные дизайны,  позволяет при этом каждому товару сохранять свой отличительный характер. В упаковке используются качественные, экологически чистые материалы. Ваши покупки с бирками будут доставлены в фирменном пакете или коробке.</p>
            </div>

            <div class="contacts">
                <a href=""><p><strong>Можем ли мы Вам помочь?</strong></p></a>
                <a href=""><p><strong>Позвоните в нашу службу поддержки клиентов (   )</strong></p></a>
                <a href=""><p><strong>Напишите нам на электронную почту</strong></p></a>
                <a href=""><p><strong>Пообщайтесь с нашими консультантами в чате</strong></p></a>
            </div>
        </div>
    </div>

    <div class="shop-banner" style="border: 2px solid black;height: 100px">
        <h1 style="margin-top: 30px">{{ $category }}</h1>
    </div>
    <div class="product-row">
        <div class="product-box">Товар 1</div>
        <div class="product-box">Товар 2</div>
        <div class="product-box">Товар 3</div>
        <div class="product-box">Товар 4</div>
        <div class="product-box">Товар 5</div>
        <div class="product-box">Товар 6</div>
        <div class="product-box">Товар 7</div>
        <div class="product-box">Товар 8</div>
    </div>

    <div class="footer-text">
        текст
    </div>
</div>
@include('layouts.footer')
</body>

<script>
    const sidebar = document.getElementById('productSidebar');
    const closeBtn = document.getElementById('closeSidebar');
    const productBoxes = document.querySelectorAll('.product-box');

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

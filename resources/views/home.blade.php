<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>MILOSH</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
</head>
<body>
@include('layouts.header')
<!-- Контейнер поиска -->
<div class="search-container" id="searchContainer">
    <span class="close-sidebar" id="closeSearchSidebar">&times;</span>
    <!-- Поле ввода -->
    <div class="search-input-wrapper">
        <img style="width: 35px" src="{{asset('images/Icons/поиск.svg')}}" alt="Поиск">
        <input type="text" placeholder="введите название или артикул">
    </div>

    <!-- Левая колонка -->
    <div class="search-left">
        <strong>ИСТОРИЯ ПОИСКА</strong>
        <span>сумка</span>
        <a href="">
            <div>НОВОЕ</div>
        </a>
        <a href="">
            <div>ХИТ-ПРОДУКТ</div>
        </a>
        <a href="">
            <div>СУМКИ</div>
        </a>
        <a href="">
            <div>ОДЕЖДА</div>
        </a>
        <a href="">
            <div>АКСЕССУАРЫ</div>
        </a>
        <a href="">
            <div>СКИДКИ И АКЦИИ</div>
        </a>
        <a href="">
            <div>КЛИЕНТСКИЙ СЕРВИС</div>
        </a>
    </div>

    <!-- Правая колонка -->
    <div class="search-right">
        <div class="product-grid">
            <div class="product-box"></div>
            <div class="product-box"></div>
            <div class="product-box"></div>
            <div class="product-box"></div>
        </div>
        <a class="search-button" href="{{route('showCatalogPage')}}">перейти в каталог</a>
    </div>
</div>
<div class="banner">
    <div class="banner__logo">
        <div class="container">
            <div class="banner__text">
         <img src="{{ asset('assets/images/M.png') }}" alt="M" class="letter-img letter-m">
                <img src="{{ asset('assets/images/I.png') }}" alt="I" class="letter-img letter-i">
                <img src="{{ asset('assets/images/L.png') }}" alt="L" class="letter-img letter-l">
                <img src="{{ asset('assets/images/O.png') }}" alt="O" class="letter-img letter-o">
                <img src="{{ asset('assets/images/S.png') }}" alt="S" class="letter-img letter-s">
                <img src="{{ asset('assets/images/H.png') }}" alt="H" class="letter-img letter-h">
            </div>
        </div>
    </div>
</div>


<main class="main">
    <section class="section">
        <div class="block-500px"></div>
        <div class="split-50">
            <a href="{{ route('showAlisaPage') }}" class="left-block" style="text-decoration: none;">
                <img src="{{ asset('images/banners/left_split.png') }}" alt="Left Split">
                <img class="alisa" src="{{ asset('images/banners/алиса.png') }}" alt="Left Split">
            </a>
            <div class="right-block">
                <div>
                    <img class="subtract-img" src="{{ asset('images/banners/Subtract.png') }}" alt="Subtract">
                    <img class="text-overlay" src="{{ asset('images/banners/о бренде.png') }}" alt="О бренде">
                </div>
                 <div class="image-wrapper">
                     <img class="main-img" src="{{ asset('animations/003-2a.svg') }}" alt="Right Split">
                 </div>
            </div>

        </div>
        <div class="image-wrapper1">
            <img class="main-img1" src="{{ asset('animations/003-2b.svg') }}" alt="Right Split">
        </div>
    </section>
    <section class="grid-section">
        <!-- Первый блок -->
        <div class="grid-item bg-subtract">
            <img  src="{{ asset('images/banners/Group 107.png') }}" alt="О бренде">
        </div>

        <!-- Tall блок (занимает 2 строки) -->
        <div class="grid-item tall">
            <div class="tall-left bg-lenta">
                <!-- <img  src="{{ asset('images/banners/лента.png') }}" alt="О бренде"> -->
            </div>
            <div class="tall-right">
                <div class="tall-top bg-int-top">
                    <!-- <img  src="{{ asset('images/banners/магазин-интерьер.png') }}" alt="О бренде"> -->
                </div>
                <div class="tall-bottom bg-int-bottom">
                    <!-- <img  src="{{ asset('images/banners/магазин-интерьер (1).png') }}" alt="О бренде"> -->
                </div>
            </div>
        </div>

        <!-- Остальные 3 блока -->
        <div class="grid-item bg-subtract">
            <img  src="{{ asset('images/banners/Group 107.png') }}" alt="О бренде">
        </div>
        <div class="grid-item bg-subtract">
            <img  src="{{ asset('images/banners/Group 107.png') }}" alt="О бренде">
        </div>
        <div class="grid-item bg-subtract">
            <img  src="{{ asset('images/banners/Group 107.png') }}" alt="О бренде">
        </div>
    </section>

    <div class="casino-bg">
        <img class="casino-img" src="{{ asset('animations/002b.svg') }}" alt="Banner Image">
    </div>
    <div class="container1">
        <div class="left-side">

        </div>
        <div class="right-side">
            <div class="right-one right-sidediv"></div>
            <div class="right-two right-sidediv"></div>
            <div class="right-three right-sidediv">
                <a href="{{route('showFibraPage')}}">
                    <img class="right-three-img" src="{{ asset('images/banners/фото_товара.png') }}" alt="Banner Image">
                </a>
            </div>
            <div class="right-four right-sidediv"></div>
        </div>
    </div>
    <div class="car">
        <img src="{{ asset('animations/lenta-01.svg') }}" alt="Banner Image">
    </div>
    <div class="container2">
        <div class="left-divs">
            <div class="top-boxes">
                <div class="box1"></div>
                <div class="box2"></div>
            </div>
            <div class="box3"></div>
        </div>
        <div class="right-divs">
            <img class="banner-one" src="{{ asset('images/banners/фото_товара (1).png') }}" alt="Banner Image">
        </div>
    </div>
    <div class="container3">
        <div class="left-column">
            <div class="top-left"></div>
            <div class="bottom-left"></div>
        </div>

        <div class="middle-column"></div>

        <div class="right-column">
            <div class="top-right"></div>
            <div class="bottom-right"></div>
        </div>

        <div class="center-circle-div">
            <img class="center-circle" src="{{ asset('animations/n3.svg') }}" alt="Banner Image">
        </div>
    </div>


</main>

<footer class="footer">
    <div class="footer-top">
        <div class="subscribe">
            <p>Присоединяйтесь<br>к нашему списку рассылки</p>
            <label>
                <input type="email" placeholder="Введите ваш почтовый адрес"/>
            </label>
        </div>

            <div>
                <h4>СЕРВИС</h4>
                <ul  class = "contactDiv">
                    <li><a href="">Помощь</a></li>
                    <li><a href="">Доставка и вручение</a></li>
                    <li><a href="">Возврат и замена</a></li>
                </ul>
            </div>
            <div>
                <h4>ЛИЧНЫЙ КАБИНЕТ</h4>
                <ul  class = "contactDiv">
                    <li><a href="">Мой профиль</a></li>
                    <li><a href="">Мои заказы</a></li>
                    <li><a href="">Избранное</a></li>
                </ul>
            </div>
            <div>
                <h4>О КОМПАНИИ</h4>
                <ul  class = "contactDiv">
                    <li><a href="{{route('showJournalPage')}}">О Milosh</a></li>
                    <li><a href="{{route('showJournalPage')}}">Журнал</a></li>
                    <li><a href="{{route('showContactPage')}}">Реквизиты</a></li>
                    <li><a href="{{route('showCertifyPage')}}">Сертификаты</a></li>
                    <li><a href="">MILOSH POLICY</a></li>
                </ul>
            </div>
            <div id="contact">
                <h4>КОНТАКТЫ</h4>
                <div  class = "contactDiv">
                    <p>Телефон Call-Центра: +7 800 770 05 93</p>
                    <p>Написать в WhatsApp</p>
                    <p>Написать на почту</p>
                    <p>Рабочие часы службы обработки заказов:</p>
                    <p>ежедневно, 10:00 - 21:00 (время Московское),</p>
                    <p>кроме выходных и праздничных дней.</p>
                    <div>
                        <div class = "line"></div>
                        <p>ОБРАТНЫЙ ЗВОНОК</p>
                    </div>
                </div>
            </div>

    </div>

    <div class="footer-middle">
        <div class="footer-middle__logo">
            <div class="container">
                <div class="footer-middle__text">
                    <img src="{{ asset('assets/images/BannerM.png') }}" alt="M" class="footer-letter-img letter-m">
                    <img src="{{ asset('assets/images/BannerI.png') }}" alt="I" class="footer-letter-img letter-i">
                    <img src="{{ asset('assets/images/BannerL.png') }}" alt="L" class="footer-letter-img letter-l">
                    <img src="{{ asset('assets/images/BannerO.png') }}" alt="O" class="footer-letter-img letter-o">
                    <img src="{{ asset('assets/images/BannerS.png') }}" alt="S" class="footer-letter-img letter-s">
                    <img src="{{ asset('assets/images/BannerH.png') }}" alt="H" class="footer-letter-img letter-h">
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p style="margin: 0 auto">Авторское право © 2025 MILOSH — v.1.D.25</p>
        <div class="social-icons">
            <i class="fa-brands fa-vk"></i>
            <i class="fa-brands fa-pinterest"></i>
            <i class="fa-brands fa-tiktok"></i>
            <i class="fa-regular fa-envelope"></i>
        </div>
    </div>
</footer>
<!-- Chat Widget -->
{{--<div id="chatWidget" class="chat-widget">--}}
{{--    <div class="chat-header">--}}
{{--        <span>ЧАТ НЕДОСТУПЕН</span>--}}
{{--        <div class="chat-icons">--}}
{{--            <span class="check">&#10003;</span>--}}
{{--            <span class="close" id="closeChat">&#10005;</span>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="chat-body">--}}
{{--        <p>Наши консультанты в настоящее время недоступны,<br>--}}
{{--            однако вы можете оставить сообщение.<br>--}}
{{--            Они будут рады ответить на все ваши вопросы.</p>--}}

{{--        <label>ваше имя</label>--}}
{{--        <input type="text" placeholder="ваше имя">--}}

{{--        <label>email</label>--}}
{{--        <input type="email" placeholder="email">--}}

{{--        <label>тема</label>--}}
{{--        <input type="text" placeholder="тема">--}}

{{--        <label>сообщение</label>--}}
{{--        <textarea placeholder="сообщение"></textarea>--}}

{{--        <button type="submit">отправить</button>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Контейнер чата (скрыт по умолчанию) -->
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


<script>
    const openSearch = document.getElementById('openSearch');
    const searchContainer = document.getElementById('searchContainer');
    const closeSearch = document.getElementById('closeSearchSidebar'); // Кнопка закрытия

    openSearch.addEventListener('click', () => {
        searchContainer.classList.add('active');
    });

    closeSearch.addEventListener('click', () => {
        searchContainer.classList.remove('active');
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


    .search-container {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background: white;
        z-index: 9999;
        padding: 80px 40px 40px;
        box-sizing: border-box;
        overflow-y: auto;
        flex-direction: row;
        gap: 40px;
    }

    .search-container.active {
        display: flex;
    }

    .search-input-wrapper {
        position: absolute;
        top: 20px;
        left: 40px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 14px;
    }

    .search-input-wrapper input {
        border: none;
        border-bottom: 2px solid black;
        padding: 6px 10px;
        width: 300px;
        outline: none;
    }

    .search-left {
        flex: 0 0 220px;
        display: flex;
        flex-direction: column;
        gap: 25px;
        font-size: 14px;
    }

    .search-right {
        flex: 1;
    }

    .product-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        margin-bottom: 20px;
    }

    .product-box {
        border: 2px solid black;
        height: 280px;
    }

    .search-button {
        background: black;
        color: white;
        padding: 8px 20px;
        font-size: 14px;
        cursor: pointer;
        border: none;
    }

    .search-left a {
        text-decoration: none;
        color: black;
    }

    .close-sidebar {
        font-size: 30px;
        cursor: pointer;
        position: absolute;
        top: 10px;
        right: 20px;
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

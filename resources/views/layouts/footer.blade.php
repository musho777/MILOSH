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
            <div>
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
<header class="header">
    <div class="container">
        <div class="header__inner">
            <a href="{{route('showHomePage')}}" class="logo">
                <img class="logo_img" src="{{asset('images/logo/logo.svg')}}" alt="Milosh"/>
            </a>
                    <ul class="nav__list">
                        <li><a href="{{route('showGalleryPage')}}"><b>Галерея</b></a></li>
                        <li class="nav__item nav__item--has-dropdown">
                            <a href="{{route('showShopPage')}}"><b>Магазин</b></a>
                            <ul class="nav__dropdown">
                                <li><a href="{{route('showNewsPage')}}">НОВОЕ</a></li>
                                <li><a href="{{route('showHitProductPage')}}">ХИТ- ПРОДУКТ</a></li>
                                <li><a href="{{ route('showCatalogPage', ['category' => 'СУМКИ']) }}">СУМКИ</a></li>
                                <li><a href="{{ route('showCatalogPage', ['category' => 'ОДЕЖДА']) }}">ОДЕЖДА</a></li>
                                <li><a href="{{ route('showCatalogPage', ['category' => 'АКСЕСУАРЫ']) }}">АКСЕСУАРЫ</a></li>
                                <li><a href="{{route('showActionsPage')}}">АКЦИИ</a></li>
                                <li><a href="#">КЛИЕНТСКИЙ СЕРВИС</a></li>
                            </ul>
                        </li>
                        <li class="nav__item nav__item--has-dropdown">
                            <a href="{{route('showShopPage')}}"><b>Контакты</b></a>
                            <ul class="nav__dropdown">
                                <li><a href="{{route('showContactPage')}}">КОНТАКТЫ</a></li>
                                <li><a href="{{route('showRekvizitPage')}}">РЕКВИЗИТЫ</a></li>
                            </ul>
                        </li>
                        <li class="nav__item nav__item--has-dropdown">
                            <a href="{{route('showShopPage')}}"><b>Introduction</b></a>
                            <ul class="nav__dropdown">
                                <li><a href="{{route('showAboutBrandPage')}}">О БРЕНДЕ</a></li>
                                <li><a href="{{route('showManufacturePage')}}">МАНУФАКТУРА</a></li>
                                <li><a href="{{route('showCasinoPage')}}">КАЗИНО</a></li>
                            </ul>
                        </li>
                        <div  class = "headerLine"></div>
                    </ul>
                    <ul class="nav__icons">
                        <li id="openSearch"><a href="#"><img src="{{asset('images/Icons/search.svg')}}" alt="Поиск"></a></li>
                        <li><a href="#"><img src="{{asset('images/Icons/favorits.svg')}}" alt="Избранное"></a></li>
                        @guest<li><a href="{{route('showLoginPage')}}"><img src="{{asset('images/Icons/Group (3).png')}}" alt="Профиль"></a></li>@endguest
                        @auth<li><a href="{{route('showSettingsPage')}}"><img src="{{asset('images/Icons/Group (3).png')}}" alt="Профиль"></a></li> @endauth
                        <li><a href="{{route('showCartPage')}}"><img src="{{asset('images/Icons/basket.svg')}}" alt="Корзина"></a></li>
                    </ul>
            <!-- Burger menu button -->
            <button class="burger" aria-label="Mobile menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<!-- Mobile menu -->
<div class="mobile-menu">
    <button class="mobile-menu__close" aria-label="Close menu">✕</button>
    <ul class="mobile-menu__list">
        <li><a href="{{route('showGalleryPage')}}">Галерея</a></li>
        <li class="mobile-menu__item--has-dropdown">
            <a href="{{route('showShopPage')}}">Магазин</a>
            <ul class="mobile-menu__dropdown">
                <li><a href="{{route('showNewsPage')}}">НОВОЕ</a></li>
                <li><a href="{{route('showHitProductPage')}}">ХИТ- ПРОДУКТ</a></li>
                <li><a href="{{ route('showCatalogPage', ['category' => 'СУМКИ']) }}">СУМКИ</a></li>
                <li><a href="{{ route('showCatalogPage', ['category' => 'ОДЕЖДА']) }}">ОДЕЖДА</a></li>
                <li><a href="{{ route('showCatalogPage', ['category' => 'АКСЕСУАРЫ']) }}">АКСЕСУАРЫ</a></li>
                <li><a href="{{route('showActionsPage')}}">АКЦИИ</a></li>
                <li><a href="#">КЛИЕНТСКИЙ СЕРВИС</a></li>
            </ul>
        </li>
        <li class="mobile-menu__item--has-dropdown">
            <a href="{{route('showShopPage')}}">Контакты</a>
            <ul class="mobile-menu__dropdown">
                <li><a href="{{route('showContactPage')}}">КОНТАКТЫ</a></li>
                <li><a href="{{route('showRekvizitPage')}}">РЕКВИЗИТЫ</a></li>
            </ul>
        </li>
        <li class="mobile-menu__item--has-dropdown">
            <a href="{{route('showShopPage')}}">Introduction</a>
            <ul class="mobile-menu__dropdown">
                <li><a href="{{route('showAboutBrandPage')}}">О БРЕНДЕ</a></li>
                <li><a href="{{route('showManufacturePage')}}">МАНУФАКТУРА</a></li>
                <li><a href="{{route('showCasinoPage')}}">КАЗИНО</a></li>
            </ul>
        </li>
    </ul>
    <ul class="mobile-menu__icons">
        <li><a href="#"><img src="{{asset('images/Icons/search.svg')}}" alt="Поиск"></a></li>
        <li><a href="#"><img src="{{asset('images/Icons/favorits.svg')}}" alt="Избранное"></a></li>
        @guest<li><a href="{{route('showLoginPage')}}"><img src="{{asset('images/Icons/Group (3).png')}}" alt="Профиль"></a></li>@endguest
        @auth<li><a href="{{route('showSettingsPage')}}"><img src="{{asset('images/Icons/Group (3).png')}}" alt="Профиль"></a></li>@endauth
        <li><a href="{{route('showCartPage')}}"><img src="{{asset('images/Icons/basket.svg')}}" alt="Корзина"></a></li>
    </ul>
</div>

<script src="{{ asset('js/mobile-menu.js') }}"></script>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,900;1,400;1,500&family=Philosopher:wght@400;700&display=swap"
        rel="stylesheet">
    <meta name="description" content="@yield('description')">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset("/css/style_reset.css") }}">
    @vite('resources/scss/app.scss')
    @vite('resources/js/app.js')
@yield('style')
<body id="body" class="body">

<!--Header start-->
<header class="header" id="header">
    <div class="header-info">
        <div class="info-left">
            <div class="item">
                <img title="Study Fun Telegram link" alt="icon location" src="{{asset('/assets/header/location.svg')}}">
                <a> 02140, Київ, вул. Руденко Лариси 6А </a>
            </div>
            <div class="item">
                <img title="Study Fun Telegram link" alt="icon location" src="{{asset('/assets/header/phone.svg')}}">
                <a> +38 (050) 172-00-35 </a>
            </div>
        </div>
        <div class="info-right">
            <div class="item">
                <a href="{{route('blog_home')}}">
                    Блог
                </a>
            </div>
            <div class="item">
                <a href="{{route('contact')}}">
                    Контакти
                </a>
            </div>
            <div class="item">
                <a>
                    UA
                </a>
            </div>
            <div class="item">
                <input class="search" type="search" placeholder="Пошук...">
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="nav-left">
            <div class="item">
                <a href="{{route('certificate_home')}}">Сертифікація</a>
            </div>
            <div class="item">
                <a href="{{route('training')}}">Тренінги</a>
            </div>
            <div class="item">
                <a>Аудити</a>
            </div>
            <div class="item">
                <a href="{{route('certificate_item')}}">Реєстр</a>
            </div>
        </div>
        <div class="nav-center">
            <a class="wrapper_logo" href="{{route('home')}}">
                <img alt="logo" src="{{asset('assets/header/12.svg')}}">
            </a>
        </div>
        <div class="nav-right">
            <div class="item">
                <p>Верифікація</p>
            </div>
            <div class="item">
                <p>Тренінги</p>
            </div>
            <div class="item">
                <p>Аудити</p>
            </div>
            <div class="item">
                <p>Реєстр</p>
            </div>
        </div>
    </div>
</header>
<!--Header end-->

<div id="wrapper" class="wrapper">
    @yield('content')
</div>

<!--button-form start-->
<button class="button-form">
    <div class="content">
        <h4>
            Залишити заявку
        </h4>
    </div>
</button>
<!--button-form  end-->

<!--form start-->
<div class="popup">
    <div class="popup-body">
        <button class="close">
            <img src="{{asset('assets/form/close.svg      ')}}" alt="close">
        </button>
        <form action="#" method="POST">
            <h3 class="title">
                Надіслати заявку
            </h3>
            <div class="form-content ">
                <div class="form-left">
                    <input type="text" id="name" name="name" placeholder="Ім’я..." required>
                    <input type="email" id="email" name="email" placeholder="Номер телефону..." required>
                    <input type="tel" id="phone" name="phone" placeholder="E-mail..." required>
                </div>
                <div class="form-right">
                    <textarea id="message" name="message" placeholder="Повідомлення..." required></textarea>
                </div>
            </div>
            <button type="submit">Надіслати</button>
        </form>
    </div>
</div>

<!--form  end-->

<!--footer start-->
<footer class="footer" id="footer">
    <div class="section-first">
        <div class="container">
            <div class="column-1">
                <div class="content">
                    <div class="item">
                        <a href="">
                            Сертифікація
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            Тренінги
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            Аудити
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            Реєстр
                        </a>
                    </div>
                </div>
            </div>
            <div class="column-2">
                <div class="content">
                    <div class="wrapper_logo">
                        <img alt="logo" src="{{asset('assets/header/12.svg')}}">
                    </div>
                    <div class="contact">
                        <a href="">
                            02140, Київ, вул. Руденко Лариси 6А
                        </a>
                        <a href="">
                            office@im-cert.com
                        </a>
                        <a href="">
                            +38 (050) 172-00-35
                        </a>
                    </div>
                    <div class="social">
                        <img alt="facebook" src="{{asset('assets/footer/facebook.svg')}}">
                        <img alt="instagram" src="{{asset('assets/footer/instagram.svg')}}">
                    </div>
                </div>
            </div>
            <div class="column-3">
                <div class="content">
                    <div class="item">
                        <a href="">
                            Сертифікація
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            Тренінги
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            Аудити
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            Реєстр
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-second">
        <div class="custom-container">
            <div class="content">
                <a href="">Політика якості</a>
                <a href="">Декларація про неупередженість </a>
                <a href="">Порядок скарг та апеляцій </a>
                <a href="">Процес сертифікації </a>
                <a href="">Використання лого та знаку сертифікації </a>
                <a href="">Виписка з пр-01 суіб</a>
                <a href="">Виписка з пр-02 субхп</a>
                <a href="">Виписка з сп-09</a>
            </div>
        </div>
    </div>
    <div class="section-last">
        <a>© 2022 ALL RIGHTS RESERVED BY IMPERIUM CERTIFIC (ИМСЕРТ)</a>
    </div>
</footer>
<!--footer end-->

@yield('scriptLink')
</body>
</html>

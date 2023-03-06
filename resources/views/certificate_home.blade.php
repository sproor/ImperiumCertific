@extends('nav_and_footer')

@section('description')
    certificate description
@endsection

@section('title')
    certificate title
@endsection

@section('style')
    @vite('resources/scss/certificate.scss')
@endsection

@section('content')
    {{--    intro start--}}
    <div class="intro">
        <img alt="Intro" src="{{asset('assets/certificate/intro/bg.jpg')}}">
        <div class="intro-info">
            <h1 class="info-title">
                Сертифікація
            </h1>
        </div>
    </div>
    {{--    intro end--}}

    {{--    mini-nav start--}}
    <div class="mini-nav">
        <div class="content">
            <a href="{{route('home')}}"><img src="{{asset('assets/mini-nav/home.png')}}" alt=""
                                             class="home"></a>
            <img src="{{asset('assets/mini-nav/arrow.svg')}}" class="arrow-right"/>
            <a class="name-position" href="{{'certificate_home'}}">
                Сертифікація
            </a>
        </div>
    </div>
    {{--    mini-nav end--}}

    {{--    info start--}}
    <div class="info">
        <div class="content">
            <div class="wrapp-img">
                <img src="{{asset('assets/certificate/info/block.svg')}}" alt="">
            </div>
            <div class="wrapp-text">
                <p>
                    Сертифікація — це надання незалежним органом письмового
                    підтвердження того, що система менеджменту відповідає
                    вимогам встановлених стандартів.
                </p>
            </div>
        </div>
    </div>
    {{--    info end--}}

    <div class="types">
        <div class="title">
            Види сертифікацій
        </div>
        <div class="content">
            <div class="item">
                <img src="{{asset('assets/certificate/types/bg.jpg')}}" alt="">
                <div class="item-inside">
                    <h4 class="title">ISO 22000:2018</h4>
                    <p class="description">Сертифікація систем менеджменту безпечності харчової продукції</p>
                    <a class="ref">Детальніше</a>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('assets/certificate/types/bg.jpg')}}" alt="">
                <div class="item-inside">
                    <h4 class="title">ISO 22000:2018</h4>
                    <p class="description">Сертифікація систем менеджменту безпечності харчової продукції</p>
                    <a class="ref">Детальніше</a>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('assets/certificate/types/bg.jpg')}}" alt="">
                <div class="item-inside">
                    <h4 class="title">ISO 22000:2018</h4>
                    <p class="description">Сертифікація систем менеджменту безпечності харчової продукції</p>
                    <a class="ref">Детальніше</a>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('assets/certificate/types/bg.jpg')}}" alt="">
                <div class="item-inside">
                    <h4 class="title">ISO 22000:2018</h4>
                    <p class="description">Сертифікація систем менеджменту безпечності харчової продукції</p>
                    <a class="ref">Детальніше</a>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('assets/certificate/types/bg.jpg')}}" alt="">
                <div class="item-inside">
                    <h4 class="title">ISO 22000:2018</h4>
                    <p class="description">Сертифікація систем менеджменту безпечності харчової продукції</p>
                    <a class="ref">Детальніше</a>
                </div>
            </div>
            <div class="item">
                <img src="{{asset('assets/certificate/types/bg.jpg')}}" alt="">
                <div class="item-inside">
                    <h4 class="title">ISO 22000:2018</h4>
                    <p class="description">Сертифікація систем менеджменту безпечності харчової продукції</p>
                    <a class="ref">Детальніше</a>
                </div>
            </div>
        </div>
    </div>

    {{--    process start--}}
    <div class="process">
        <div class="header">
            <h3 class="title">
                Процес сертифікації
            </h3>
            <p class="description">
                передбачає незалежну оцінку експертами, компетентними в проведенні зовнішніх аудитів, що дає змогу
                перевірити ефективність системи управління різними процесами компанії, а також виявити потенційні
                напрямки розвитку та отримати ідеї щодо вдосконалення.
            </p>
        </div>

        <div class="steps">
            <div class="step">
                <div class="content">
                    <div class="number">
                        <div class="circle">01</div>
                    </div>
                    <h4 class="title">
                        Підготовка до сертифікації
                    </h4>
                    <p class="description">
                        Перевірка документації є першим етапом сертифікаційного аудиту,
                        за результатами якої можна зробити висновок про ступінь готовності
                        компанії до аудиту безпосередньо на місці, виявити «вузькі місця» в
                        функцiонуванні системи та узгодити заходи, яких потрібно вжити для
                        уcпішного проходження сертифікації.
                    </p>
                </div>
            </div>
            <div class="step">
                <div class="content">
                    <div class="number">
                        <div class="circle">02</div>
                    </div>
                    <h4 class="title">
                        Оцінка документації
                    </h4>
                    <p class="description">
                        Перевірка документації є першим етапом сертифікаційного аудиту,
                        за результатами якої можна зробити висновок про ступінь готовності
                        компанії до аудиту безпосередньо на місці, виявити «вузькі місця» в
                        функцiонуванні системи та узгодити заходи, яких потрібно вжити для
                        уcпішного проходження сертифікації.
                    </p>
                </div>
            </div>
            <div class="step">
                <div class="content">
                    <div class="number">
                        <div class="circle">03</div>
                    </div>
                    <h4 class="title">
                        Перевірка діяльності компанії
                    </h4>
                    <p class="description">
                        Перевірка документації є першим етапом сертифікаційного аудиту,
                        за результатами якої можна зробити висновок про ступінь готовності
                        компанії до аудиту безпосередньо на місці, виявити «вузькі місця» в
                        функцiонуванні системи та узгодити заходи, яких потрібно вжити для
                        уcпішного проходження сертифікації.
                    </p>
                </div>
            </div>
            <div class="step">
                <div class="content">
                    <div class="number">
                        <div class="circle">04</div>
                    </div>
                    <h4 class="title">
                        Підготовка до сертифікації
                    </h4>
                    <p class="description">
                        Перевірка документації є першим етапом сертифікаційного аудиту,
                        за результатами якої можна зробити висновок про ступінь готовності
                        компанії до аудиту безпосередньо на місці, виявити «вузькі місця» в
                        функцiонуванні системи та узгодити заходи, яких потрібно вжити для
                        уcпішного проходження сертифікації.
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{--    process end--}}

    {{--    advantages start--}}
    <div class="advantages">
        <div class="content">
            <div class="description">
                <h3 class="title">
                    Переваги сертифікації
                </h3>
                <p class="text">
                    Отримання сертифікату відповідності стандартам
                    менеджменту якості,  екології, інформаційної
                    безпеки чи безпечності харчових продуктів  —
                    найкращий спосіб продемонструвати  зацікавленим
                    сторонам наявність ефективно впровадженої системи
                    управління та заявити про організацію як про
                    надійного постачальника, роботодавця та партнера.
                </p>
            </div>
            <div class="items">
                <div class="col-left">
                    <div class="item">
                        <ul>
                            <li>Зміцнення довіри клієнтів</li>
                            <li>Підвищення конкурентоспроможності</li>
                            <li>Розширення ринку збуту та залучення нових клієнтів</li>
                        </ul>
                    </div>
                </div>
                <div class="col-right">
                    <div class="item">
                        <ul>
                            <li>Зміцнення довіри клієнтів</li>
                            <li>Підвищення конкурентоспроможності</li>
                            <li>Розширення ринку збуту та залучення нових клієнтів</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    advantages end--}}
@endsection

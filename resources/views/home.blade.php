@extends('nav_and_footer')

@section('description')
    home description
@endsection

@section('title')
    home title
@endsection

@section('style')
    @vite('resources/scss/home.scss')
@endsection

@section('content')
    {{--    intro start--}}
    <div class="intro">
        <img alt="Intro" src="{{asset('assets/home/intro/intro.jpg')}}">
        <div class="intro-info">
            <div class="info-title">
                <h1>
                    ІМПЕРІУМ
                    <br>
                    СЕРТИФІК
                </h1>
            </div>
            <div class="info-description">
                <p>
                    центр сертифікації та верифікації, який надає послуги аудиту і сертифікації
                    систем менеджменту на відповідність
                    міжнародним стандартам
                </p>
            </div>
        </div>
    </div>
    {{--    intro end--}}

    {{--    information-system start--}}
    <div class="container">
        <div class="information-system">
            <div class="certificate">
                <div class="item">
                    <img alt="Intro" src="{{asset('assets/home/information_system/bg.png')}}">
                    <div class="content">
                        <div class="title">
                            <h4>
                                Сертифікація системи харчової безпеки
                            </h4>
                        </div>
                        <div class="description">
                            <p>
                                ISO 22000:2018 «Система менеджменту безпечності харчової продукції.
                                Вимоги до організацій які здійснюють виробництво харчової продукції» – стандарт,
                                який встановлює вимоги до системи менеджменту безпечності харчових продуктів.
                            </p>
                        </div>
                    </div>

                </div>
                <a class="transition">
                    <div class="content">
                        <p>
                            Всі послуги сертифікації
                        </p>
                        <img alt="arrow" src="{{asset('assets/arrow.svg')}}">
                    </div>
                </a>
            </div>
            <div class="verification">
                <div class="item">
                    <img alt="Intro" src="{{asset('assets/home/information_system/bg.png')}}">
                    <div class="content">
                        <div class="title">
                            <h4>
                                Сертифікація системи харчової безпеки
                            </h4>
                        </div>
                        <div class="description">
                            <p>
                                ISO 22000:2018 «Система менеджменту безпечності харчової продукції.
                                Вимоги до організацій які здійснюють виробництво харчової продукції» – стандарт,
                                який встановлює вимоги до системи менеджменту безпечності харчових продуктів.
                            </p>
                        </div>
                    </div>

                </div>
                <a class="transition">
                    <div class="content">
                        <p>
                            Всі послуги сертифікації
                        </p>
                        <img alt="arrow" src="{{asset('assets/arrow.svg')}}">
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{--    information-system end--}}

    {{--    comment start--}}
    <web-comments-component></web-comments-component>
    {{--    comment end--}}

    {{--    comment start--}}
    <div class="container">
        <div class="brands">
            <div class="brand">
                <img src="{{asset('assets/home/brands/1.png')}}" alt="">
            </div>
            <div class="brand">
                <img src="{{asset('assets/home/brands/2.png')}}" alt="">
            </div>
            <div class="brand">
                <img src="{{asset('assets/home/brands/3.png')}}" alt="">
            </div>
            <div class="brand">
                <img src="{{asset('assets/home/brands/4.png')}}" alt="">
            </div>
            <div class="brand">
                <img src="{{asset('assets/home/brands/5.png')}}" alt="">
            </div>
            <div class="brand">
                <img src="{{asset('assets/home/brands/6.png')}}" alt="">
            </div>
        </div>
    </div>
    {{--    comment end--}}

    {{--    information start--}}
    <div class="container">
        <div class="information">
            <div class="information-left">
                <h3 class="title">
                    ІМПЕРІУМ СЕРТИФІК
                </h3>
                <h4 class="subtitle">
                    Партнер Вашого бізнесу
                </h4>
                <div class="description">
                    <p>
                        Центр сертифікації «Імперіум сертифік» надає послуги з проведення аудиту, сертифікації систем
                        управління та навчання персоналу.
                    </p>
                    <p>
                        Наша мета – це допомога компаніям в управлінні якістю, безпечністю, навколишнім середовищем,
                        енергією, здоров’ям та безпечністю праці для того, щоб зробити бізнес більш стабільним і
                        прибутковим.
                    </p>
                    <p>
                        Завдяки чесному і відповідальному підходу до своєї справи ми проводимо сертифікацію систем
                        менеджменту, дотримуючись всіх технічних вимог, і цим не лише підтверджуємо відповідність
                        вимогам стандартів, а і допомагаємо розгледіти шляхи для вдосконалення бізнесу.
                    </p>
                    <p>
                        Компанія «Імперіум сертифік» ще молода, але наша команда – це кваліфіковані фахівці із багато
                        річним досвідом та широкими знаннями. Завдяки їхньому професіоналізму компанія робить свої перші
                        впевнені кроки на ринку.
                    </p>
                    <p>
                        Ми дбаємо про та постійне розширення знань персоналу, відстежуємо потреби бізнесу, працюємо над
                        укріпленням довіри та готові надати вичерпну інформаційну підтримку, адже переконані, що наші
                        клієнти заслуговують на послуги найвищої якості.
                    </p>
                </div>
                <button class="button">
                    Надіслати заявку
                </button>
            </div>
            <div class="information-right">
                <img alt="info" src="{{asset('assets/home/information/info.png')}}">
            </div>
        </div>
    </div>
    {{--    information end--}}

@endsection

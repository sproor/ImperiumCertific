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
            <img style="margin-left: 5px" src="{{asset('assets/mini-nav/arrow.svg')}}" class="arrow-right"/>
            <a class="name-position" href="{{'certificate_item'}}">
                #name
            </a>
        </div>
    </div>
    {{--    mini-nav end--}}

    {{--    info start--}}
    <div class="info">
        <div class="content">
            <div class="wrapp-img">
                <img src="{{asset('assets/certificate/item/bg_info.svg')}}" alt="">
                <h2>ISO 22000: 2018 </h2>
            </div>
            <div class="wrapp-text">
                <p>
                    Сертифікація систем менеджменту безпечності харчової продукції
                </p>
            </div>
        </div>
    </div>
    {{--    info end--}}

    {{--    info-block start--}}
    <div class="info-block">
        <div class="content">
            <div class="text">
                <p>
                    ISO 22000:2018 «Система менеджменту безпечності харчової продукції. Вимоги до організацій які
                    здійснюють виробництво харчової продукції» – стандарт, який встановлює вимоги до системи менеджменту
                    безпечності харчових продуктів.
                </p>
                <p>
                    В основі стандарту ISO 22000 покладено поняття безпечності. Відповідно всі його вимоги зосереджені
                    на тому, щоб організувати таку систему менеджменту, яка гарантуватиме споживачу отримання безпечного
                    продукту харчування. Окрім цього, в стандарті розглянуті вимоги до інформування, управління системою
                    та питання контролю ризиків.
                </p>
                <p>
                    Стандарт об’єднав принципи, на яких заснована система аналізу ризиків НАССР, заходи щодо
                    застосування цієї системи, розроблені комісією «Кодекс Алиментариус», а також концепцію циклу
                    безперервного покращення «PDCA» (Plan-Do-Check-Act).
                </p>
            </div>
            <div class="sign">
                ?
            </div>
        </div>
    </div>
    {{--    info-block end--}}

    {{--    need start--}}
    <div class="need custom">
        <div class="header">
            <h3 class="title-block">
                Кому потрібен стандарт ISO 22000
            </h3>
            <div class="vert-line"></div>
            <p class="mini-description">
                Вимоги і рекомендації застосовуються для підприємств,
                задіяних у виробництві, упаковці, транспортування і реалізації продуктів харчування
            </p>
        </div>
        <div class="content">
            <br>
            <br>
            <br>
            <h4>
                Область застосування стандарту охоплює:
            </h4>
            <ul>
                <li>виробництво кормів для тварин</li>
                <li>фермерство</li>
                <li>виробництво інгредієнтів</li>
                <li>виробництво харчових продуктів</li>
                <li>підприємства роздрібної торгівлі</li>
            </ul>
            <br>
            <br>
        </div>
    </div>
    {{--    need end--}}

    {{--    goals start--}}
    <div class="goals custom">
        <div class="header">
            <h3 class="title-block">
                Цілі та мета сертифікації ISO 22000
            </h3>
            <div class="vert-line"></div>
            <p class="mini-description">
                Метою стандарту ISO 22000:2018 є об’єднання і
                гармонізація вимог до систем управління безпечністю харчових продуктів.
            </p>
        </div>
        <div class="content">
            Стандарт застосований на ризик-орієнтованому підході використання якого покликане виявляти ризики на двох
            рівнях: організації в цілому та конкретно виробничому етапі. Це досягається шляхом аналізу всіх можливих
            ризиків в ході технологічних процесів виготовлення, та розповсюдження продукції. При цьому важливо
            зауважити, що НАССР — це лише елемент системи, і для повноцінного функціонування системи менеджменту
            безпечності необхідно виконати вимоги щодо управління ресурсами, персоналом, документацією та ін.
            <br>
            <br>
            <b>
                Отже, в стандарті ISO 22000:2018  описані вимоги до системи менеджменту безпечності харчових продуктів,  яка повинна включаючи такі елементи:
            </b>
            <br>
            <br>
            <ul>
                <li><span>1</span>Надпись</li>
                <li><span>10</span>Еще надпись</li>
                <li><span>1</span>И еще одна</li>
                <li><span>2</span>И еще одна</li>
                <li><span>3</span>И еще одна</li>
                <li><span>4</span>И еще одна</li>
            </ul>
        </div>
    </div>
    {{--    goals end--}}

    {{--    custom-advantages start--}}
    <div class="custom-advantages custom">
        <div class="header">
            <h3 class="title-block">
                Переваги сертифікації ISO 22000
            </h3>
            <div class="vert-line"></div>
            <p class="mini-description">
                Метою стандарту ISO 22000:2018 є об’єднання і
                гармонізація вимог до систем управління безпечністю харчових продуктів.
            </p>
        </div>
        <div class="content">
            <p>
                <b>
                    Сертифікація за вимогами ISO 22000   приносить компанії ряд переваг, серед яких найвагомішими є:
                </b>
            </p>
            <ul>
                <li>виробництво кормів для тварин</li>
                <li>фермерство</li>
                <li>виробництво інгредієнтів</li>
                <li>виробництво харчових продуктів</li>
                <li>підприємства роздрібної торгівлі</li>
            </ul>
        </div>
    </div>
    {{--    custom-advantages end--}}

    {{--    history start--}}
    <div class="history custom">
        <div class="header">
            <h3 class="title-block">
                Історія розвитку стандарту ISO 22000
            </h3>
            <div class="vert-line"></div>
            <p class="mini-description">
                Історія розвитку стандарту ISO 22000
            </p>
        </div>
        <div class="content">
            Стандарт ISO 22000:2018 є основним з-поміж стандартів серії ISO 22000. Його розробка обумовлена необхідністю зблизить вимоги системи НАССР з вимогами міжнародних стандартів до систем менеджменту, тому деякі розділи стандарту містять вимоги  ISO 9001 «Системи менеджменту якості».
            <br>  <br>
            Актуальна редакція стандарту опублікована 19 червня 2018 року. Організації, сертифіковані за попередньою версією ISO 22000:2005 мають можливість здійснити перехід на нову протягом трьох років з дати її публікації.
            <br>  <br>
            Інформація про останню редакцію стандарту (коли, що змінилось, який час на впровадження і т.д.)
            <br>  <br>
            В стандарті використано структуру високо рівня, яка є спільною для всіх стандартів систем менеджменту та призначена для спрощення їх поєднання та інтеграції в процеси організації.
            <br>  <br>
            Описано новий підхід до ризику – окремо на операційному (виробничому) рівні та бізнес-рівні організації.
            <br>  <br>
            Одним із суттєвих оновлень є вимога до застосування циклу «PDCA», який повинен охопити  систему менеджменту в цілому та окремо – операційні процеси, пов’язані з менеджментом безпечності.
            <ul>
                <li>виробництво кормів для тварин</li>
                <li>фермерство</li>
                <li>виробництво інгредієнтів</li>
                <li>виробництво харчових продуктів</li>
                <li>підприємства роздрібної торгівлі</li>
            </ul>
        </div>
    </div>
    {{--    history end--}}

    <div class="distribution">
        <div class="content">
            <img src="{{asset('assets/send.svg')}}" alt="">
            <h4>Замовити сертифікацію #name</h4>
            <button class="button">Надіслати заявку</button>
        </div>
    </div>
@endsection

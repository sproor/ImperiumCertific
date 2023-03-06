@extends('nav_and_footer')

@section('description')
    training description
@endsection

@section('title')
    training title
@endsection

@section('style')
    @vite('resources/scss/training.scss')
@endsection

@section('content')
    {{--    intro start--}}
    <div class="intro">
        <img alt="Intro" src="{{asset('assets/training/intro/bg.jpg')}}">
        <div class="intro-info">
            <h1 class="info-title">
                Тренінги
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
            <a class="name-position" href="{{'training'}}">
                Тренінги
            </a>
        </div>
    </div>
    {{--    mini-nav end--}}

    {{--    info start--}}
    <div class="info">
        <div class="content">
            <div class="wrapp-img">
                <img src="{{asset('assets/certificate/item/bg_info.svg')}}" alt="">
                <img class="icon" src="{{asset('assets/training/info/icon.svg')}}" alt="">
            </div>
            <div class="wrapp-text">
                <p>
                    ТОВ «Імперіум Сертифік» пропонує професійні навчальні послуги: проведення корпоративних тренінгів,
                    організація семінарів та дистанційного навчання.
                </p>
            </div>
        </div>
    </div>
    {{--    info end--}}

    {{--    mini-info start--}}
    <div class="container">
        <div class="mini-info">
            <div class="content">
                <p>
                    Тематична направленість включає різні аспекти менеджменту, починаючи від управління ризиками та
                    основних принципів побудови системи менеджменту, закінчуючи розробкою інтегрованих систем і
                    вивченням методології та інструментів для вдосконалення системи управління.
                </p>
                <p>
                    Викладачі навчального центру – висококваліфіковані спеціалісти, експерти з великим досвідом
                    практичної діяльності. Програми, за якими здійснюється навчання, є авторськими розробками, які
                    поєднують в собі теоретичні блоки, практичні завдання та відпрацювання навичок.
                </p>
                <p>
                    Ми не надаємо консультаційних послуг та практичних рекомендацій, щоб не створювати ризиків порушення
                    неупередженості. Але максимально детально розбираємо вимоги стандартів і можливі підходи до їх
                    реалізації, спонукаємо учасників до обговорень і дискусій, в ході яких народжуються цінні ідеї.
                </p>
            </div>
        </div>
    </div>
    {{--    mini-info end--}}

    {{--     education start--}}

    <div class="education">
        <h3 class="header">
            Форми навчання
        </h3>
        <div class="container">
            <div class="content">
                <div class="item">
                    <img src="{{asset('assets/training/education/online.svg')}}"  alt="">
                    <h4>Онлайн</h4>
                    <p>дистанційне навчання у формі вебінару,
                        до якого учасники можуть долучитися не покидаючи робоче місце</p>
                </div>
                <div class="item">
                    <img src="{{asset('assets/training/education/group.svg')}}"  alt="">
                    <h4>Групове (корпоративне)</h4>
                    <p>навчання працівників однієї компанії з урахуванням специфіки їхніх виробничих потреб</p>
                </div>
                <div class="item">
                    <img src="{{asset('assets/training/education/individual.svg')}}"  alt="">
                    <h4>Індивідуальне </h4>
                    <p>розроблене для вирішення конкретних виробничих задач учасника</p>
                </div>
            </div>
        </div>
    </div>
    {{--     education end--}}

    {{--     advantages start--}}
    <div class="advantages">
        <h3 class="header">
            Переваги наших тренінгів
        </h3>
        <div class="container">
            <div class="content">
                <ul>
                    <li>
                        <b>Якість</b> – тренінги проводяться компетентними спеціалістами за затвердженими авторськими програмами;
                    </li>
                    <li>
                        <b>Якість</b> – тренінги проводяться компетентними  тренінги проводяться компетентними тренінги проводяться компетентними тренінги проводяться компетентними тренінги проводяться компетентними тренінги проводяться компетентними спеціалістами за затвердженими авторськими програмами;
                    </li>
                    <li>
                        <b>Якість</b> – тренінги проводяться компетентними спеціалістами за затвердженими авторськими програмами;
                    </li>
                    <li>
                        <b>Якість</b> – тренінги проводяться компетентними спеціалістами за затвердженими авторськими програмами;
                    </li>
                </ul>
            </div>
        </div>
    </div>
    {{--     advantages end--}}

    {{--     start--}}
    {{--     end--}}

    {{--     start--}}
    {{--     end--}}
    <div class="container">
        <div class="distribution-white">
            <img src="{{asset('assets/telegram.svg')}}"  alt="">
            <div class="content">
                Подати заявку на організацію навчання можна за номером телефону
                +38 (050) 172-00-35 або електронною адресою <a>office@im-cert.com</a>
            </div>
        </div>
    </div>

@endsection

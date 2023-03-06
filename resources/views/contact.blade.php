@extends('nav_and_footer')

@section('description')
    contact description
@endsection

@section('title')
    contact title
@endsection

@section('style')
    @vite('resources/scss/contact.scss')
@endsection

@section('content')
    {{--    intro start--}}
    <div class="intro">
        <img alt="Intro" src="{{asset('assets/contact/intro/bg.jpg')}}">
        <div class="intro-info">
            <h1 class="info-title">
                Контакти
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
            <a class="name-position" href="{{'contact'}}">
                Контакти
            </a>
        </div>
    </div>
    {{--    mini-nav end--}}

    {{--    contacts start--}}
    <div class="container-contacts">
        <div class="contacts">
            <div class="contact">
                <div class="content">
                    <div class="icon">
                        <img src="{{asset('assets/contact/icon/location.svg')}}" alt="">
                        <p class="description">Адреса</p>
                    </div>
                    <p>Київ, Лариси Руденко 6А, офіс 721</p>
                </div>
            </div>
            <div class="contact">
                <div class="content">
                    <div class="icon">
                        <img src="{{asset('assets/contact/icon/phone.svg')}}" alt="">
                        <p class="description">Телефон</p>
                    </div>
                    <p>+38 (050) 172-00-35</p>
                </div>
            </div>
            <div class="contact">
                <div class="content">
                    <div class="icon">
                        <img src="{{asset('assets/contact/icon/viber.svg')}}" alt="">
                        <p class="description">Viber</p>
                    </div>
                    <p>+38 (050) 172-00-35</p>
                </div>
            </div>
            <div class="contact">
                <div class="content">
                    <div class="icon">
                        <img src="{{asset('assets/contact/icon/telegram.svg')}}" alt="">
                        <p class="description">Telegram</p>
                    </div>
                    <p>@Imcert</p>
                </div>
            </div>
            <div class="contact">
                <div class="content">
                    <div class="icon">
                        <img src="{{asset('assets/contact/icon/email.svg')}}" alt="">
                        <p class="description">E-mail</p>
                    </div>
                    <p>office@im-cert.com</p>
                </div>
            </div>
        </div>
    </div>
    {{--    contacts end--}}

    {{--    map start--}}
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2543.4618170808935!2d30.639351950769193!3d50.39523038795415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c44e140c140b%3A0x409274d8a6ddf91a!2zNkEsINGD0LsuINCb0LDRgNC40YHRiyDQoNGD0LTQtdC90LrQviwgNtCQLCDQmtC40LXQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1678101127202!5m2!1sru!2sua" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    {{--    map end--}}

    {{--    distribution start--}}
    <div class="distribution">
        <div class="content">
            <img src="{{asset('assets/send.svg')}}" alt="">
            <h4>Отримати інформацію</h4>
            <button class="button">Надіслати заявку</button>
        </div>
    </div>
    {{--    distribution end--}}
@endsection

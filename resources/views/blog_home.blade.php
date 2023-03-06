@extends('nav_and_footer')

@section('description')
    certificate description
@endsection

@section('title')
    certificate title
@endsection

@section('style')
    @vite('resources/scss/blog.scss')
@endsection

@section('content')
    {{--    intro start--}}
    <div class="intro">
        <img alt="Intro" src="{{asset('assets/blog/intro/bg.jpg')}}">
        <div class="intro-info">
            <h1 class="info-title">
                Блог
            </h1>
        </div>
    </div>
    {{--    intro end--}}

    {{--    mini-nav start--}}
    <div class="mini-nav">
        <div class="content">
            <a href="{{route('home')}}">
                <img src="{{asset('assets/mini-nav/home.png')}}" alt="" class="home">
            </a>
            <img src="{{asset('assets/mini-nav/arrow.svg')}}" class="arrow-right"/>
            <a class="name-position" href="{{'blog_home'}}">
                Блог
            </a>
        </div>
    </div>
    {{--    mini-nav end--}}

    {{--    category start--}}
    <div class="category">
        <div class="content">
            <div class="item active">
                <a>
                    Усі статті
                </a>
            </div>
            <div class="item">
                <a>
                    Сертифікація
                </a>
            </div>
            <div class="item">
                <a>
                    Верифікація
                </a>
            </div>
        </div>
    </div>
    {{--    category end--}}

    {{--    news start--}}
        <div class="news">
            <div class="item">
                <div class="wrap-img">
                    <img src="{{asset('assets/blog/news/img.jpg')}}"  alt="">
                </div>
                <div class="type red">
                    <p>
                        Сертифікація
                    </p>
                </div>
                <div class="content">
                    <div class="title">
                        <h4>
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                        </h4>
                    </div>
                    <div class="description">
                        <p>
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                        </p>
                    </div>
                    <a class="full">
                        <p>
                            Читати повністю
                        </p>
                        <div class="arrow-1">
                            <div></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="wrap-img">
                    <img src="{{asset('assets/blog/news/img.jpg')}}"  alt="">
                </div>
                <div class="type">
                    <p>
                        Сертифікація
                    </p>
                </div>
                <div class="content">
                    <div class="title">
                        <h4>
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                        </h4>
                    </div>
                    <div class="description">
                        <p>
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                        </p>
                    </div>
                    <a class="full">
                        <p>
                            Читати повністю
                        </p>
                        <div class="arrow-1">
                            <div></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="wrap-img">
                    <img src="{{asset('assets/blog/news/img.jpg')}}"  alt="">
                </div>
                <div class="type">
                    <p>
                        Сертифікація
                    </p>
                </div>
                <div class="content">
                    <div class="title">
                        <h4>
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                        </h4>
                    </div>
                    <div class="description">
                        <p>
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                        </p>
                    </div>
                    <a class="full">
                        <p>
                            Читати повністю
                        </p>
                        <div class="arrow-1">
                            <div></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="wrap-img">
                    <img src="{{asset('assets/blog/news/img.jpg')}}"  alt="">
                </div>
                <div class="type">
                    <p>
                        Сертифікація
                    </p>
                </div>
                <div class="content">
                    <div class="title">
                        <h4>
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                        </h4>
                    </div>
                    <div class="description">
                        <p>
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                        </p>
                    </div>
                    <a class="full">
                        <p>
                            Читати повністю
                        </p>
                        <div class="arrow-1">
                            <div></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="wrap-img">
                    <img src="{{asset('assets/blog/news/img.jpg')}}"  alt="">
                </div>
                <div class="type">
                    <p>
                        Сертифікація
                    </p>
                </div>
                <div class="content">
                    <div class="title">
                        <h4>
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                        </h4>
                    </div>
                    <div class="description">
                        <p>
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                            Принципи ХАССП призначені для забезпечення виготовлення безпечної харчової продукції.
                        </p>
                    </div>
                    <a class="full">
                        <p>
                            Читати повністю
                        </p>
                        <div class="arrow-1">
                            <div></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    {{--    news end--}}

    {{--    distribution start--}}
    <div class="distribution">
        <div class="content">
            <img src="{{asset('assets/send.svg')}}" alt="">
            <h4>Отримуйте нові статті на свій e-mail</h4>
            <button class="button">Надіслати заявку</button>
        </div>
    </div>
    {{--    distribution end--}}
@endsection

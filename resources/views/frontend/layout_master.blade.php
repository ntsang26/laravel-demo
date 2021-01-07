<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fptshop.com.vn | Điện thoại, Laptop, Tablet, Phụ kiện chính hãng giá tốt nhất</title>

    {{-- <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>

<body>

    {{-- <i class="far fa-snowflake"></i> --}}

    @include('frontend.include.header')

    <main class="main-wrapper">
        <div class="fpt-sale">
            <div class="fpt-sale-coutdown">
                <div class="container">
                    <div class="sale-cd text-center">
                        <div class="sale-cd-tit">
                        </div>
                        <div class="sale-cd-timer" id="demo">
                            <label>Tết sắp đến còn</label>
                            <ul>
                                <li>
                                    <div class="cd-box">
                                        <div class="cd-tm" id="day">0</div>
                                        Ngày
                                    </div>
                                </li>
                                <li>
                                    <div class="cd-box">
                                        <div class="cd-tm" id="hour">0</div>
                                        Giờ
                                    </div>
                                </li>
                                <li>
                                    <div class="cd-box">
                                        <div class="cd-tm" id="minute">0</div>
                                        Phút
                                    </div>
                                </li>
                                <li>
                                    <div class="cd-box">
                                        <div class="cd-tm" id="second">0</div>
                                        Giây
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @include('frontend.include.carousel_content')
            @include('frontend.include.category_content')
            @include('frontend.include.sale_content')
        </div>
    </main>

    @include('frontend.include.footer')

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
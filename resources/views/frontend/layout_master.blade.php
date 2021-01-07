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

    <nav class="navbar navbar-expand-md navbar-light shadow-sm">
        <div class="row container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset("img/logo.png") }}" alt="logo" height="45px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <div class="input-group my-2 my-lg-0">
                        <input class="form-control" type="text"
                            placeholder="Nhập tên điện thoại, máy tính, phụ kiện... cần tìm">
                        <div class="input-group-append">
                            <button class="btn my-2 px-3 my-sm-0 search-btn" type="submit">
                                <i class="fas fa-search fa-lg text-white"></i>
                            </button>
                        </div>
                    </div>
                </ul>
                <ul class="navbar-nav ml-auto fs-hdmn">
                    <li class="nav-item text-center">
                        <a href="#" class="nav-link">
                            <i class="fas fa-file-alt fa-2x"></i>
                            <span>Thông tin hay</span>
                        </a>
                    </li>
                    <li class="nav-item text-center">
                        <a href="#" class="nav-link">
                            <i class="far fa-lightbulb fa-2x"></i>
                            <span>Thu hộ điện nước</span>
                        </a>
                    </li>

                    <li class="nav-item text-center">
                        <a href="#" class="nav-link">
                            <i class="fas fa-shopping-cart fa-2x"></i>
                            <span>Giỏ hàng</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="category">
        <ul>
            <li>
                <a href="#">
                    <i class="fas fa-mobile-alt"></i>
                    Điện thoại
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-laptop"></i>
                    Laptop
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fab fa-apple"></i>
                    Apple
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-tv"></i>
                    Tivi Box
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-headphones"></i>
                    Phụ kiện
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-redo-alt"></i>
                    Máy cũ giá rẻ
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-tablet-alt"></i>
                    Tablet
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-sim-card"></i>
                    Sim & Thẻ
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-gift"></i>
                    Khuyến mãi
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-piggy-bank"></i>
                    Trả góp 0%
                </a>
            </li>
        </ul>
    </div>

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
            <section class="section-banner mb-5">
                <div class="container">
                    <div class="cate-box">
                        <div id="carouselId" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselId" data-slide-to="1"></li>
                                <li data-target="#carouselId" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img src="{{asset("img/carousel-1.jpg")}}" class="img-fluid" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset("img/carousel-2.jpg")}}" class="img-fluid" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset("img/carousel-3.jpg")}}" class="img-fluid" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                                <i class="fas fa-chevron-circle-left fa-3x"></i>
                            </a>
                            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                                <i class="fas fa-chevron-circle-right fa-3x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-box mb-5">
                <div class="container">
                    <div class="cate-box">
                        <div class="row-cate bg-white">
                            @foreach ($category as $item)
                                <div class="col-md-2 col-6 col-border">
                                    <a href="#" class="ct-item-a">
                                        <div class="cate-item text-center">
                                            <picture class="picture">
                                                <img src="{{asset("img/dien-thoai.png")}}"
                                                    class="img-fluid"
                                                    alt="Điện thoại">
                                            </picture>
                                            <div class="cate-item-name">
                                                {!! $item->name !!}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-box slide-product pb-3">
                <div class="container">
                    <div class="prd-sale cate-box bg-white">
                        <div class="prd-sale px-3 mb-3">
                            <div class="title">Khuyến mãi hot</div>
                        </div>
                        <div class="prd_sale__product">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="cdt-product product-sale">
                                            <div class="cdt-product__img">
                                                <a href="/dien-thoai/oppo-reno5">
                                                    <span class="" style="color: transparent; display: inline-block; height: 214px;">
                                                        <img src="https://img.fpt.shop/w_214/h_214/f_png/cmpr_10/m_letterbox_ffffff_100/https://fptshop.com.vn/Uploads/Originals/2020/12/15/637436511396569572_oppo-reno5-dd-1.png"
                                                            alt="Oppo Reno5 8GB - 128GB" title="Oppo Reno5 8GB - 128GB" height="214">
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="cdt-product__info">
                                                <a href="/dien-thoai/oppo-reno5" title="Oppo Reno5 8GB - 128GB">
                                                    <div class="cdt-product__name">Oppo Reno5 8GB - 128GB</div>
                                                </a>
                                                <div class="cdt-product__show-price">
                                                    <div class="price">8.990.000 ₫</div>
                                                </div>
                                            </div>
                                            <div class="cdt-product__config">
                                                <div class="cdt-product__img-promo">
                                                    <span class="active">
                                                        <img src="https://img.fpt.shop/w_45/h_45/f_png/cmpr_10/m_letterbox_ffffff_100/https://fptshop.com.vn/Uploads/Originals/2020/12/21/637441438123456394_Loa OPPO.png"
                                                            alt="Tặng Loa bluetooth Tekin L7">
                                                    </span>
                                                    <span>
                                                        <img src="https://img.fpt.shop/w_45/h_45/f_png/cmpr_10/m_letterbox_ffffff_100/https://fptshop.com.vn/Uploads/Originals/2020/12/21/637441448296154889_6 tháng.png"
                                                            alt="Tặng Gói bảo hiểm rơi vỡ màn hình 6 tháng">
                                                    </span>
                                                    <span>
                                                        <img src="https://img.fpt.shop/w_45/h_45/f_png/cmpr_10/m_letterbox_ffffff_100/https://fptshop.com.vn/Uploads/Originals/2020/12/1/637424268331671919_637320703949598472_masstel-watch-dream-action-xanh-1.png"
                                                            alt="Smart Watch Dream Action Giá chỉ còn 899K khi mua kèm máy">
                                                    </span>
                                                    <div id="productPromotionHotppromotion34998" class="cdt-product__text-promo">
                                                        Tặng Loa bluetooth Tekin L7
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="cdt-product product-sale">
                                            <div class="cdt-product__img">
                                                <a href="/dien-thoai/oppo-reno5">
                                                    <span class="" style="color: transparent; display: inline-block; height: 214px;">
                                                        <img src="https://img.fpt.shop/w_214/h_214/f_png/cmpr_10/m_letterbox_ffffff_100/https://fptshop.com.vn/Uploads/Originals/2020/12/15/637436511396569572_oppo-reno5-dd-1.png"
                                                            alt="Oppo Reno5 8GB - 128GB" title="Oppo Reno5 8GB - 128GB" height="214">
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="cdt-product__info">
                                                <a href="/dien-thoai/oppo-reno5" title="Oppo Reno5 8GB - 128GB">
                                                    <div class="cdt-product__name">Oppo Reno5 8GB - 128GB</div>
                                                </a>
                                                <div class="cdt-product__show-price">
                                                    <div class="price">8.990.000 ₫</div>
                                                </div>
                                            </div>
                                            <div class="cdt-product__config">
                                                <div class="cdt-product__img-promo">
                                                    <span class="active">
                                                        <img src="https://img.fpt.shop/w_45/h_45/f_png/cmpr_10/m_letterbox_ffffff_100/https://fptshop.com.vn/Uploads/Originals/2020/12/21/637441438123456394_Loa OPPO.png"
                                                            alt="Tặng Loa bluetooth Tekin L7">
                                                    </span>
                                                    <span>
                                                        <img src="https://img.fpt.shop/w_45/h_45/f_png/cmpr_10/m_letterbox_ffffff_100/https://fptshop.com.vn/Uploads/Originals/2020/12/21/637441448296154889_6 tháng.png"
                                                            alt="Tặng Gói bảo hiểm rơi vỡ màn hình 6 tháng">
                                                    </span>
                                                    <span>
                                                        <img src="https://img.fpt.shop/w_45/h_45/f_png/cmpr_10/m_letterbox_ffffff_100/https://fptshop.com.vn/Uploads/Originals/2020/12/1/637424268331671919_637320703949598472_masstel-watch-dream-action-xanh-1.png"
                                                            alt="Smart Watch Dream Action Giá chỉ còn 899K khi mua kèm máy">
                                                    </span>
                                                    <div id="productPromotionHotppromotion34998" class="cdt-product__text-promo">
                                                        Tặng Loa bluetooth Tekin L7
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="cdt-product product-sale">
                                            <div class="cdt-product__img">
                                                <a href="/dien-thoai/oppo-reno5">
                                                    <span class="" style="color: transparent; display: inline-block; height: 214px;">
                                                        <img src="https://img.fpt.shop/w_214/h_214/f_png/cmpr_10/m_letterbox_ffffff_100/https://fptshop.com.vn/Uploads/Originals/2020/12/15/637436511396569572_oppo-reno5-dd-1.png"
                                                            alt="Oppo Reno5 8GB - 128GB" title="Oppo Reno5 8GB - 128GB" height="214">
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="cdt-product__info">
                                                <a href="/dien-thoai/oppo-reno5" title="Oppo Reno5 8GB - 128GB">
                                                    <div class="cdt-product__name">Oppo Reno5 8GB - 128GB</div>
                                                </a>
                                                <div class="cdt-product__show-price">
                                                    <div class="price">8.990.000 ₫</div>
                                                </div>
                                            </div>
                                            <div class="cdt-product__config">
                                                <div class="cdt-product__img-promo">
                                                    <span class="active">
                                                        <img src="https://img.fpt.shop/w_45/h_45/f_png/cmpr_10/m_letterbox_ffffff_100/https://fptshop.com.vn/Uploads/Originals/2020/12/21/637441438123456394_Loa OPPO.png"
                                                            alt="Tặng Loa bluetooth Tekin L7">
                                                    </span>
                                                    <span>
                                                        <img src="https://img.fpt.shop/w_45/h_45/f_png/cmpr_10/m_letterbox_ffffff_100/https://fptshop.com.vn/Uploads/Originals/2020/12/21/637441448296154889_6 tháng.png"
                                                            alt="Tặng Gói bảo hiểm rơi vỡ màn hình 6 tháng">
                                                    </span>
                                                    <span>
                                                        <img src="https://img.fpt.shop/w_45/h_45/f_png/cmpr_10/m_letterbox_ffffff_100/https://fptshop.com.vn/Uploads/Originals/2020/12/1/637424268331671919_637320703949598472_masstel-watch-dream-action-xanh-1.png"
                                                            alt="Smart Watch Dream Action Giá chỉ còn 899K khi mua kèm máy">
                                                    </span>
                                                    <div id="productPromotionHotppromotion34998" class="cdt-product__text-promo">
                                                        Tặng Loa bluetooth Tekin L7
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="cdt-product product-sale">
                                            <div class="cdt-product__img">
                                                <a href="/dien-thoai/oppo-reno5">
                                                    <span class="" style="color: transparent; display: inline-block; height: 214px;">
                                                        <img src="https://img.fpt.shop/w_214/h_214/f_png/cmpr_10/m_letterbox_ffffff_100/https://fptshop.com.vn/Uploads/Originals/2020/12/15/637436511396569572_oppo-reno5-dd-1.png"
                                                            alt="Oppo Reno5 8GB - 128GB" title="Oppo Reno5 8GB - 128GB" height="214">
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="cdt-product__info">
                                                <a href="/dien-thoai/oppo-reno5" title="Oppo Reno5 8GB - 128GB">
                                                    <div class="cdt-product__name">Oppo Reno5 8GB - 128GB</div>
                                                </a>
                                                <div class="cdt-product__show-price">
                                                    <div class="price">8.990.000 ₫</div>
                                                </div>
                                            </div>
                                            <div class="cdt-product__config">
                                                <div class="cdt-product__img-promo">
                                                    <span class="active">
                                                        <img src="https://img.fpt.shop/w_45/h_45/f_png/cmpr_10/m_letterbox_ffffff_100/https://fptshop.com.vn/Uploads/Originals/2020/12/21/637441438123456394_Loa OPPO.png"
                                                            alt="Tặng Loa bluetooth Tekin L7">
                                                    </span>
                                                    <span>
                                                        <img src="https://img.fpt.shop/w_45/h_45/f_png/cmpr_10/m_letterbox_ffffff_100/https://fptshop.com.vn/Uploads/Originals/2020/12/21/637441448296154889_6 tháng.png"
                                                            alt="Tặng Gói bảo hiểm rơi vỡ màn hình 6 tháng">
                                                    </span>
                                                    <span>
                                                        <img src="https://img.fpt.shop/w_45/h_45/f_png/cmpr_10/m_letterbox_ffffff_100/https://fptshop.com.vn/Uploads/Originals/2020/12/1/637424268331671919_637320703949598472_masstel-watch-dream-action-xanh-1.png"
                                                            alt="Smart Watch Dream Action Giá chỉ còn 899K khi mua kèm máy">
                                                    </span>
                                                    <div id="productPromotionHotppromotion34998" class="cdt-product__text-promo">
                                                        Tặng Loa bluetooth Tekin L7
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next">
                                    
                                </div>
                                <div class="swiper-button-prev">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    {{-- <main class="py-4">
        @yield('content')
    </main> --}}

    <footer>
        <div class="fs-footer py-3">
            <div class="container-fluid px-4">
                <div class="row m-0">
                    <div class="col-md-2">
                        <ul class="fs-ftul">
                            <li><a href="#">Giới thiệu về công ty</a></li>
                            <li><a href="#" title="">Chính sách bảo mật</a></li>
                            <li><a href="#" title="">Quy chế hoạt động</a></li>
                            <li><a href="#" title="">Kiểm tra hóa đơn điện tử</a></li>
                            <li><a href="#" title="">Tra cứu thông tin bảo hành</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul class="fs-ftul">
                            <li><a href="#">Tin tuyển dụng</a></li>
                            <li><a href="#" title="">Tin khuyến mãi</a></li>
                            <li><a href="#" title="">Hướng dẫn mua online</a></li>
                            <li><a href="#" title="">Hướng dẫn mua trả góp</a></li>
                            <li><a href="#" title="">Chính sách trả góp</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="fs-ftul">
                            <li><a href="#">Hệ thống cửa hàng</a></li>
                            <li><a href="#" title="">Hệ thống bảo hành</a></li>
                            <li><a href="#" title="">Kiểm tra hàng Apple chính hãng</a></li>
                            <li><a href="#" title="">Giới thiệu máy đổi trả</a></li>
                            <li><a href="#" title="">Chính sách đổi trả</a></li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <ul class="fs-ftr2 clearfix">
                                <li>
                                    <p>Tư vấn mua hàng (Miễn phí)</p>
                                    <a href="tel:18006601" title="">1800 6601</a>
                                </li>
                                <li>
                                    <p>Góp ý, khiếu nại dịch vụ (8h00-22h00)</p>
                                    <a href="tel:18006616" title="">1800 6616</a>
                                </li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="fs-ftrright">
                                <div class="fs-ftr1">
                                    <p class="fs-ftrtit">Hỗ trợ thanh toán:</p>
                                    {{-- <a class="fs-ftr-vs" href="javascript:;" title="" style="cursor: none;"></a>
                                    <a class="fs-ftr-mt" href="javascript:;" title="" style="cursor: none;"></a>
                                    <a class="fs-ftr-atm" href="javascript:;" title="" style="cursor: none;"></a>
                                    <ul class="fs-frgbhg">
                                        <li>
                                            <a class="fs-ftr-chf" href="/ho-tro" title=""></a>
                                        </li>
                                        <li>
                                            <a  rel="nofollow noopener" 
                                                class="fs-ftr-cthuong" 
                                                href="http://online.gov.vn/Home/WebDetails/21883"
                                                title="">
                                            </a>
                                        </li>
                                    </ul> --}}
                                </div>
                                <div class="fs-ftr3">
                                    <p class="fs-ftrtit">Chứng nhận:</p>
                                    {{-- <ul>
                                        <li>
                                            <a class="fs-ftr-dmca" href="javascript:;" title="" style="cursor: none;"></a>
                                        </li>
                                        <li>
                                            <a class="fs-ftr-sp" href="javascript:;" title="" style="cursor: none;"></a>
                                        </li>
                                        <li>
                                            <a class="fs-ftr-thieuvn" href="javascript:;" title="" style="cursor: none;"></a>
                                        </li>
                                    </ul> --}}
                                    <p class="fs-ftrtitlg">Website cùng tập đoàn:</p>
                                    {{-- <ul class="fs-frgbhg">
                                        <li>
                                            <a rel="nofollow noopener" class="fs-ftr-ilc" href="https://nhathuoclongchau.com"></a>
                                        </li>
                                        <li>
                                            <a rel="nofollow noopener" class="fs-ftr-ifbe" href="https://fbeauty.vn"></a>
                                        </li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fs-ftbott">
            © 2007 - 2020 Công Ty Cổ Phần Bán Lẻ Kỹ Thuật Số FPT / Địa chỉ: 261 -
            263 Khánh Hội, P5, Q4, TP. Hồ Chí Minh / GPĐKKD số 0311609355 do Sở KHĐT
            TP.HCM cấp ngày 08/03/2012. GP số 47/GP-TTĐT do sở TTTT TP HCM cấp ngày 02/07/2018.
            Điện thoại: (028)73023456. Email: fptshop@fpt.com.vn.
            Chịu trách nhiệm nội dung: Nguyễn Trịnh Nhật Linh.
        </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
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
            <ul class="navbar-nav col-5">
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
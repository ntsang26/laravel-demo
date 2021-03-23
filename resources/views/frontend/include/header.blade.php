<!-- Header -->
<header>
    <div class="topbar">
        <div class="container">
            <div class="topbar-top">
                <a class="call_phone" href="#">
                    <i class="fas fa-phone-alt"></i>
                    <span>0984.36.02.29</span>
                </a>
                <ul>
                    <li>
                        <a href="#">
                            <i class="fas fa-user-circle"></i>
                            Tài khoản
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-shopping-cart"></i>
                            Giỏ hàng <span>(0)</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="nav">
        <a href="/" class="nav-logo">
            <span>BOG </span>Shop<span>.</span>
        </a>
        <ul>
            @foreach ($category as $item)
                <li class="nav-item">
                    <a href="#" class="nav-link">{!!$item->name!!}</a>
                </li>
            @endforeach
        </ul>
        <form class="search-box">
            <input type="text" name="search" placeholder="Tìm kiếm...">
            <input type="submit" class="btnSearch">
        </form>
    </div>
</header>
<!-- End Header -->
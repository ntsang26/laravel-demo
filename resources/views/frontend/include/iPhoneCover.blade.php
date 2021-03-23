<!-- iPhone Cover -->
<section class="mt-5">
    <div class="hot-prd container">
        <div class="prd-header">
            <h1>Ốp iPhone</h1>
        </div>
        <div class="prd-main">
            <div class="container">
                <div class="row">
                    @foreach ($product as $item)
                        @if ($item->category_id === 1)
                            <div class="prd-item">
                                <div class="prd-block">
                                    <div class="prd-img">
                                        <a href="#" class="prd-link">
                                            <picture>
                                                <img src={!!asset("storage/product/".$item->thumbnail)!!} alt="Prd">
                                            </picture>
                                        </a>
                                    </div>
                                    <div class="prd-detail">
                                        <div class="detail-box">
                                            <h3 class="prd-name">
                                                <a href="#">{!!$item->name!!}</a>
                                            </h3>
                                            <div class="prd-price">
                                                <p>{!!number_format($item->price)!!}đ</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="buy-box">
                                        <div class="buy-btn">
                                            <a href="#">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span>Mua nhanh</span>
                                            </a>
                                        </div>
                                        <div class="buy-btn">
                                            <a href="#">
                                                <i class="fas fa-eye"></i>
                                                <span>Xem chi tiết</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End iPhone Cover -->
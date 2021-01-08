<section class="section-box slide-product pb-3">
    <div class="container">
        <div class="prd-sale cate-box bg-white">
            <div class="prd-sale px-3 mb-3">
                <div class="title">Khuyến mãi hot</div>
            </div>
            <div class="prd_sale__product">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($product as $item)
                            <div class="swiper-slide ">
                                <div class="cdt-product product-sale">
                                    <div class="cdt-product__img">
                                        <a href="#">
                                            <span class="" style="color: transparent; display: inline-block; height: 214px;">
                                                <img src="{!!asset("storage/product/".$item->thumbnail)!!}"
                                                    alt="{!!$item->name!!}" title="{!!$item->name!!}" height="214">
                                            </span>
                                        </a>
                                    </div>
                                    <div class="cdt-product__info">
                                        <a href="#" title="{!!$item->name!!}">
                                            <div class="cdt-product__name">{!!$item->name!!}</div>
                                        </a>
                                        <div class="cdt-product__show-price">
                                            <div class="price">{!!number_format($item->price)!!} đ</div>
                                        </div>
                                    </div>
                                    @if ($item->sale_off == 0)
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
                                                    Tặng Loa Bluetooth Tekin L7
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div></div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Add Arrows -->
                    <i class="fas fa-arrow-circle-left"></i>
                    <i class="fas fa-arrow-circle-right"></i>
                </div>
            </div>
        </div>
    </div>
</section>
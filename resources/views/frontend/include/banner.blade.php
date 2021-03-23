<!-- Banner -->
<section>
    <div class="bannerBox">
        <div class="banner">
            <img src="plugin/frontend/img/banner.png" alt="">
        </div>
        <ul class="bannerPrd">
            @foreach ($category as $item)
            <li class="prd-item">
                <a href="#" class="prd-link">
                    <img src={!!asset("storage/category/".$item->thumbnail)!!} alt="">
                    <span>{!!$item->name!!}</span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
<!-- End Banner -->
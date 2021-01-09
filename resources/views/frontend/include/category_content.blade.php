<section class="section-box mb-5">
    <div class="container">
        <div class="cate-box">
            <div class="row-cate bg-white">
                <?php $count = 0; ?>
                @foreach ($category as $item)
                    <?php if($count == 12) break; ?>
                        <div class="col-md-2 col-6 col-border">
                            <a href="#" class="ct-item-a">
                                <div class="cate-item text-center">
                                    <picture class="picture">
                                        <img src="{{asset("storage/category/".$item->thumbnail)}}"
                                            class="img-fluid"
                                            alt="Điện thoại">
                                    </picture>
                                    <div class="cate-item-name">
                                        {!! $item->name !!}
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php $count++; ?>
                @endforeach
            </div>
        </div>
    </div>
</section>
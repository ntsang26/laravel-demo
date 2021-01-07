<section class="section-box mb-5">
    <div class="container">
        <div class="cate-box">
            <div class="row-cate bg-white">
                @foreach ($category as $item)
                    @if ($item->status == 1)
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
                    @else
                        <div></div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
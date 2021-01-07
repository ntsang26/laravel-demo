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
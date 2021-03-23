<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BOG - Shop</title>
        <link rel="stylesheet" href="plugin/frontend/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <link rel="shortcut icon" href="plugin/frontend/img/logo.png" type="image/x-icon">
        <script src="plugin/frontend/js/script.js"></script>
    </head>

<body>

    {{-- <i class="far fa-snowflake"></i> --}}

    @include('frontend.include.header')

    @include('frontend.include.banner')

    @include('frontend.include.hotPrd')
    
    @include('frontend.include.newPrd')

    @include('frontend.include.iPhoneCover')

    @include('frontend.include.screenCover')
    
    @include('frontend.include.airpodCover')  
    
    @include('frontend.include.access')

    @include('frontend.include.footer')

    <span class="to-top">
        <i class="fas fa-long-arrow-alt-left"></i>
        Về đàu trang
    </span>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if($(window).scrollTop() > 300) {
                    $('.to-top').css({
                        "opacity": "1",
                        "pointer-events": "auto"
                    });                   
                } else {
                    $('.to-top').css({
                        "opacity": "0",
                        "pointer-events": "none"
                    });  
                }
            });
            $('.to-top').click(function() {
                $('html').animate({scrollTop: 0}, 800);
            });
        });
    </script>
</body>
</html>
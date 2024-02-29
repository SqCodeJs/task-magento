require(['jquery', 'jquery/ui', 'slick'], function($) {
    $(document).ready(function() {
        $(".banners-wrapper").slick({
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 8000
        });
    });
});

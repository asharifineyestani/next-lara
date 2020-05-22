(function ($) {
    "use strict";
    var NEO = {};

    /*====== Sidenav - Side Navigation Menu ======*/
    NEO.Sidenav = function () {


        $(".app-header").on("click", ".button-open-sidenav", function () {
            $(".app-sidenav").addClass("active");
        });

        $(".app-sidenav").on("click", ".button-close-sidenav", function () {
            $(".app-sidenav").removeClass("active");
        });
    };

    /*====== Owl Carousel ======*/
    NEO.SliderHero1 = function () {
        var rtl = $("body").attr("data-NEO-rtl");
        var slider = $(".carousel-hero-1");
        slider.owlCarousel({
            rtl: rtl,
            nav: true,
            dots: false,
            loop: true,
            autoplay: false,
            autoplayTimeout: 6000,
            smartSpeed: 1200,
            items: 1,
            margin: 0,
            lazyLoad: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        });
    };

    NEO.SliderPosts = function () {
        var rtl = $("body").attr("data-NEO-rtl");
        var slider = $(".carousel-blog-1");
        slider.owlCarousel({
            rtl: rtl,
            nav: false,
            loop: true,
            dots: true,
            items: 3,
            margin: 30,
            responsive: {
                0: {
                    items: 1
                },
                992: {
                    items: 2
                },
                1500: {
                    items: 3
                }
            }
        });
    };

    NEO.SliderServices = function () {
        var rtl = $("body").attr("data-NEO-rtl");
        var slider = $(".carousel-services-1");
        slider.owlCarousel({
            rtl: rtl,
            nav: true,
            loop: false,
            dots: false,
            items: 5,
            margin: 0,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                900: {
                    items: 3
                },
                1200: {
                    items: 4
                },
                1500: {
                    items: 5
                }
            },
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        });
    };

    $(window).on("load", function () {

    });

    $(document).ready(function () {
        NEO.SliderHero1(), NEO.SliderServices(), NEO.SliderPosts(), NEO.Sidenav();
    });

})(jQuery);

(function ($) {
    "use strict";
    
    jQuery(document).ready(function($){
        /**------------------------------
         * wow js init
         -----------------------------**/
        new WOW().init();

        /**------------------------------
         *  Donation amout selection 
         * ---------------------------**/
        $(document).on('click','.donation-amout li',function(){
			var $this = $(this);
            $this.addClass('active').siblings().removeClass('active');
            $this.siblings('.input').removeClass('active');
        });

        /**-------------------------------
        * - magnific popup activation 
        * -----------------------------**/
        $('.video-play-btn,.video-popup').magnificPopup({
            type: 'video'
        });
        $('.imagepopup').magnificPopup({
            type: 'image'
        });

       /*------------------------------------
       -- back to top
       ------------------------------------*/
        $(document).on('click', '.back-to-top', function () {
            $("html,body").animate({
                scrollTop: 0
            }, 2000);
        });


        /**-------------------------
         * testimonial carousel
         *---------------------- **/
        var $testimonialCarousel = $('.testimonial-carousel');
        $testimonialCarousel.owlCarousel({
            loop: true,
            autoplay: true,
            dots: true,
            autoPlayTimeout: 1000,
            margin: 30,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                991: {
                    items: 2
                },
                1200: {
                    items: 3
                },
                1920: {
                    items: 3
                }
            }
        });

        /**----------------------------------
         *  Partner Carousel
         * -------------------------------**/
        var $partnersCarousel = $('.partners-carousel');
        $partnersCarousel.owlCarousel({
            loop: true,
            autoplay: true,
            autoPlayTimeout: 1000,
            margin: 30,
            dots: true,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                530: {
                    items: 2
                },
                768: {
                    items: 2
                },
                991: {
                    items: 3
                },
                1200: {
                    items: 5
                },
                1920: {
                    items: 5
                }
            }
        });

        /**------------------------------------
         *  Team Carusel
         * ---------------------------------**/
        var $teamCarousel = $('.team-carousel');
        $teamCarousel.owlCarousel({
            loop: true,
            autoplay: true,
            autoPlayTimeout: 1000,
            margin: 30,
            dots: true,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                430: {
                    items: 1
                },
                768: {
                    items: 2
                },
                991: {
                    items: 2
                },
                1200: {
                    items: 4
                },
                1920: {
                    items: 4
                }
            }
        });

        /**----------------------------------
         * popular campain carousel
         * -------------------------------**/
        var $popularCampainCarousel = $('.popular-campain-carousel');
        $popularCampainCarousel.owlCarousel({
            loop: true,
            autoplay: true,
            autoPlayTimeout: 1000,
            margin: 30,
            dots: true,
            nav: false,
            smartSpeed:2000,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                991: {
                    items: 2
                },
                1200: {
                    items: 3
                },
                1920: {
                    items: 3
                }
            }
        });
        
		/**---------------------------
         *  filterizr enable
         * ------------------------**/
        var $filterizr = $('.filterizr__elements');
        $('.gallery-area').imagesLoaded(function(){
            if ($filterizr.length) {
                    $filterizr.filterizr();
            }
        });
        
        $(document).on('click','.filterizr__controls li',function(){
            $(this).addClass('active').siblings().removeClass('active');
        });

    });

    
    
    $(window).on('scroll', function () {

        /*----------------------------------
		    back to top show/hide
		----------------------------------*/
        var ScrollTop = $('.back-to-top');
        if ($(window).scrollTop() > 1000) {
            ScrollTop.fadeIn(1000);
        } else {
            ScrollTop.fadeOut(1000);
        }
       

    });
    $(window).on('load',function(){

        /**---------------------------
         *  preloader
         * -------------------------**/
        var preLoder = $("#preloader");
        preLoder.fadeOut(1000);
        var backtoTop = $('.back-to-top')
        backtoTop.fadeOut(100);

    });

}(jQuery));	




$('.owl-carousel').owlCarousel({
    items:5,
    loop:true,
    margin:10,
    merge:true,
    responsive:{
        678:{
            mergeFit:true
        },
        1000:{
            mergeFit:false
        }
    }
});
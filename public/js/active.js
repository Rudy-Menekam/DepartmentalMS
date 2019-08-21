/*------------------------------------------------------------------------------------
    
      JS INDEX
    =============
    
    01. MAIN-SLIDER JS
    02. COURSE SLIDER JS
    03. CLIENT SAY SLIDER JS
    04. WAYPOINTS JS
    05. ISOTOP JS
    06. GALLERY LIGHBOX JS
    07. ACCORDIAN JS
    08. RESPONSIVE-MENU JS
    09. STICKY JS 

-------------------------------------------------------------------------------------*/

(function ($) {
	"use strict";

    jQuery(document).ready(function($){
        
        
        /* 01. MAIN-SLIDER JS */
        
        $(".edulab-slide").owlCarousel({
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            items: 1,
            nav: true,
            dots: false,
            autoplay: true,
            loop: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            mouseDrag: false,
            touchDrag: false
        });
        
        $(".edulab-slide").on("translate.owl.carousel", function(){
            $(".edulab-main-slide h2, .edulab-main-slide p").removeClass("animated fadeInUp").css("opacity", "0");
            $(".edulab-main-slide .edulab-btn").removeClass("animated fadeInDown").css("opacity", "0");
        });
        
        $(".edulab-slide").on("translated.owl.carousel", function(){
            $(".edulab-main-slide h2, .edulab-main-slide p").addClass("animated fadeInUp").css("opacity", "1");
            $(".edulab-main-slide .edulab-btn").addClass("animated fadeInDown").css("opacity", "1");
        });

        
        /* 02. COURSE SLIDER JS */
        
        $(".courses-slider").owlCarousel({
            center:false,
            autoplay:true,
            loop:true,
            autoplaySpeed:1200,
            autoplayTimeout:11000,
            margin:30,
            touchDrag:false,
            mouseDrag:true,
            dots: false,
            nav:true,
            navText: ["<i class='fa fa-angle-left'></i>",
                  "<i class='fa fa-angle-right'></i>"],
            responsive:{
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1200: {
                    items: 3
                }
            }
        });
        
        
      /* 03. CLIENT SAY SLIDER JS */
        
        $('.client-say').owlCarousel({
            center: true,
            autoplay:true,
            loop:true,
            touchDrag:false,
            mouseDrag:false,
            autoplaySpeed:1200,
            autoplayTimeout:11000,
            dots:true,
            responsive:{
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });
        
         /* 04. WAYPOINTS JS */
        
        $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        
        
        /* 05. ISOTOP JS */
        
        $(".gallery-items").isotope({
            itemSelector: '.single-gallery',
            layoutMode: 'fitRows',
        });

        $('.gallery-filter li').click(function(){
            $(".gallery-filter li").removeClass("active");
            $(this).addClass("active");

            var selector = $(this).attr('data-filter');
            $(".gallery-items").isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false,
                }
            });
            return false;
        });
        
        
        /* 06. GALLERY LIGHBOX JS */
        
        $(".gallery-lightbox").magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            },
             zoom: {
                    enabled: true, 
                    duration: 300, 
                    easing: 'ease-in-out',
                    opener: function (openerElement) {
                        
                        return openerElement.is('img') ? openerElement : openerElement.find('img');
                    }
                }
        });
        
        
         /* 07. ACCORDIAN JS */
        
        $('.accordion').on('shown.bs.collapse', function (e) {
            $(e.target).parent().addClass('active_acc');
            $(e.target).prev().find('.switch').removeClass('fa-plus');
            $(e.target).prev().find('.switch').addClass('fa-minus');
        });
        $('.accordion').on('hidden.bs.collapse', function (e) {
            $(e.target).parent().removeClass('active_acc');
            $(e.target).prev().find('.switch').addClass('fa-plus');
            $(e.target).prev().find('.switch').removeClass('fa-minus');
        });
        
        
        /* 08. RESPONSIVE-MENU JS */
        
        $("ul#edulab_navigation").slicknav({
            prependTo: ".edulab-responsive-menu"
        });

        /* 09. STICKY JS */
        
        var stickyTop = $(".sticky").offset().top;
        $(window).scroll(function() {
            var windowTop = $(window).scrollTop();
            if (windowTop > stickyTop) {
                $(".sticky").addClass("stuck fadeInDown animated");
            } else {
                $(".sticky").removeClass("stuck fadeInDown animated");
            }
        });
        
        
        
    });
}(jQuery));	

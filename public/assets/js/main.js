/*global $, jQuery, console, alert, prompt */
$(window).on('load', function() {
    // Animate loader off screen
    $(".se-pre-con,.pre-loader").delay(500).fadeOut("slow");
    /* new WOW().init({
        mobile: false,
        live: true
    }); */
});
$(document).ready(function() {
    "use strict";
    // Public Elemnts
    // new WOW().init();

    $('[placeholder]').focus(function() { // Placeholder
        $(this).attr('data-place', $(this).attr('placeholder'));
        $(this).attr('placeholder', '');
    }).blur(function() {
        $(this).attr('placeholder', $(this).attr('data-place'));
    });


    // search box
    $(document).on('click', '.search-btn', function(e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $('.header-search').slideToggle();
    });
    // sidemenu
    $('#openMenu').click(function(e) {
        e.preventDefault();
        $('.side-menu').css("right", 0).css("opacity", 1);
        $('.side-overlay').fadeIn();
        $('body, html').css("overflow-y", "hidden");
        $('.side-overlay, #closeMenu').click(function() {
            $('.side-menu').css("right", "-900px").css("opacity", 0);
            $('.side-overlay').fadeOut();
            $('body, html').css("overflow-y", "auto");
        });
    });
    $(document).on('click', '.profile-toggle', function(e) {
        e.preventDefault();
        $('.profile-sidebar').slideToggle();
    });






    /*-----------------------------------
     * FIXED  MENU - HEADER
     *-----------------------------------*/
    function menuscroll() {
        // var $navmenu = $('.nav-menu');
        var $navmenu = $('.header_bottom,.account_header');
        if ($(window).scrollTop() > 50) {
            $navmenu.addClass('is-scrolling');
        } else {
            $navmenu.removeClass("is-scrolling");
        }
    }
    menuscroll();
    $(window).on('scroll', function() {
        menuscroll();
    });
    /*-----------------------------------
     * ONE PAGE SCROLLING
     *-----------------------------------*/
    // Select all links with hashes
    // add custom :     .not('[data-toggle="collapse"]').not('[data-toggle="collapse"]')
    $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').not('[data-toggle="pill"]').not('[data-toggle="tab"]').not('[data-toggle="collapse"]').not('[data-toggle="modal"]').on('click', function(event) {
        // On-page links
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 60
                }, 1000, function() {
                    // Callback after animation
                    // Must change focus!
                    // var $target = $(target);
                    // $target.focus();
                    // if ($target.is(":focus")) { // Checking if the target was focused
                    //     return false;
                    // } else {
                    //     $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                    //     $target.focus(); // Set focus again
                    // };
                });
            }
        }
    });

    // scroll-up
    $(document).on('click', "#move-to-top", function() {
        $('html, body').animate({
            scrollTop: 0
        }, 1500);
    });

    // $('body').scrollspy({ target: '#main_menu' });


    // sliders
    $('.news-imgs-slider').owlCarousel({
        // center: true,
        items: 1,
        loop: true,
        rtl: true,
        nav: true,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: false,
        autoplay: false,
        navSpeed: 200,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin: 0,
        smartSpeed: 450,
        dotsContainer: '#news-img-titles',
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1,
            },
            // breakpoint from 480 up
            480: {
                items: 1,
            },
            // breakpoint from 768 up
            768: {
                items: 1,
            },
            // breakpoint from 768 up
            992: {
                items: 1,
            }
        }
    });
    $(document).on('click', '#news-img-titles .s-item-title', function() {
        $('.news-imgs-slider.owl-carousel').trigger('to.owl.carousel', [$(this).index(), 300]);
    });
    /*******************************/

    /*******************************/
    // main-news-slider
    /*******************************/
    $('.main-news-slider').owlCarousel({
        // center: true,
        items: 1,
        loop: true,
        rtl: true,
        nav: true,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: false,
        autoplay: false,
        navSpeed: 200,
        autoplaySpeed: 1500,
        // animateOut: 'fadeOut',
        // animateIn: 'fadeIn',
        margin: 0,
        smartSpeed: 450,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1,
            },
            // breakpoint from 480 up
            480: {
                items: 1,
            },
            // breakpoint from 768 up
            768: {
                items: 1,
            },
            // breakpoint from 768 up
            992: {
                items: 1,
            }
        }
    });

    $('.ads-slider').owlCarousel({
        items: 1,
        loop: true,
        rtl: true,
        nav: true,
        navText: ["", ""],
        dots: false,
        autoplay: true,
        navSpeed: 200,
        autoplaySpeed: 1500,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        margin: 0,
        smartSpeed: 450,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1,
            },
            // breakpoint from 480 up
            480: {
                items: 1,
            },
            // breakpoint from 768 up
            768: {
                items: 1,
            },
            // breakpoint from 768 up
            992: {
                items: 1,
            }
        }
    });
    /*******************************/

    /*******************************/
    // news-slider-3
    /*******************************/
    $('.news-slider-3').owlCarousel({
        // center: true,
        // items: 1,
        loop: true,
        rtl: true,
        nav: true,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: false,
        autoplay: false,
        navSpeed: 200,
        autoplaySpeed: 1500,
        margin: 3,
        smartSpeed: 4050,
        autoWidth: true,
        items: 4,
        slideBy: 3,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1,
            },
            // breakpoint from 480 up
            480: {
                items: 2,
            },
            // breakpoint from 768 up
            768: {
                items: 2,
            },
            // breakpoint from 768 up
            992: {
                items: 4,
            }
        }
    });
    $(window).on('resize', function(e) {
        if ($(window).outerWidth() <= 991) {
            recalcCarouselWidth($('.news-slider-3'));
        }
    }).resize();
    // $('.owl-carousel').on('refreshed.owl.carousel', function(event) {
    //      if($(window).outerWidth() <= 800){
    //        recalcCarouselWidth($('.news-slider-3'));
    //     }
    // });
    // $('.owl-carousel').on('onResize.owl.carousel', function(event) {
    //     if($(window).outerWidth() <= 800){
    //        recalcCarouselWidth($('.news-slider-3'));
    //     }
    // });

    function recalcCarouselWidth(carousel) {
        var $stage = carousel.find('.owl-stage'),
            stageW = $stage.width(),
            $el = carousel.find('.owl-item .item img'),
            elW = 0;
        $el.each(function() {
            elW += $(this)[0].getBoundingClientRect().width;
            console.log(elW, Math.ceil($(this)[0].getBoundingClientRect().width));
            $(this).closest('.item').css("width", Math.ceil($(this)[0].getBoundingClientRect().width));
        });
        if (elW > stageW) {
            console.log('elW maggiore di stageW: ' + elW + ' > ' + stageW);
            $stage.width(Math.ceil(elW));
        }
    }

    /*******************************/

    /*******************************/
    // news-videos-slider
    /*******************************/
    $('.news-videos-slider').owlCarousel({
        // center: true,
        loop: true,
        rtl: true,
        nav: true,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: false,
        autoplay: false,
        navSpeed: 200,
        autoplaySpeed: 1000,
        margin: 3,
        smartSpeed: 450,
        slideBy: 3,
        items: 3,
        video: true,
        lazyLoad: true,
        responsive: {
            // breakpoint from 0 up
            0: {
                slideBy: 1,
                items: 1,
            },
            // breakpoint from 480 up
            480: {
                slideBy: 1,
                items: 2,

            },
            // breakpoint from 480 up
            576: {
                slideBy: 1,
                items: 2.5,
            },
            // breakpoint from 768 up
            768: {
                slideBy: 2,
                items: 3,
            },
            // breakpoint from 768 up
            992: {
                slideBy: 2,
                items: 3.2,
            },
            // breakpoint from 1200 up
            1200: {
                slideBy: 3,
                items: 4.2,
            }
        }
    });
    /*******************************/

    /*******************************/
    // albums-slider
    /*******************************/
    $('.albums-slider').owlCarousel({
        // center: true,
        loop: true,
        rtl: true,
        nav: true,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: false,
        autoplay: false,
        navSpeed: 200,
        autoplaySpeed: 1000,
        margin: 0,
        smartSpeed: 450,
        items: 2,
        lazyLoad: true,
        responsive: {
            // breakpoint from 0 up
            0: {
                slideBy: 1,
                items: 1,
            },
            // breakpoint from 480 up
            480: {
                slideBy: 2,
                items: 2,
            },
            // breakpoint from 768 up
            768: {
                slideBy: 2,
                items: 2,
            },
            // breakpoint from 768 up
            992: {
                slideBy: 2,
                items: 2,
            }
        }
    });
    /*******************************/

    /*******************************/
    // news-slider-5
    /*******************************/
    $('.news-slider-5').owlCarousel({
        // center: true,
        loop: true,
        rtl: true,
        nav: true,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: false,
        autoplay: false,
        navSpeed: 200,
        autoplaySpeed: 1000,
        margin: 4,
        smartSpeed: 450,
        items: 5,
        lazyLoad: true,
        responsive: {
            // breakpoint from 0 up
            0: {
                slideBy: 1,
                items: 1.2,
            },
            // breakpoint from 480 up
            480: {
                slideBy: 2,
                items: 2,
            },
            // breakpoint from 480 up
            576: {
                slideBy: 2,
                items: 2.3,
            },
            // breakpoint from 768 up
            768: {
                slideBy: 2,
                items: 2.5,
            },
            // breakpoint from 768 up
            992: {
                slideBy: 2,
                items: 2,
            },
            // breakpoint from 768 up
            1200: {
                slideBy: 2,
                items: 3,
            }
        }
    });
    /*******************************/

    /*******************************/
    // news-slider-6
    /*******************************/
    $('.news-slider-6').owlCarousel({
        // center: true,
        loop: true,
        rtl: true,
        nav: true,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: false,
        autoplay: false,
        navSpeed: 200,
        autoplaySpeed: 1000,
        margin: 4,
        smartSpeed: 450,
        items: 5,
        lazyLoad: true,
        responsive: {
            // breakpoint from 0 up
            0: {
                slideBy: 1,
                items: 1,
            },
            // breakpoint from 480 up
            480: {
                slideBy: 2,
                items: 2,
            },
            // breakpoint from 480 up
            576: {
                slideBy: 2,
                items: 2.3,
            },
            // breakpoint from 768 up
            768: {
                slideBy: 3,
                items: 3,
            },
            // breakpoint from 768 up
            992: {
                slideBy: 3,
                items: 4,
            },
            // breakpoint from 768 up
            1200: {
                slideBy: 4,
                items: 5,
            }
        }
    });
    /*******************************/

    /*******************************/
    // news-slider-7
    /*******************************/
    $('.news-slider-7').owlCarousel({
        // center: true,
        loop: true,
        rtl: true,
        nav: true,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: false,
        autoplay: false,
        navSpeed: 200,
        autoplaySpeed: 1000,
        margin: 10,
        smartSpeed: 450,
        items: 3,
        lazyLoad: true,
        responsive: {
            // breakpoint from 0 up
            0: {
                slideBy: 1,
                items: 1.2,
            },
            // breakpoint from 480 up
            480: {
                slideBy: 2,
                items: 2,
            },
            // breakpoint from 480 up
            576: {
                slideBy: 2,
                items: 2.3,
            },
            // breakpoint from 768 up
            768: {
                slideBy: 2,
                items: 2.5,
            },
            // breakpoint from 768 up
            992: {
                slideBy: 2,
                items: 3.2,
            },
            // breakpoint from 768 up
            1200: {
                slideBy: 3,
                items: 4.2,
            }
        }
    });
    /*******************************/

    /*******************************/
    // news-slider-8
    /*******************************/
    $('.news-slider-8').owlCarousel({
        // center: true,
        loop: true,
        rtl: true,
        nav: true,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: false,
        autoplay: false,
        navSpeed: 200,
        autoplaySpeed: 1500,
        margin: 20,
        smartSpeed: 450,
        items: 2.5,
        lazyLoad: true,
        responsive: {
            // breakpoint from 0 up
            0: {
                slideBy: 1,
                items: 1,
            },
            // breakpoint from 480 up
            480: {
                slideBy: 1,
                items: 1.2,
            },
            // breakpoint from 480 up
            576: {
                slideBy: 1,
                items: 1.2,
            },
            // breakpoint from 768 up
            768: {
                slideBy: 2,
                items: 1.5,
            },
            // breakpoint from 768 up
            992: {
                slideBy: 2,
                items: 2.1,
            },
            // breakpoint from 768 up
            1200: {
                slideBy: 2,
                items: 2.5,
            }
        }
    });
    /*******************************/

    /*******************************/
    // news-slider-9
    /*******************************/
    $('.news-slider-9').owlCarousel({
        // center: true,
        loop: true,
        rtl: true,
        nav: true,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: false,
        autoplay: false,
        navSpeed: 200,
        autoplaySpeed: 1000,
        margin: 0,
        smartSpeed: 450,
        items: 3,
        lazyLoad: true,
        responsive: {
            // breakpoint from 0 up
            0: {
                slideBy: 1,
                items: 1.2,
            },
            // breakpoint from 480 up
            480: {
                slideBy: 2,
                items: 2,
            },
            // breakpoint from 480 up
            576: {
                slideBy: 2,
                items: 2.3,
            },
            // breakpoint from 768 up
            768: {
                slideBy: 2,
                items: 2.5,
            },
            // breakpoint from 768 up
            992: {
                slideBy: 2,
                items: 3.1,
            }
        }
    });
    /*******************************/

    /*******************************/
    // news-slider-10
    /*******************************/
    $('.news-slider-10').owlCarousel({
        // center: true,
        loop: true,
        rtl: true,
        nav: true,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: false,
        autoplay: false,
        navSpeed: 200,
        autoplaySpeed: 1000,
        margin: 25,
        smartSpeed: 450,
        items: 4,
        lazyLoad: true,
        responsive: {
            // breakpoint from 0 up
            0: {
                slideBy: 1,
                items: 1.2,
                margin: 10,
            },
            // breakpoint from 480 up
            480: {
                slideBy: 2,
                items: 2,
                margin: 15,
            },
            // breakpoint from 480 up
            576: {
                slideBy: 2,
                items: 2.5,
                margin: 15,
            },
            // breakpoint from 768 up
            768: {
                slideBy: 2,
                items: 3,
                margin: 15,
            },
            // breakpoint from 992 up
            992: {
                slideBy: 2,
                items: 3.8,
                margin: 15,
            },
            // breakpoint from 1200 up
            1200: {
                slideBy: 3,
                items: 4.8,
            }
        }
    });
    /*******************************/




    $('.modal').on('shown.bs.modal', function() {
        $('body').addClass('modal-open');
    })

    /*******************************/
    // share-sec
    /*******************************/
    $(document).on('click', '.share-sec > .btn', function(e) {
        e.preventDefault();
        $(this).parent().toggleClass('m-open');
    });
    /*******************************/





    $('.post-inner').owlCarousel({
        // center: true,
        loop: true,
        rtl: true,
        nav: true,
        navText: ["<i class='fas fa-chevron-right' title='Prev'></i>", "<i class='fas fa-chevron-left' title='Next'></i>"],
        dots: false,
        autoplay: false,
        navSpeed: 200,
        autoplaySpeed: 1000,
        margin: 10,
        smartSpeed: 450,
        items: 20,
        lazyLoad: true,
        responsive: {
            // breakpoint from 0 up
            0: {
                slideBy: 1,
                items: 1.2,
            },
            // breakpoint from 480 up
            480: {
                slideBy: 2,
                items: 2,
            },
            // breakpoint from 480 up
            576: {
                slideBy: 2,
                items: 2.3,
            },
            // breakpoint from 768 up
            768: {
                slideBy: 2,
                items: 2.5,
            },
            // breakpoint from 768 up
            992: {
                slideBy: 2,
                items: 3.2,
            },
            // breakpoint from 768 up
            1200: {
                slideBy: 6,
                items: 6.2,
            }
        }
    });
});
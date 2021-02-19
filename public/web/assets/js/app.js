/*global $, jQuery, alert*/
jQuery(function ($) {
    'use strict';

    // aos
    AOS.init();

    $("#main-slider").owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        rtl: true,
        nav: false,
        loop: true,
        items: 1,
        dots: false,
        animateOut: 'fadeOut'
    });

    $(".offer-slider").owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        rtl: true,
        nav: false,
        loop: true,
        items: 1,
        dots: false,
        animateOut: 'fadeOut'
    });

    // doctors
    $("#doctors-slider").owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        navText: ["<img src='assets/images/left.png'>", "<img src='assets/images/right.png'>"],
        dots: false,
        rtl: true,
        nav: true,
        loop: true,
        margin: 24,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2

            },
            992: {
                items: 3
            },
            1199: {
                items: 4
            }
        }
    });

    // testimonials
    $("#testimonials-slider").owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        rtl: true,
        nav: false,
        dots: false,
        loop: true,
        items: 1,
        animateOut: 'flipOutX',
        animateIn: 'flipInX',
        stagePadding: 20,
        margin: 40,
        smartSpeed: 450
    });


});
$(document).ready(function () {

    // screen refresh
    var windowWidth = $(window).width();
    $(window).resize(function () {
        if (windowWidth != $(window).width()) {
            location.reload();
            return;
        }
    });

    // wrapper
    $('main.wrapper').css({ 'min-height': ($(window).height() - $('#copyright').height()) });

    // carousel banner
    $('.carousel-banner .carousel-item').height($(window).height());

    // all about navbar
    $(window).scroll(function() {
        if ($(window).scrollTop()) {
            $('.navbar').addClass('on-scroll');
        } else {
            $('.navbar').removeClass('on-scroll');            
        }
    });

    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            $('.navbar').removeClass('scroll');
        } else {
            $('.navbar').addClass('scroll');
        }
        prevScrollpos = currentScrollPos;
    }

});
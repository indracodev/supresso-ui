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

});
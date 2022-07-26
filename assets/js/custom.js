$(document).ready(function () {

    // ===================================== screen refresh
    var windowWidth = $(window).width();
    $(window).resize(function () {
        if (windowWidth != $(window).width()) {
            location.reload();
            return;
        }
    });


    // ===================================== wrapper
    $('main.wrapper').css({ 'min-height': ($(window).height() - $('#copyright').height()) });


    // ===================================== carousel banner
    $('.carousel-banner .carousel-item').height($(window).height());


    // ===================================== all about navbar
    if ($('.carousel').hasClass('carousel-light')) {
        $('.navbar').addClass('navbar-dark');
    } else {
        $('.navbar').addClass('navbar-light');
    }

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

    if ($(window).width() <= 991.98) {
        $('#navcol1').on('show.bs.collapse', function() {
            $('.navbar').addClass('open-menu');
            $('#notifikasiNewsletter').collapse('hide');
            $('html').addClass('no-scroll');
        });

        $('#navcol1').on('hide.bs.collapse', function() {
            $('.navbar').removeClass('open-menu');
            $('#notifikasiNewsletter').collapse('show');
            $('html').removeClass('no-scroll');
        });

        $('#navcol1 .navbar-nav').height($(window).height() - ($('.navbar-brand').height() + $('#navcol1 form.d-lg-none').height()));

        $('#navcol2 .col').height($(window).height() - $('.navbar-brand').height());

        $('#navcol2').collapse('show');

        // klik navbar menu
        $('#nav-coffee').click(function() {
            $('#navbar-coffee').addClass('active');
        });
        $('#navbar-coffee .btn-back').click(function() {
            $('#navbar-coffee').removeClass('active');
        });

        $('#nav-beans').click(function() {
            $('#navbar-beans').addClass('active');
        });
        $('#navbar-beans .btn-back').click(function() {
            $('#navbar-beans').removeClass('active');
        });

        $('#nav-ground').click(function() {
            $('#navbar-ground').addClass('active');
        });
        $('#navbar-ground .btn-back').click(function() {
            $('#navbar-ground').removeClass('active');
        });

        $('#nav-drip').click(function() {
            $('#navbar-drip').addClass('active');
        });
        $('#navbar-drip .btn-back').click(function() {
            $('#navbar-drip').removeClass('active');
        });

        $('#nav-capsules').click(function() {
            $('#navbar-capsules').addClass('active');
        });
        $('#navbar-capsules .btn-back').click(function() {
            $('#navbar-capsules').removeClass('active');
        });

    }/*end responsive navbar mobile*/

    else if ($(window).width() >= 992) {
        $('#nav-coffee').mouseenter(function() {
            $('#navcol2').collapse('show');
            $('html').addClass('no-scroll');
        });

        $('.navbar').mouseleave(function() {
            $('#navcol2').collapse('hide');
            $('html').removeClass('no-scroll');
        });

        $('#navcol2').on('show.bs.collapse', function() {
            $('.navbar').addClass('open-menu');  
        });

        $('#navcol2').on('hide.bs.collapse', function() {
            $('.navbar').removeClass('open-menu');  
        });
    }/*end responsive navbar desktop*/

    // ===================================== auto select form control
    $('.form-control').hover(function() {
        $(this).select();
    });

    // ===================================== active first item on carousel
    $('.carousel-inner .carousel-item:first-of-type').addClass('active');

});

// ===================================== fungsi slider produk

let items = document.querySelectorAll('.slider-produk .carousel-item')

items.forEach((el) => {
    const minPerSlide = 5
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            next = items[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
});
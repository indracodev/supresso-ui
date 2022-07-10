$(document).ready(function() {

	// ----------- refresh layar
	if ($(window).width() <= 767.98) {
		var windowWidth = $(window).width();
		$(window).resize(function() {
			if(windowWidth != $(window).width() <= 767.98 ) {
				location.reload();
				return;
			}
		});
	} else if ($(window).width() >= 768) {
		var windowWidth = $(window).width();
		$(window).resize(function() {
			if(windowWidth != $(window).width() >= 768 ) {
				location.reload();
				return;
			}
		});
	} else if ($(window).width() >= 1200) {
		var windowWidth = $(window).width();
		$(window).resize(function() {
			if(windowWidth != $(window).width() >= 1200 ) {
				location.reload();
				return;
			}
		});
	}

	// ----------- all about navbar
	var prevScrollpos = window.pageYOffset;
	window.onscroll = function() {
		var currentScrollPos = window.pageYOffset;
		if (prevScrollpos > currentScrollPos) {
			document.getElementById('main-header').style.transform = 'translateY(0)';
			$('html').removeClass('scroll');
		} else {
			document.getElementById('main-header').style.transform = 'translateY(calc(-100% + 1px))';
			$('html').addClass('scroll');
		}
		prevScrollpos = currentScrollPos;
	}

	if ($(window).width() <= 991.98) {

		$('#nav-coffee-mobile').click(function() {
			$('#submenu-coffee').addClass('active');
		});
		$('#submenu-coffee header .btn').click(function() {
			$('#submenu-coffee').removeClass('active');
		});

		$('#nav-beans').click(function() {
			$('#submenu-beans').addClass('active');
		});
		$('#submenu-beans header .btn').click(function() {
			$('#submenu-beans').removeClass('active');
		});

		$('#nav-ground').click(function() {
			$('#submenu-ground').addClass('active');
		});
		$('#submenu-ground header .btn').click(function() {
			$('#submenu-ground').removeClass('active');
		});

		$('#nav-drip').click(function() {
			$('#submenu-drip').addClass('active');
		});
		$('#submenu-drip header .btn').click(function() {
			$('#submenu-drip').removeClass('active');
		});

		$('#nav-capsules').click(function() {
			$('#submenu-capsules').addClass('active');
		});
		$('#submenu-capsules header .btn').click(function() {
			$('#submenu-capsules').removeClass('active');
		});

		$('.navbar-toggler').click(function() {
			$('.submenu').removeClass('active');

			if ($('.navbar-toggler').hasClass('collapsed')) {
				$('html').addClass('no-scroll');
				$('.navbar-dark').addClass('menu-open');
			} else {
				$('html').removeClass('no-scroll');
				$('.navbar-dark').removeClass('menu-open');
			}
		});

	} else if ($(window).width() >= 992) {

		$('#nav-coffee-desktop').click(function() {
			if ($('#navcol1').hasClass('show')) {
				$('html').removeClass('no-scroll');
				$('.navbar-dark').removeClass('menu-open');
			} else {
				$('html').addClass('no-scroll');
				$('.navbar-dark').addClass('menu-open');
			}
		});

	}

	$(window).scroll(function() {
		if ($(window).scrollTop()) {
			$('.navbar.navbar-dark').addClass('invert');
			$('#navtop').addClass('to-top');
		} else {
			$('.navbar.navbar-dark').removeClass('invert');
			$('#navtop').removeClass('to-top');
		}
	});

	$(window).ready(function() {
		if ($('.navbar').hasClass('navbar-dark')) {
			$('.carousel-banner').addClass('bg-navbar');
		} else if ($('.navbar').hasClass('navbar-light')) {
			$('.carousel-banner').removeClass('bg-navbar');
		}
	});

	// ----------- all about carousel
	$('.carousel-banner .carousel-item').height($(window).height());

});
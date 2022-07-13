$(document).ready(function () {

	// =================================== refresh layar
	var windowWidth = $(window).width();
	$(window).resize(function () {
		if (windowWidth != $(window).width()) {
			location.reload();
			return;
		}
	});

	

	// =================================== struktur
	$('main.wrapper').css({ 'min-height': ($(window).height() - $('#copyright').height()) });



	// =================================== carousel
	$('.carousel-banner .carousel-caption').css({'margin-top': ($('.notification-bar').height())});

	if ($('.carousel').hasClass('carousel-banner')) {
		$('.navbar').addClass('navbar-dark');
	} else {
		$('.navbar').addClass('navbar-light');
	}

	

	// =================================== all about navbar
	
	var prevScrollpos = window.pageYOffset;
	window.onscroll = function () {
		var currentScrollPos = window.pageYOffset;
		if (prevScrollpos > currentScrollPos) {
			document.getElementById('navbar').style.transform = 'translateY(0)';
			$('html').removeClass('scroll');
		} else {
			document.getElementById('navbar').style.transform = 'translateY(-100%)';
			$('html').addClass('scroll');
		}
		prevScrollpos = currentScrollPos;
	}

	$(window).scroll(function() {
		if ($(window).scrollTop() >= 100) {
			$('html').addClass('on-scroll');
		} else {
			$('html').removeClass('on-scroll');
		}
	});

	$('#navbar').css({'top': ($('.notification-bar').height())});

	if ($(window).width() <= 991.98) {
		
		$('.navbar-toggler').click(function() {
			if ($('#navcol-1').hasClass('show')) {
				$('.navbar').removeClass('open-toggler');
				$('html').removeClass('no-scroll');
			} else {
				$('.navbar').addClass('open-toggler');
				$('html').addClass('no-scroll');
			}
		});

		$('#navtop .navbar-collapse .navbar-nav, #navdown .col .navbar-nav').css({'height': ($(window).height() - '113')});

		$('#nav-coffee-m').click(function () {
			$('#navbar-coffee').addClass('show');
		});
		$('#navbar-coffee header .btn').click(function () {
			$('#navbar-coffee').removeClass('show');
		});

		$('#nav-beans').click(function () {
			$('#navbar-beans').addClass('show');
		});
		$('#navbar-beans header .btn').click(function () {
			$('#navbar-beans').removeClass('show');
		});

		$('#nav-ground').click(function () {
			$('#navbar-ground').addClass('show');
		});
		$('#navbar-ground header .btn').click(function () {
			$('#navbar-ground').removeClass('show');
		});

		$('#nav-drip').click(function () {
			$('#navbar-drip').addClass('show');
		});
		$('#navbar-drip header .btn').click(function () {
			$('#navbar-drip').removeClass('show');
		});

		$('#nav-capsules').click(function () {
			$('#navbar-capsules').addClass('show');
		});
		$('#navbar-capsules header .btn').click(function () {
			$('#navbar-capsules').removeClass('show');
		});

		$('.navbar-toggler').click(function () {
			$('#navdown .col').removeClass('show');
		});

	} /*end of navbar mobile*/

	else if ($(window).width() >= 992) {

		$('#navcol-2').removeClass('show');

		$('#nav-coffee-d').mouseenter(function() {
			$('#navcol-2').slideDown('fast');
			$(this).addClass('active');
			$('.navbar-dark').addClass('open-toggler');
			$('html').addClass('no-scroll');
		});

		$('#navbar').mouseleave(function() {
			$('#navcol-2').slideUp('fast');
			$('#nav-coffee-d').removeClass('active');
			$('.navbar-dark').removeClass('open-toggler');
			$('html').removeClass('no-scroll');
		});

	} /*end of navbar desktop*/

	

	// =================================== all about carousel
	$('.carousel-banner .carousel-item').height($(window).height());

});
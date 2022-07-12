$(document).ready(function() {

	// refresh layar
	var windowWidth = $(window).width();
	$(window).resize(function() {
		if(windowWidth != $(window).width()) {
			location.reload();
			return;
		}
	});

	// struktur
	$('.wrapper').css({ 'padding-top': ($('.navbar').height()) });

	// all about navbar
	var prevScrollpos = window.pageYOffset;
	window.onscroll = function() {
		var currentScrollPos = window.pageYOffset;
		if (prevScrollpos > currentScrollPos) {
			document.getElementById('navbar').style.transform = 'translateY(0)';
			$('html').removeClass('scroll');
		} else {
			document.getElementById('navbar').style.transform = 'translateY(calc(-100% + 1px))';
			$('html').addClass('scroll');
		}
		prevScrollpos = currentScrollPos;
	}

	if ($(window).width() <= 991.98) {
		$('#nav-coffee-m').click(function() {
			$('#navbar-coffee').addClass('show');
		});
		$('#navbar-coffee header .btn').click(function() {
			$('#navbar-coffee').removeClass('show');
		});

		$('#nav-beans').click(function() {
			$('#navbar-beans').addClass('show');
		});
		$('#navbar-beans header .btn').click(function() {
			$('#navbar-beans').removeClass('show');
		});

		$('#nav-ground').click(function() {
			$('#navbar-ground').addClass('show');
		});
		$('#navbar-ground header .btn').click(function() {
			$('#navbar-ground').removeClass('show');
		});

		$('#nav-drip').click(function() {
			$('#navbar-drip').addClass('show');
		});
		$('#navbar-drip header .btn').click(function() {
			$('#navbar-drip').removeClass('show');
		});

		$('#nav-capsules').click(function() {
			$('#navbar-capsules').addClass('show');
		});
		$('#navbar-capsules header .btn').click(function() {
			$('#navbar-capsules').removeClass('show');
		});

		$('.navbar-toggler').click(function() {
			$('#navdown .col').removeClass('show');
		});
	}

	// all about carousel
	$('.carousel-banner .carousel-item').height($(window).height());

});
$(document).ready(function() {

	$('#tombol-filter').click(function() {
		if ($('#procol1').hasClass('show')) {
			$('#products-filter header .hasil-filter').slideDown();
		} else {
			$('#products-filter header .hasil-filter').slideUp();
		}
	});
});
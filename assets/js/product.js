$(document).ready(function() {

	$('#tombol-filter').click(function() {
		if ($('#procol1').hasClass('show')) {
			$('#products-filter header .hasil-filter').show();
		} else {
			$('#products-filter header .hasil-filter').hide();
		}
	});
});
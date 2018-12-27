$(function () {
	

	var minTop = $('#page-header-top').outerHeight();

	$(window).scroll(function() {
		// var topVal = $(this).scrollTop();
		$('#global-nav').toggleClass('fixed', $(this).scrollTop()>=minTop);
	});
});

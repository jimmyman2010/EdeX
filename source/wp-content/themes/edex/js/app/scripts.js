(function ($, root, undefined) {
	$(function () {
		'use strict';
		// DOM ready, take it away
		// Set this variable with the desired height
		var navbar = $('.navbar-move'),
			body = $('body');
		var offsetPixels = navbar.offset().top;
		if($(window).width() > 768) {
			offsetPixels += 60;
		}

		$(window).on('load scroll', function() {
			if ($(window).scrollTop() > offsetPixels) {
				navbar.addClass('fixed');
				body.addClass('navbar-fixed');
			} else {
				navbar.removeClass('fixed');
				body.removeClass('navbar-fixed');
			}
		});
	});
})(jQuery, this);

if (typeof jQuery === 'undefined') {
	throw new Error('jQuery required');
}
+function ($) {
	'use strict';
	var version = $.fn.jquery.split(' ')[0].split('.')
	if ((version[0] < 2 && version[1] < 9) || (version[0] == 1 && version[1] == 9 && version[2] < 1) || (version[0] > 2)) {
		throw new Error('jQuery version 1.9.1 or higher is required. Lower than version 3 is required.');
	}
}(jQuery);

// @codekit-append "bootstrap/dropdown.js"
// @codekit-append "bootstrap/modal.js"
// @codekit-append "bootstrap/tooltip.js"
// @codekit-append "bootstrap/transition.js"
// @codekit-append "bootstrap/popover.js"
// @codekit-append "bootstrap/collapse.js"

$(function(){
	$(".form__select").dropkick({
		mobile: true
	});
	$('.admin-tools').on('click', '#toggle-admin-tools', function(e) {
		e.preventDefault();
		$('.admin-tools').toggleClass('in');
		if ($(this).text() == 'Show'){
			$(this).text('Hide');
			$('.wrapper, .new__wrapper').attr('style', 'margin-bottom: ' + $('.admin-tools').height() + 'px');
		} else {
			$(this).text('Show');
			$('.wrapper, .new__wrapper').attr('style', '');
		}
	});
})
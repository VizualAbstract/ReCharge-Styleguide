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

// @codekit-append "bootstrap/modal_rc.js"
// @codekit-append "bootstrap/transition_rc.js"

$(function(){
});
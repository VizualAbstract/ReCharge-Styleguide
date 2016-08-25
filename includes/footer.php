	
				</div><!-- .styleguide__page -->
			</div><!-- .styleguide__content -->
		</span><!-- .new -->
		<script>
			$(function() {
				$('.table--stacked').each(function(i) {
					var thead_th = $(this).find('thead th');
					var tbody_tr = $(this).find('tbody tr');
					$(tbody_tr).each(function(e) {
						var column = $(this).find('td')
						$(column).each(function(c) {
							$(this).attr('data-label', $(thead_th[c]).text());
						});
					});
				});
			});
		</script>
		<script>
			$(function() {
				$('.rc_toggle-list').on('change', '.switch__input', function(e) {
					var status = $(this).prop('checked');
					var list_item = $(this).parents('.rc_toggle-list__item');
					if (status === true) {
						list_item.removeClass('disabled');
					} else {
						list_item.addClass('disabled');
					}
				});
			});
		</script>
		<script>
			$(function(){
				// Generate the code samples
				$('.rc_sg__example').each(function(i) {
					var __this = $(this);
					var html = __this.html();
					// Replace special characters with unicode characters
					var encodedHtml = html.replace(/[\u00A0-\u9999<>\&]/gim, function(i) {
							return '&#' + i.charCodeAt(0) + ';';
						});
					__this
						.after('<figure class="rc_sg__figure"><pre><code class="rc_sg__code">' + encodedHtml + '</code></pre></figure>')
						.after('<div class="rc_sg__see_code">See Code</div>')
				});
				// Add a handy see-code toggle to keep the layout clean
				$(document).on('click', '.rc_sg__see_code', function(){
					var text = $(this).text();
					if (text == 'See Code'){
						text = 'Hide Code';
						$(this).next().show();
					} else {
						text = 'See Code';
						$(this).next().hide();
					}
					$(this).text(text);
				});
			});
		</script>
		<script>
			$(function(){
				// Initialize dropkick.js on select fields
				$("select.form__select, select.form__number").dropkick({
					mobile: true
				});
			});
		</script>
		<script>
			$(function(){
				$('.form__color').each(function(i){
					var color = $(this).val();
					var name = $(this).attr('name');
					$(this).after('<input type="color" value="' + color + '" name="' + name + '" class="form__color__picker">');
				});
				// When someone types a hex code into the text input, try to render an appropriate color. Named colors, hex, rgb, HSL
				$(document).on('keyup', '.form__color', function() {
					var color_picker = $(this).attr('id');
					var color = $(this).val();
					$('input[name="' + color_picker + '"]').spectrum('set', color);
				});
				// When someone clicks or focuses on the color input, show the color picker
				$(document).on('focus, click', '.form__color', function() {
					var color_picker = $(this).attr('id');
					$('input[name="' + color_picker + '"]').spectrum('show');
				});
				// When a person clicks outside of the text input, read the value and try to show the relative hex code
				$(document).on('blur', '.form__color', function() {
					var color_picker = $(this).attr('id');
					var color = $('input[name="' + color_picker + '"]').spectrum('get', color);
					$(this).val(color);
				});
				// Initializes the spectrum color picker
				$('.form__color__picker').spectrum({
					showInitial: false,
					showInput: false,
					checkoutFiresChange: true,
					showButtons: false,
					showPalette: false,
					preferredFormat: "hex",
					move: function(color) {
						// When a color is chosen, update the associated text input field
						var color_picker = $(this).attr('name');
						$('#' + color_picker).val(color);
					}
				});
			});
		</script>
		<script>
			$(function() {
				// Tooltip code
				$('.tooltip-button').rc_tooltip().on('mouseenter', function(){
					$(this).rc_tooltip('show').addClass('tooltip-button--active');
				}).on('mouseleave', function(){
					$(this).rc_tooltip('hide').removeClass('tooltip-button--active');
				});
			});
		</script>
		<script>
			$(function() {
				// Revised popover code
				$('.popover-button').rc_popover({ // Initialize the popover
					trigger: 'manual',
					html: true,
					animation: false
				}).on('mouseenter', function() { // hover on icon
					$(this).rc_popover('show'); // show popup box
					$(this).addClass('popover-button--hover');
					$(this).addClass('popover-button--active');
					$('.popover-box').on('mouseenter', function(){
						$(this).addClass('popover-box--hover');
					}).on('mouseleave', function(){
						$(this).removeClass('popover-box--hover');
					});
				}).on('mouseleave', function() {
					$(this).removeClass('popover-button--hover');
					var __this = $(this);
					setTimeout(function(){
						if ($('.popover-box').hasClass('popover-box--hover')) { // is mouse on popup box?
							// yes, do nothing
						} else { 
							// no, hide popup box
							__this.rc_popover('hide');
							__this.removeClass('popover-button--active');
						}
					}, 15);
					$('.popover-box').on('mouseenter', function(){
						$(this).addClass('popover-box--hover');
					}).on('mouseleave', function(){ // hover off popup box
						$(this).removeClass('popover-box--hover');
						setTimeout(function(){
							if ($('.popover-button').hasClass('popover-button--hover')) { // is mouse on popup icon?
								// yes, do nothing
							} else {
								// no, hide popup box
								$('.popover-button').rc_popover('hide');
								$('.popover-button').removeClass('popover-button--active');
							}
						}, 15);
					});
				});
			});
		</script>
		<script>
			$(function() {
				// Generates the menus with target tags for quick linking
				var menu = $('#menu');
				var count = 0;
				$('h2').each(function(i) {
					var link_href = $(this).attr('id');
					var link_text = $(this).text();

					var previous_element = $(this).prev();
					if (previous_element[0].nodeName == 'HR'){
						if (count !== 0) {
							menu.append("<li></li>");
						} else {
							count++;
						}
					}
					if (typeof(link_href) !== 'undefined' && typeof(link_text) !== 'undefined'){
						if (link_href.length > 0 && link_text.length > 0){
							var link = "<li><a href=\"#" + link_href + "\">" + link_text + "</a></li>";
							menu.append(link);
						}
					}
				});
			});
		</script>
	</body>
</html>
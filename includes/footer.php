	
				</div><!-- .styleguide__content -->
			</div><!-- .styleguide__page -->
			<script>
				function toggleVariable(value) {
					if (value == 'True') {
						return 'False';
					} else {
						return 'True';
					}
				}
				function activateTrigger(variable, currentURL, value) {
					var cleanURL = currentURL;
					// Turn the URL string into an array
					var urlArray = cleanURL.split('&');
					// Clean the URL, removing the search string, but replacing it with a ?
					var location = window.location.toString().replace(window.location.search, "?");
					// We'll join the completed array into the new url as a string
					var newURL = '';
					var hasParameters = false;
					var parameterFound = false;
					// Iterate through each parameter and value pair
					for (var i = 0; i < urlArray.length; i++) {
						var parameter = urlArray[i];
						var parameterArray = parameter.split('=');
						if (urlArray.length > 0 && urlArray[i] != ""){
							hasParameters = true;
						}
						// Split the parameter and value pair
						for (var z = 0; z < parameterArray.length; z++) {
							// If the variable we want to update == the current parameter...
							if (variable == parameterArray[z]){
								parameterFound = true;
								// ..toggle the value, from True to False, or False to True
								parameterArray[1] = toggleVariable(parameterArray[1]);
								// Re-join the parameter and value in a string
								var newParameterValue = parameterArray.join('=');
								// Replace string segment in old array with new string
								urlArray[i] = newParameterValue;
							}
						}
					}
					// Re-join the entire URL string
					newURL = urlArray.join('&');
					if (parameterFound === true) {
						// Parameter found. Update and reload page
						window.location.href = location + newURL;
					} else {
						// Parameter not found.
						if (hasParameters === true) {
							// If parameters exist, add, with & before
							window.location.href = location + currentURL + '&' + variable + '=' + toggleVariable(value); // toggle variable trigger manually
						} else {
							// If no parameters exist, add, with ? before
							window.location.href = newURL + '?' + variable + '=' + toggleVariable(value); // toggle variable trigger manually
						}
					}
				}

				$(function(){
					$('pre button').on('click', function(e) {
						e.preventDefault();
						var __this = $(this);
						var variable = $(this).data('toggle');
						var value = $(this).text();
						var currentURL = decodeURIComponent(window.location.search.substring(1));
						var isVariableUsed = activateTrigger(variable, currentURL, value);
						// $(this).text(toggleVariable(value));
					});
				});
			</script>
		</div><!-- .container -->
		<script>
			$(function(){
				// Generate the code samples
				$('.example').each(function(i) {
					var __this = $(this);
					var html = __this.html();
					// Replace special characters with unicode characters
					var encodedHtml = html.replace(/[\u00A0-\u9999<>\&]/gim, function(i) {
							return '&#' + i.charCodeAt(0) + ';';
						});
					__this
						.after('<figure><pre><code>' + encodedHtml + '</code></pre></figure>')
						.after('<div class="see-code">See Code</div>')
				});
				// Add a handy see-code toggle to keep the layout clean
				$(document).on('click', '.see-code', function(){
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
				$(".form__select").dropkick({
					mobile: true
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
<div class="rc_notifications rc_notifications--error">
	<div class="rc_notifications__header">
		<div class="rc_notifications__title">Error</div>
		<div class="rc_notifications__close"></div>
	</div><!-- .rc_notifications__header -->
	<div class="rc_notifications__content">
		<ul class="list">
			<li><strong>Discount code</strong> already exists</li>
			<li><strong>Start date</strong> must be formatted as YYY-MM-DD</li>
		</ul><!-- .error-list -->
	</div><!-- .rc_notifications__content -->
</div><!-- .rc_notifications -->

<div class="rc_notifications rc_notifications--warning">
	<div class="rc_notifications__header">
		<div class="rc_notifications__title">Warning</div>
	</div><!-- .rc_notifications__header -->
	<div class="rc_notifications__content">
		<p>Statement about something that needs a warning. This dropdown should timeout.</p>
	</div><!-- .rc_notifications__content -->
</div><!-- .rc_notifications -->

<div class="rc_notifications rc_notifications--success">
	<div class="rc_notifications__header">
		<div class="rc_notifications__title">Success</div>
	</div><!-- .rc_notifications__header -->
	<div class="rc_notifications__content">
		<p>Statement about something that needs a success message. This dropdown should timeout.</p>
	</div><!-- .rc_notifications__content -->
</div><!-- .rc_notifications -->

<br>

<div class="rc_notifications rc_notifications--review">
	<div class="rc_notifications__close"></div>
	<div class="rc_notifications__content" id="rating__unrated">
		<p>How would you rate our app?</p>
		<ul class="rating unrated">
			<li class="rating__star" data-rating="1"></li>
			<li class="rating__star" data-rating="2"></li>
			<li class="rating__star" data-rating="3"></li>
			<li class="rating__star" data-rating="4"></li>
			<li class="rating__star" data-rating="5"></li>
		</ul><!-- .rating -->
	</div><!-- .rc_notifications__content -->
	<div class="rc_notifications__content" id="rating__rated">
		<p>Thanks for the feedback!<span class="rating__positive" style="display: none;"> Please review us on Shopify.</span></p> 
		<a href="//bit.ly/rechargeappreiew" target="_blank" class="button rating__positive" id="write-a-review" style="display: none;">Write a review...</a>
	</div><!-- .rc_notifications__content -->
</div><!-- .rc_notifications -->
<script>
	$(function() {
		// var data = {
		// 	'store_id': get_store_attribute('store_id')
		// 	'review_status': 'asked_for_review'
		// }
		// var url = '/store/review/update';
		// $.ajax({
		// 	type: 'POST',
		// 	url: url,
		// 	data: data,
		// });

		$('.unrated .rating__star').hover(function() {
			var rating = $(this).data('rating');
			for (i = 0; i < rating; i++) {
				var star = $('.unrated .rating__star').eq(i);
				star.addClass('active');
			}
		}, function() {
			var rating = $(this).data('rating');
			$('.unrated .rating__star').removeClass('active');
		});

		$('.rating').on('click', '.rating__star', function(e) {
			e.preventDefault();
			$('.rating').removeClass('unrated').addClass('rated');
			var rating = $(this).data('rating');
			for (i = 0; i < rating; i++) {
				var star = $('.rating .rating__star').eq(i);
				star.addClass('active');
			}
			if (rating >= 4) {
				$('.rating__positive').fadeIn(0);
			}
			$('#rating__unrated').fadeOut(300);
			$('#rating__rated').animate({'opacity': 1}, 400);
			// var data = {
			// 	'store_id': get_store_attribute('store_id'),
			// 	'review_status': 'asked_for_review'
			// }
			// var url = '/store/review/update';
			// $.ajax({
			// 	type: 'POST',
			// 	url: url,
			// 	data: data,
			// });
			setTimeout(function() {
				$('.rc_notifications--review').parents('.rc_notifications').slideToggle();
			}, 6000);
		});

		$(document).on('click', '#write-a-review', function() {
			// Update review_status to ``
			// var data = {
			// 	'store_id': get_store_attribute('store_id')
			// 	'review_status': 'left_review'
			// }
			// var url = '/store/review/update';
			// $.ajax({
			// 	type: 'POST',
			// 	url: url,
			// 	data: data,
			// });
		});
	});
</script>
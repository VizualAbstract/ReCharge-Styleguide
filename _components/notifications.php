<div class="rc_notifications rc_notifications--error">
	<div class="rc_notifications__container">
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
	</div><!-- .rc_layout__container -->
</div><!-- .rc_notifications -->

<div class="rc_notifications rc_notifications--warning">
	<div class="rc_notifications__container">
		<div class="rc_notifications__header">
			<div class="rc_notifications__title">Warning</div>
		</div><!-- .rc_notifications__header -->
		<div class="rc_notifications__content">
			<p>Statement about something that needs a warning. This dropdown should timeout.</p>
		</div><!-- .rc_notifications__content -->
	</div><!-- .rc_notifications__container -->
</div><!-- .rc_notifications -->

<div class="rc_notifications rc_notifications--success">
	<div class="rc_notifications__container">
		<div class="rc_notifications__header">
			<div class="rc_notifications__title">Success</div>
		</div><!-- .rc_notifications__header -->
		<div class="rc_notifications__content">
			<p>Statement about something that needs a success message. This dropdown should timeout.</p>
		</div><!-- .rc_notifications__content -->
	</div><!-- .rc_notifications__container -->
</div><!-- .rc_notifications -->

<div class="rc_notifications rc_notifications--review">
	<div class="rc_notifications__container">
		<div class="rc_notifications__header">
			<div class="rc_notifications__close"></div>
		</div><!-- .rc_notifications__header -->
		<div class="rc_notifications__content">
			<?php /*
			<p>How would you rate our app?</p>
			<span class="review">
				<span class="star">
					<span class="star">
						<span class="star">
							<span class="star">
								<span class="star"></span>
							</span><!-- .star -->
						</span><!-- .star -->
					</span><!-- .star -->
				</span><!-- .star -->
			</span><!-- .review -->
			*/ ?>
			<p>Thanks for the feedback! Please review us on Shopify.</p> <a href="#" class="button">Write a review...</a>
		</div><!-- .rc_notifications__content -->
	</div><!-- .rc_notifications__container -->
</div><!-- .rc_notifications -->
<br>
<div class="rc_notifications rc_notifications--review">
	<div class="rc_notifications__container">
		<div class="rc_notifications__header">
			<div class="rc_notifications__close"></div>
		</div><!-- .rc_notifications__header -->
		<div class="rc_notifications__content">
			<p>How would you rate our app?</p>
			<span class="review">
				<span class="star">
					<span class="star">
						<span class="star">
							<span class="star">
								<span class="star"></span>
							</span><!-- .star -->
						</span><!-- .star -->
					</span><!-- .star -->
				</span><!-- .star -->
			</span><!-- .review -->
			<?php /*
			<p>Thanks for the feedback! Please review us on Shopify.</p> <a href="#" class="button">Write a review...</a>
			*/ ?>
		</div><!-- .rc_notifications__content -->
	</div><!-- .rc_notifications__container -->
</div><!-- .rc_notifications -->
<script>
	$(function() {
		$('.review').on('click', '.star', function(e) {
			e.preventDefault();
			$('.review').removeClass('rated');
			$('.review').addClass('rated');
			$(this).addClass('active');
		});
	});
</script>
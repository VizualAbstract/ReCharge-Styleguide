<ul class="accordion" id="integrations">
<?php for ($i = 1; $i <= 3; $i++) { ?>
	<li class="accordion__header">
		<div class="accordion__media" data-toggle="collapse__menu" data-parent="#integrations" data-target="#google_analytics__<?php echo $i; ?>">
			<img src="assets/images/thumbnail__on.png" alt="Google Analytics logo">
		</div><!-- .accordion__media -->
		<div class="accordion__description">
			<h5 data-toggle="collapse__menu" data-parent="#integrations" data-target="#google_analytics__<?php echo $i; ?>">
				Google Analytics
				<small class="pull--right">Connected</small>
			</h5>
			<p class="rc_text--description">
				Get the data you need for marketing and business decisions.
			</p>
			<!-- <a href="/new/settings/integrations/google-analytics" class="admin-recharge">Edit</a> -->
		</div><!-- .accordion__description -->
	</li><!-- .accordion__header -->
	<li class="accordion__details collapse" id="google_analytics__<?php echo $i; ?>">
		<form id="integrations__google_analytics">
			<div class="form__group">
				<label for="google_analytics_id" class="form__label">Google Analytics ID</label>
				<input type="text" id="google_analytics_id" name="google_analytics_id" value="UX-235o23o-1" class="form__input">
			</div><!-- .form__group -->
			<div class="form__group">
				<label for="google_analytics_type" class="form__label">Google Analytics type</label>
				<select type="text" id="google_analytics_type" name="google_analytics_type" class="form__select">
					<option value="UNIVERSAL">Universal</option>
					<option value="LEGACY">Legacy</option>
				</select>
			</div><!-- .form__group -->
			<button class="button button--primary">Save</button>
			<a href="http://support.rechargepayments.com/article/94-google-analytics" target="_blank" class="button button--link button--primary">Help</a>
			<button class="button button--link button--primary pull-right">Deactivate</button>
		</form><!-- #integrations__google_analytics -->
	</li><!-- .accordion__details .collapse -->
<?php } ?>
</ul><!-- .action-list -->
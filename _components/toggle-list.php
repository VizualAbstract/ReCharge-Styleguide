<ul class="toggle-list">
<?php for ($i = 1; $i <= 5; $i++){ ?>
	<li class="toggle-list__item">
		<div class="toggle-list__item__content">
			<a href="#">Subscription Activation</a>
			<p>Sent to customers when they first sign up for a subscription</p>
		</div><!-- .toggle-list__item__content -->
		<div class="toggle-list__item__action">
			<label class="switch">
				<div class="switch__inner">
					<input class="switch__input" checked type="checkbox">
					<span class="switch__overlay"></span>
					<span class="switch__left">Disabled</span>
					<span class="switch__right">Enabled</span>
				</div><!-- .switch__inner -->
			</label><!-- .switch -->
		</div><!-- .toggle-list__item__action -->
	</li><!-- .toggle-list__item -->
<?php } ?>
</ul><!-- .toggle-list -->
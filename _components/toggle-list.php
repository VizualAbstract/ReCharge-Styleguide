<ul class="action-list">
<?php for ($i = 1; $i <= 5; $i++){ ?>
	<li class="action-list__item">
		<div class="action-list__item__content">
			<a href="#">Subscription Activation</a>
			<p>Sent to customers when they first sign up for a subscription</p>
		</div><!-- .action-list__item__content -->
		<div class="action-list__item__action">
			<label class="switch">
				<div class="switch__inner">
					<input class="switch__input" checked type="checkbox">
					<span class="switch__overlay"></span>
					<span class="switch__left">Disabled</span>
					<span class="switch__right">Enabled</span>
				</div><!-- .switch__inner -->
			</label><!-- .switch -->
		</div><!-- .action-list__item__action -->
	</li><!-- .action-list__item -->
<?php } ?>
</ul><!-- .action-list -->
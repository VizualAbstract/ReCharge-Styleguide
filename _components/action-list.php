
<h3>Basic example</h3>
<ul class="action-list">
<?php for ($i = 1; $i <= 5; $i++){ ?>
	<li class="action-list__item">
		<div class="action-list__item__content">
			List Item Content
		</div><!-- .action-list__item__content -->
		<div class="action-list__item__action">
			<a href="#">Edit</a>
		</div><!-- .action-list__item__action -->
	</li><!-- .action-list__item -->
<?php } ?>
</ul><!-- .action-list -->

<h3>With subscription product media</h3>
<ul class="action-list">
<?php for ($i = 1; $i <= 5; $i++){ ?>
	<li class="action-list__item">
		<div class="action-list__item__content">
			<div class="subscription-product-media">
				<img src="http://placehold.it/<?php echo rand(25, 500) ?>x<?php echo rand(25, 500) ?>" class="product-image">
			</div>
			<a href="#">List Item Content</a>
		</div><!-- .action-list__item__content -->
		<div class="action-list__item__action">
			<a href="#"><span class="fa fa-plus-circle"></span></a>
		</div><!-- .action-list__item__action -->
	</li><!-- .action-list__item -->
<?php } ?>
</ul><!-- .action-list -->

<h3>With switches</h3>
<ul class="action-list">
<?php for ($i = 1; $i <= 3; $i++){ ?>
	<li class="action-list__item">
		<div class="action-list__item__content">
			<a href="#">Subscription Activation</a>
			<p>Sent to customers when they first sign up for a subscription</p>
		</div><!-- .action-list__item__content -->
		<div class="action-list__item__action text--right">
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
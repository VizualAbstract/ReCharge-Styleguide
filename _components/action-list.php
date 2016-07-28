
<h3>Basic Example</h3>
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

<h3>With Subscription Product Media</h3>
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
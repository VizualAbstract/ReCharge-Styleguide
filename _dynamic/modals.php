<button data-toggle="rc_modal__window" data-target="#modal__context_feature_action" class="button">Launch Modal</button>

<div id="modal__context_feature_action" class="rc_modal rc_fade new">
	<div class="rc_modal__dialog">
		<div class="rc_modal__content clearfix">
			<button class="rc_modal__close" data-dismiss="rc_modal__window"></button>
			<h3 class="rc_modal__title">Select a product</h3>
			<p>Click on the product name to preview in a new tab.</p>
			<br>
			<form class="form__search">
				<div class="input-group input-group--full">
					<input type="text" id="product_search" name="product_search" placeholder="Search products" value="" class="form__input" data-com.agilebits.onepassword.user-edited="yes">
					<div class="input-group__addon">
						<button id="submit_product_search" class="button">
							Search
						</button><!-- #submit_product_search .button -->
					</div><!-- .input-group__addon -->
				</div><!-- .input-group -->
			</form><!-- .form__search -->
			<div id="product_search_results">
				<div class="form__search__no-results">
				No search results. Try again.
				</div><!-- .form__search__no-results -->
			</div>
		</div>
		<?php /*
		<div class="rc_modal__content">
			<button class="rc_modal__close" data-dismiss="rc_modal__window"></button>
			<h2 class="rc_modal__title">Modal title</h2>
			<br>
			<p>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
			<br>
			<div class="rc_modal__actions">
				<button class="button button--block" data-dismiss="rc_modal__window">Dismiss Me</button>
				<button id="confirm__context_feature_action" class="button button--block button--primary">Confirm Me</button>
			</div><!-- .rc_modal__actions -->
		</div><!-- .rc_modal__content -->
		*/ ?>
	</div><!-- .rc_modal__dialog -->
</div><!-- #modal__context_feature_action .rc_modal .rc_fade -->
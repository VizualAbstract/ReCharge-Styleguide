<?php include('includes/header.php'); ?>
<h1>Dynamic</h1>
<p>Heavily dependant on javascript to deliver a specific effect.</p>

<hr>

<h2 id="tooltips">Tooltips</h2>
<div class="example">
Tooltip <span class="tooltip-button" 
			data-toggle="rc_tooltip" 
			data-placement="right" 
			title='Tooltip is set via title="attribute"'></span> ...
</div><!-- .example -->

<h2 id="popover">Popover</h2>
<div class="example">
Popover <span class="popover-button" 
			data-toggle="rc_popover" 
			data-placement="right" 
			data-title="Popover" 
			data-content="<p>This is body copy for a tool tip. It can be up to 3 sentences. More than that and no one will read it.</p><p><a href='#'>Go to setup instructions...</a></p>"></span> ...
</div><!-- .example -->

<h2 id="modals">Modals</h2>
<div class="example">
<button data-toggle="modal__window" data-target="#modal__context_feature_action" class="button">Launch Modal</button>

<div id="modal__context_feature_action" class="modal fade">
	<div class="modal__dialog">
		<div class="modal__content">
			<button class="modal__close" data-dismiss="modal__window"></button>
			<h2 class="h2">Modal title</h2>
			<br>
			<p>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
			<br>
			<div class="modal__actions">
				<button class="button button--block" data-dismiss="modal__window">Dismiss Me</button>
				<button id="confirm__context_feature_action" class="button button--block button--primary">Confirm Me</button>
			</div><!-- .modal__actions -->
		</div><!-- .modal__content -->
	</div><!-- .modal__dialog -->
</div><!-- #modal__context_feature_action .modal .fade -->
</div><!-- .example -->

<?php include('includes/footer.php'); ?>
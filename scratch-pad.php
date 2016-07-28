<?php include('includes/header.php'); ?>
<h1>Scratch pad</h1>
<p>Do not rely on the <Strong>Scratch pad</Strong>. This is an environment for working out ideas and ensuring the <a href="/">Pattern library</a> maintains integrity in real-world scenarios. The final code will not only include template logic, but may also include verbiage and placement changes.</p>

<hr>

<h2 id="billing">Billing</h2>
<div class="example">
	<form>
		<fieldset>
			<legend>
				<h2>Admin details</h2>
			</legend>
			<div class="form__group">
				<label for="name">Full name</label>
				<input type="text" name="name" id="name" value="" class="form__input">
			</div><!-- .form__group -->
			<div class="form__group">
				<label for="email">Email</label>
				<input type="text" name="email" id="email" value="" class="form__input">
			</div><!-- .form__group -->
		</fieldset>
		<fieldset>
			<legend>
				<h2>Billing details</h2>
			</legend>
			<div class="form__group">
				<label for="name">Full name on card</label>
				<input type="text" name="name" id="name" data-stripe="name" id="name" value="" class="form__input form__input--invalid">
				<span class="form__error">This field is required</span>
			</div><!-- .form__group -->
			<div class="form__group">
				<label for="number">Card number</label>
				<input type="text" name="number" id="number" data-stripe="number" autocomplete="off" value="" class="form__input">
			</div><!-- .form__group -->
			<div class="form__group">
				<div class="card-details">
					<span class="card-details__date">
						<label for="exp-month" class="card-details__label">Expiration Month/Year</label>
						<span class="card-details__date__month">
							<input type="text" name="exp-month" id="exp-month" data-stripe="exp-month" placeholder="MM" value="" class="form__input form__input--invalid">
							<span class="form__error">This field is required</span>
						</span><!-- .card-details__date__month -->
						<span class="card-details__date__divider">
							/
						</span><!-- .card-details__date__divider -->
						<span class="card-details__date__year">
							<input type="text" name="exp-year" id="exp-year" data-stripe="exp-year" placeholder="YYYY" value="" class="form__input form__input--invalid">
							<span class="form__error">This field is required</span>
						</span><!-- .card-details__date__year-->
					</span>
					<span class="card-details__security">
						<label for="cvc" class="card-details__label">CSV</label>
						<span class="card-details__security__csv">
							<input type="text" name="cvc" id="cvc" autocomplete="off" value="" class="form__input">
						</span><!-- .card-details__security__csv -->
					</span><!-- .card-details__security -->
					<span class="card-details__cards text--right">
						<img src="assets/images/credit-cards_mastercard.svg" alt="Master Card icon" class="card-details__icon">
						<img src="assets/images/credit-cards_visa.svg" alt="Visa Card icon" class="card-details__icon">
						<img src="assets/images/credit-cards_amex.svg" alt="American Express Card icon" class="card-details__icon">
					</span><!-- .card-details__cards -->
				</div><!-- .credit-card -->
			</div><!-- .form__group -->
			<div class="form__group">
				<label for="address_line1">Street address</label>
				<input type="text" name="address_line1" id="address_line1" data-stripe="address_line1" value="" class="form__input">
			</div><!-- .form__group -->
			<div class="form__group">
				<label for="address_line2">Address 2</label>
				<input type="text" name="address_line2" id="address_line2" data-stripe="address_line2" value="" class="form__input">
			</div><!-- .form__group -->
			<div class="layout">
				<div class="grid__sm__6">
					<div class="form__group">
						<label for="address_city">City</label>
						<input type="text" name="address_city" id="address_city" data-stripe="address_city" value="" class="form__input">
					</div><!-- .form__group -->
				</div><!-- .grid__sm__6 -->
				<div class="grid__sm__6">
					<div class="form__group">
						<label for="address_state">State/Province</label>
						<input type="text" name="address_state" id="address_state" data-stripe="address_state" value="" class="form__input">
					</div><!-- .form__group -->
				</div><!-- .grid__sm__6 -->
			</div><!-- .layout -->
			<div class="layout">
				<div class="grid__sm__6">
					<div class="form__group">
						<label for="address_zip">Zip code</label>
						<input type="text" name="address_zip" id="address_zip"  data-stripe="address_zip" value="" class="form__input">
					</div><!-- .form__group -->
				</div><!-- .grid__sm__6 -->
				<div class="grid__sm__6">
					<div class="form__group">
						<label for="address_country">Country</label>
						<select name="address_country" id="address_country" data-stripe="address_country" class="form__select">
							<option value="US">United States</option>
						</select>
					</div><!-- .form__group -->
				</div><!-- .grid__sm__6 -->
			</div><!-- .layout -->
			<div class="form__group">
				<button id="save_billing_details" class="button button--large button--disabled button--block">Create a ReCharge account</button>
			</div><!-- .form__group -->
			<p class="text--center">By clicking "Install ReCharge and begin setup" you agree to the <a href="#">terms of service</a></p>
		</fieldset>
	</form>
</div><!-- .example -->

<h2 id="signup-questions">Signup Questions</h2>
<div class="example">
	<div class="header">
		<h1 class="header__title">Sign up</h1>
		<div class="header__description">30-day free trial</div>
	</div><!-- .header -->
	<fieldset>
		<legend>
			<h2>Store details</h2>
		</legend>
		<div class="form__group">
			<label for="">What type of products are your customers subscribing to?</label>
			<select class="form__select">
				<option value="">Please choose one...</option>
			</select><!-- .form__select -->
		</div><!-- .form__group -->
		<div class="form__group">
			<label for="">What type of products are your customers subscribing to?</label>
			<select class="form__select">
				<option value="">Please choose one...</option>
			</select><!-- .form__select -->
		</div><!-- .form__group -->
		<div class="form__group">
			<label for="">What type of products are your customers subscribing to?</label>
			<select class="form__select">
				<option value="">Please choose one...</option>
			</select><!-- .form__select -->
		</div><!-- .form__group -->
	</fieldset>
</div><!-- .example -->

<h2 id="incompatible-theme-and-storefront-password">Incompatible Theme &amp; Storefront Password</h2>
<div class="example">
	<fieldset>
		<legend>
			<h2>Installation requirements</h2>
			<p>We've noticed that your store is using an unsupported theme. Please add your storefront password so that we can complete a manual install of ReCharge.</p>
		</legend>
		<div class="form__group">
			<label for="">
				Storefront password
				<span class="tooltip-button" data-toggle="rc_tooltip" data-placement="right" title="" data-original-title=""></span>
			</label>
			<input id="" name="" type="password" value="" placeholder="Storefront password" class="form__input">
		</div><!-- .form__group -->
	</fieldset>
</div><!-- .example -->

<h2 id="unsupported-theme">Unsupported Theme</h2>
<div class="example">
	<fieldset>
		<legend>
			<h2>Installation alert</h2>
			<p>We’ve noticed that your store is using an unsupported theme.  Please note this will take 1 business day. </p>
		</legend>
		<div class="form__group">
			<label for="storefront_password" class="form__label">Provide your storefront password</label>
			<input type="password" id="storefront_password" name="storefront_password" class="form__input" placeholder="Storefront password" value="">
		</div><!-- .form__group -->
		<div class="form__group">
			<button id="setup_recharge" class="button button--primary button--large button--block">Create a ReCharge account</button>
		</div><!-- .form__group -->
		<p class="align--center">By clicking "Install ReCharge and begin setup" you agree to the <a href="http://rechargepayments.com/terms-of-service" target="_blank">terms of service</a></p>
	</fieldset>
</div><!-- .example -->

<h2 id="bold-removal-with-storefront-password">Bold removal with storefront password</h2>
<div class="example">
	<fieldset>
		<legend>
			<h2>Installation requirements</h2>
			<p>We've noticed that another recurring billing app is installed on your site that conflicts with ReCharge. Select the option for authorization to complete your account setup.</p>
		</legend>
		<div class="form__group">
			<input type="radio" id="authorize_conflict_removal" name="authorize_action">
			<label for="authorize_conflict_removal">Authorize uninstall of your current payments system</label>
			
			<input id="authorize_preview_installation" type="radio" name="authorize_action">
			<label for="authorize_preview_installation">Keep current recurring billing app installed and authorize the setup of a development environment to preview ReCharge</label>
		</div><!-- .form__group -->
		<h5>Steps for creating a development environment</h5>
		<br>
		<div class="form__group">
			<label for="">1. Grant ReCharge admin access to your storefront.</label>
			<p class="form__placeholder"><a href="#">Shopify staff admin account instructions</a></p>
		</div><!-- .form__group -->
		<div class="form__group">
			<label for="">
				2. Provide your storefront password
				<span class="tooltip-button" data-toggle="rc_tooltip" data-placement="right" title="" data-original-title=""></span>
			</label>
			<input id="" name="" type="password" value="" placeholder="Storefront password" class="form__input">
		</div><!-- .form__group -->
	</fieldset>
</div>

<h2 id="bold-removal-v2">Bold removal v2</h2>
<div class="example">
	<fieldset>
		<legend>
			<h2>Installation conflict</h2>
			<p>We've noticed that another recurring billing app is installed on your store. We need your permission to uninstall the other app. Please note this will take 1 business day.</p>
		</legend>
		<div class="form__group">
			<input type="checkbox" id="uninstall_bold_v2" name="uninstall_bold_v2" value="uninstall_bold">
			<label for="uninstall_bold_v2" class="form__label">Yes, uninstall the current app and install ReCharge</label>
		</div><!-- .form__group -->
		<div class="form__group">
			<button id="setup_recharge" class="button button--primary button--large button--block" disabled>Install ReCharge and begin setup</button>
		</div><!-- .form__group -->
		<p class="align--center">By clicking "Install ReCharge and begin setup" you agree to the <a href="http://rechargepayments.com/terms-of-service" target="_blank">terms of service</a></p>
	</fieldset>
</div><!-- .example -->

<h2 id="bold-removal-v3">Bold removal v3</h2>
<div class="example">
	<fieldset>
		<legend>
			<h2>Installation conflict</h2>
			<p>We’ve noticed that another recurring billing app is installed on your store. We need your permission to uninstall the other app. Please note this will take 1 business day.</p>
		</legend>
		<div class="form__group">
			<label for="" class="form__label">Would you like to proceed with ReCharge?</label>
			<select id="" name="" class="form__select">
				<option>Please choose one...</option>
				<option value="True">Yes, uninstall the current app and install ReCharge</option>
				<option value="False">Not yet, I'd like to compare ReCharge to my current solution</option>
			</select><!-- .form__select -->
		</div><!-- .form__group -->
		<div class="form__group">
			<input type="checkbox" id="uninstall_bold_v3" name="uninstall_bold_v3" class="form__input" value="uninstall_bold">
			<label for="uninstall_bold_v3" class="form__label">Allow ReCharge to uninstall conflicting code from current recurring app</label>
		</div><!-- .form__group -->
		<div class="form__group">
			<button id="setup_recharge" class="button button--primary button--large button--block" disabled>Install ReCharge and begin setup</button>
		</div><!-- .form__group -->
		<p class="align--center">By clicking "Install ReCharge and begin setup" you agree to the <a href="http://rechargepayments.com/terms-of-service" target="_blank">terms of service</a></p>
	</fieldset>
</div><!-- .example -->

<h2 id="bold-removal-v3-compare-solutions">Bold removal v3 - Compare Solutions</h2>
<div class="example">
	<fieldset>
		<legend>
			<h2>Installation conflict</h2>
			<p>We’ve noticed that another recurring billing app is installed on your store. We need your permission to uninstall the other app. Please note this will take 1 business day.</p>
		</legend>
		<div class="form__group">
			<label for="uninstall_bold_v3-compare_solutions" class="form__label">Would you like to proceed with ReCharge?</label>
			<select id="uninstall_bold_v3-compare_solutions" name="uninstall_bold_v3" class="form__select">
				<option>Please choose one...</option>
				<option value="True">Yes, uninstall the current app and install ReCharge</option>
				<option value="False" selected>Not yet, I'd like to compare ReCharge to my current solution</option>
			</select><!-- .form__select -->
		</div><!-- .form__group -->
	</fieldset>
	
	<legend>
		<p>Our support team would be happy to help you in comparing solutions. To complete this request please complete the following steps:</p>
		<p>
			<ol>
				<li>Grant store admin access. <a href="#">Go to instructions...</a></li>
				<li>Send an email with a request to setup a duplicate theme using ReCharge.</li>
			</ol>
		</p>
	</legend>
	<fieldset>
		<div class="form__group">
			<label for="" class="form__label">Your email</label>
			<input type="text" class="form__input" name="email" id="email" placeholder="">
		</div><!-- .form__group -->
		<div class="form__group">
			<label for="" class="form__label">Subject</label>
			<input type="text" class="form__input" name="subject" id="subject" placeholder="Create duplicate theme" value="Create duplicate theme">
		</div><!-- .form__group -->
		<div class="form__group">
			<label for="" class="form__label">Message</label>
			<textarea class="form__input" placeholder="I'd like to compare ReCharge to my current solution.">I'd like to compare ReCharge to my current solution.</textarea><!-- .form__input -->
		</div><!-- .form__group -->
		<div class="form__group">
			<button id="setup_recharge" class="button button--primary button--large button--block">Send request and begin setup</button>
		</div><!-- .form__group -->
		<p class="align--center">By clicking "Install ReCharge and begin setup" you agree to the <a href="http://rechargepayments.com/terms-of-service" target="_blank">terms of service</a></p>
	</fieldset>
</div><!-- .example -->

<h2 id="subscription-modals">Subscription Modals</h2>
<div class="example" style="background-color: rgba(0, 0, 0, .7);">
	<div class="modal fade in" id="modal" style="position: relative; display: block;">
		<div class="modal__dialog">
			<div class="modal__content">
				<h2 class="h2">Delete subscription ruleset</h2>
				<br>
				<p>Are you sure you want to delete this subscription ruleset?</p>
				<br>
				<div class="modal__actions">
					<button class="button button--block button--large" data-dismiss="modal__window">Cancel</button>
					<button class="button button--block button--large button--primary" data-dismiss="modal__window">Okay</button>
				</div><!-- .modal__actions -->
			</div><!-- .modal__content -->
		</div><!-- .modal__dialog -->
	</div><!-- .modal .fade -->
	<div class="modal fade in" id="modal" style="position: relative; display: block;">
		<div class="modal__dialog">
			<div class="modal__content">
				<h2 class="h2">Subscription ruleset can not be saved</h2>
				<br>
				<p>Update the required rules in your subscription ruleset before you save.</p>
				<br>
				<button class="button button--block button--large button--primary" data-dismiss="modal__window">Okay</button>
			</div><!-- .modal__content -->
		</div><!-- .modal__dialog -->
	</div><!-- .modal .fade -->
</div>

<h2 id="subscription-forms">Subscription Forms</h2>
<div class="example">
<legend>
	<strong>Discount for subscribers</strong>
</legend>
<div class="form__group">
	<input type="checkbox" name="no_discount" id="no_discount" value="no_discount" class="form__input">
	<label for="no_discount" class="form__label">no discount</label>
</div><!-- .form__group -->
<div class="form__group">
	<input type="checkbox" name="enable_discount" id="enable_discount" value="enable_discount">
	<input type="text" placeholder="10" value="14" class="form__input">
	%
</div><!-- .form__group -->
<legend>
	<strong>Frequency</strong>
</legend>
<div class="form__group">
	<label for="shipment_frequency_interval_unit" class="form__label">Shipment frequency <span class="popover-button" data-title="One time &amp; subscription" data-content="<p>One or two sentences explaining<br>this option. Keep it simple.</p>"></span>
	<input type="text" id="shipment_frequency_interval_unit" name="shipment_frequency_interval_unit" placeholder="1" value="1" class="form__input">
	<select class="form__select">
		<option value="days">every day</option>
		<option value="weeks">every week</option>
		<option value="months" selected>every month</option>
	</select>
</div><!-- .form__group -->
<div class="form__group">
	<label for="charge_frequency_interval_unit" class="form__label">
		Charge frequency
		<span class="popover-button" data-title="Charge frequency" data-content="<p>One or two sentences explaining<br>this option. Keep it simple.</p>"></span>
	</label>
	<input type="text" name="charge_frequency_interval_unit" id="charge_frequency_interval_unit" placeholder="1" value="1" class="form__input">
	month
</div><!-- .form__group -->
<div class="form__group">
	<button class="button button--link button--primary button--alt"><span class="fa fa-plus-circle"></span> Add a shipping interval</button>
</div><!-- .form__group -->
<legend>
	<strong>Advanced rulesets</strong>
</legend>
<div class="form__group">
	<label for="" class="form__label">Charge day</label>
	<select id="" name="" class="form__select">
		<option value="" selected>When they sign up</option>
		<option value="">When they sign up</option>
		<option value="">When they sign up</option>
	</select><!-- .form__select -->
</div><!-- .form__group -->
<div class="form__group">
	<label for="" class="form__label">Charge day</label>
	<select id="" name="" class="form__select">
		<option value="" selected>1</option>
		<option value="">2</option>
		<option value="">3</option>
		<option value="">4</option>
		<option value="">5</option>
	</select><!-- .form__select -->
	of the month
</div><!-- .form__group -->


<div class="control-list__container">
	<ul class="control-list">
		<li class="control-list__item">
			<div class="control-list__item__media">
				<span class="control-list__item__media__wrapper">
					<img src="http://placehold.it/150x150" alt="" class="subscription-list__item__media">
				</span><!-- .control-list__item__media__wrapper -->
			</div><!-- .list__item__media -->
			<div class="control-list__item__title">
				<a href="#">Energy Drink of the Month (1 Month)</a>
			</div>
			<div class="control-list__item__action">
				<a href="#"><span class="fa fa-close"></span></a>
			</div>
		</li><!-- .control-list__item -->
	</ul><!-- .control-list -->
</div>

</div>

<h2 id="recharge-updates">ReCharge Updates</h2>
<div class="example">
<div class="header">
	<h1 class="header__title">
		Recent Updates
	</h1>
</div>
<div class="updates">
<?php for ($i = 1; $i <= 2; $i++){ ?>
	<div class="updates__block">
		<h5>
			Monday, January 5th, 2016
		</h5>
		<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Curabitur blandit tempus porttitor.</p>
		<p>Donec sed odio dui. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel <a href="#">augue laoreet rutrum</a> faucibus dolor auctor. <code>Maecenas</code> sed diam eget risus varius blandit sit amet non magna. Sed posuere consectetur est at <strong>lobortis</strong>. Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra augue.</p>
		<p>Cum sociis natoque <code>penatibus et magnis dis</code> parturient montes, nascetur ridiculus mus. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Dolor sit amet, <a href="#">consectetur</a> adipiscing elit. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
<pre>
Nulla vitae elit libero, a pharetra augue. 
Nulla vitae elit libero, a pharetra augue. 
Nullam id dolor id nibh ultricies vehicula ut id elit. 
Vestibulum id ligula porta felis euismod semper. 
Cras mattis consectetur purus sit amet fermentum. 
Curabitur blandit tempus porttitor.
</pre>
		<ul>
			<li>Cras mattis <em>consectetur</em></li>
			<li>Purus <strong>sit amet</strong> fermentum</li>
			<li>Aenean lacinia <strong>bibendum nulla</strong> sed consectetur</li>
			<li>Mollis Dolor Aenean Fermentum Cras</li>
			<li>
				<strong>Integer posuere erat a ante</strong>
				<ul>
					<li>Venenatis dapibus posuere velit aliquet.</li>
					<li><b>Curabitur</b> blandit tempus <em>porttitor</em>. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</li>
					<li>Cras mattis <i>consectetur</i> purus sit amet fermentum.</li>
					<li>Maecenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod semper.</li>
				</ul>
			</li>
		</ul>
		<hr>
		<ol>
			<li>Cras mattis consectetur</li>
			<li>Purus sit amet fermentum</li>
			<li>Aenean lacinia bibendum nulla sed consectetur</li>
			<li>Mollis Dolor Aenean Fermentum Cras</li>
			<li>
				<strong>Integer posuere erat a ante</strong>
				<ol>
					<li>venenatis dapibus posuere velit aliquet.</li>
					<li>Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</li>
					<li>Cras mattis consectetur purus sit amet fermentum.</li>
					<li>Maecenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod semper.</li>
				</ol>
			</li>
		</ol>
	</div><!-- .updates__block -->
<?php } ?>
</div><!-- .updates -->
</div>

<?php include('includes/footer.php'); ?>
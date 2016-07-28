<?php include('includes/header.php'); ?>

<h1>Pattern library</h1>
<h5>Missing something?</h5>
<p>The Pattern Library is in a state of transition. It's become steadily complex, so it's being expanded on a day-to-day basis. The <strong>Library</strong> contains all brand standards, components and snippets. <strong>Scratch Pad</strong> will contain examples of code found throughout the application.</p>

<p>You can view the ongoing status of this page <a href="https://docs.google.com/spreadsheets/d/1J-UcLAgN9eChuWUqMxEUObY6dlxIRZFL5eN2zrT4g18/edit?usp=sharing" target="_blank">here</a>.</p>
<hr>

<h2 id="header">Header</h2>
<div class="example">
	<div class="header">
		<h1 class="header__title">This is a page title</h1>
		<div class="header__description">This is a page title catpion</div>
	</div><!-- .header -->
</div><!-- .example -->

<h2 id="title-info">Title Info</h2>
<div class="example">
	<h1>This is an H1 with a div.title-info
		<div class="title-info pull-right">
			<a href="#">This is a Title Link</a>
		</div><!-- .title-info .pull-right -->
	</h1>
	<h3>This is an H3 with a div.title-info
		<div class="title-info pull-right">
			<a href="#">This is a Title Link</a>
		</div><!-- .title-info .pull-right -->
	</h3>
	<legend>This is a legend tag with a div.title-info
		<div class="title-info pull-right">
			<a href="#">This is a Title Link</a>
		</div><!-- .title-info .pull-right -->
	</legend>
</div>

<h2 id="tooltips">Tooltips</h2>
<div class="example">
	Tooltip <span class="tooltip-button" 
				data-toggle="rc_tooltip" 
				data-placement="right" 
				title='Tooltip is set via title="attribute"'></span> ...
</div><!-- .example -->

<h2 id="tooltips">Popover</h2>
<div class="example">
	Popover <span class="popover-button" 
				data-toggle="rc_popover" 
				data-placement="right" 
				data-title="Popover" 
				data-content="<p>This is body copy for a tool tip. It can be up to 3 sentences. More than that and no one will read it.</p><p><a href='#'>Go to setup instructions...</a></p>"></span> ...
</div><!-- .example -->

<h2 id="footer">Footer</h2>
<div class="example">
	<div class="footer">
		<div class="footer__container">
			<ul class="footer__links list list--inline">
			</ul>
		</div><!-- .footer__container -->
	</div><!-- .footer -->
</div><!-- .example -->

<h2 id="buttons">Buttons</h2>
<div class="description">
	<p>The <code>.button</code> class will render links, input[type="submit"] and buttons in the same fashion. Use  <code>.button--primary</code>, <code>.button--secondary</code>, <code>.button--danger</code>, <code>.button--disabled</code> to stylize further.</p>
</div><!-- .description -->
<div class="example">
	<a href="#" class="button">Button</a>
	<input type="submit" class="button" value="Button">
	<button class="button">Button</button>
	<hr>
	<button class="button button--secondary">Default</button>
	<button class="button button--primary">Primary</button>
	<button class="button button--secondary">Secondary</button>
	<button class="button button--danger">Danger</button>
	<button class="button button--disabled">Disabled</button>
</div><!-- .example -->

<h3 id="button-links">Button Links</h3>
<div class="example">
	<p>
		<a href="#" class="button button--link">Button</a>
	</p>
	<p>
		<input type="submit" class="button button--link" value="Button">
	</p>
	<p>
		<button class="button button--link">Button</button>
	</p>
	<p>
		<button class="button button--default button--link">Default</button>
	</p>
	<p>
		<button class="button button--primary button--link">Primary</button>
	</p>
	<p>
		<button class="button button--secondary button--link">Secondary</button>
	</p>
	<p>
		<button class="button button--danger button--link">Danger</button>
	</p>
	<p>
		<button class="button button--disabled button--link">Disabled</button>
	</p>
</div><!-- .example -->

<h3 id="large-buttons">Large Buttons</h3>
<div class="example">
	<p>
		<a href="#" class="button button--large">Large Button</a>
	</p>
	<p>
		<input type="submit" class="button button--large button--primary" value="Large Button">
	</p>
	<p>
		<button class="button button--large button--disabled">Large Button</button>
	</p>
</div><!-- .example -->

<h3 id="button-blocks">Block Buttons</h3>
<div class="example">
	<a href="#" class="button button--block">Large Block Button</a>

	<input type="submit" class="button button--block button--primary" value="Large Block Button">

	<button class="button button--block button--disabled">Large Block Button</button>
</div><!-- .example -->

<h2 id="switches">Switches</h2>
<div class="example">
	<label class="switch">
		<div class="switch__inner">
			<input class="switch__input" type="checkbox">
			<span class="switch__overlay"></span>
			<span class="switch__left">Off</span>
			<span class="switch__right">On</span>
		</div><!-- .switch__inner -->
	</label><!-- .switch -->
	<br>
	<label class="switch">
		<div class="switch__inner">
			<input class="switch__input" type="checkbox" checked="checked">
			<span class="switch__overlay"></span>
			<span class="switch__left">Off</span>
			<span class="switch__right">On</span>
		</div><!-- .switch__inner -->
	</label><!-- .switch -->
	<br>
	<label class="switch switch--large">
		<div class="switch__inner">
			<input class="switch__input" type="checkbox">
			<span class="switch__overlay"></span>
			<span class="switch__left">Large Off</span>
			<span class="switch__right">Large On</span>
		</div><!-- .switch__inner -->
	</label><!-- .switch .switch--large -->
</div><!-- .example -->

<h2 id="modals">Modals</h2>
<div class="example">
	<button data-toggle="modal__window" data-target="#modal" class="button">Launch Modal</button>
	<div class="modal fade" id="modal">
		<div class="modal__dialog">
			<div class="modal__content">
				<button class="modal__close" data-dismiss="modal__window"></button>
				<h2 class="h2">Modal title</h2>
				<br>
				<p>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
				<br>
				<div class="modal__actions">
					<button class="button button--block" data-dismiss="modal__window">Dismiss Me</button>
					<button class="button button--block button--primary" data-dismiss="modal__window">Confirm Me</button>
				</div><!-- .modal__actions -->
			</div><!-- .modal__content -->
		</div><!-- .modal__dialog -->
	</div><!-- .modal .fade -->
</div><!-- .example -->

<h2 id="installation-animation">Installation Animation</h2>
<div class="example">
	<div id="installation">
		<div id="step__installation" class="animation__step">
			<h2 class="h1">Configuring your account...</h2>
			<div class="installation__image">
				<div id="installation-animation">
					<img src="assets/images/installation-animation-2.svg" alt="ReCharge Installation Animation">
				</div>
			</div><!-- .installation__image -->
			<p>We are configuring your ReCharge account based on your needs. Once your account is configured, you can start setting up your ReCharge subscriptions and payments.</p>
			<br>
			<button class="button button--large button--primary button--block installation__button" disabled>Configuring...</button>
		</div><!-- #step__installation -->
	</div><!-- #installation -->
</div><!-- .example -->

<h2 id="progress-bar">Progress Bar</h2>
<div class="example">
	<div class="progress">
		<div class="progress__step progress__step--incomplete">
			Setup subscriptions
		</div><!-- .progress__step -->
		<div class="progress__step progress__step--incomplete">
			Setup payments
		</div><!-- .progress__step -->
		<div class="progress__step progress__step--incomplete">
			Launch
		</div><!-- .progress__step -->
	</div><!-- .progress -->
	<br>
	<div class="progress">
		<div class="progress__step progress__step--active">
			Setup subscriptions
		</div><!-- .progress__step -->
		<div class="progress__step progress__step--incomplete">
			Setup payments
		</div><!-- .progress__step -->
		<div class="progress__step progress__step--incomplete">
			Launch
		</div><!-- .progress__step -->
	</div><!-- .progress -->
	<br>
	<div class="progress">
		<div class="progress__step progress__step--complete">
			Setup subscriptions
		</div><!-- .progress__step -->
		<div class="progress__step progress__step--active">
			Setup payments
		</div><!-- .progress__step -->
		<div class="progress__step progress__step--incomplete">
			Launch
		</div><!-- .progress__step -->
	</div><!-- .progress -->
	<br>
	<div class="progress">
		<div class="progress__step progress__step--complete">
			Setup subscriptions
		</div><!-- .progress__step -->
		<div class="progress__step progress__step--complete">
			Setup payments
		</div><!-- .progress__step -->
		<div class="progress__step progress__step--active">
			Launch
		</div><!-- .progress__step -->
	</div><!-- .progress -->
	<br>
	<div class="progress progress--inactive">
		<div class="progress__step progress__step--complete">
			Setup subscriptions
		</div><!-- .progress__step -->
		<div class="progress__step progress__step--complete">
			Setup payments
		</div><!-- .progress__step -->
		<div class="progress__step progress__step--incomplete">
			Launch
		</div><!-- .progress__step -->
	</div><!-- .progress -->
</div><!-- .example -->

<h2 id="continue-bar">Continue Bar</h2>
<div class="example">
	<p>
		<div class="continue">
			<a href="#" class="continue__next">
				Setup payments
				<i class="fa fa fa-arrow-circle-right"></i>
			</a><!-- .continue__next -->
		</div><!-- .continue -->
	</p>
	<p>
		<div class="continue">
			<a href="#" class="continue__previous">
				<i class="fa fa fa-arrow-circle-left"></i>
			</a><!-- .continue__previous -->
			<a href="#" class="continue__next">
				Launch
				<i class="fa fa fa-arrow-circle-right"></i>
			</a><!-- .continue__next -->
		</div><!-- .continue -->
	</p>
	<p>
		<div class="continue">
			<a href="#" class="continue__previous">
				<i class="fa fa fa-arrow-circle-left"></i>
			</a><!-- .continue__previous -->
			<a href="#" class="continue__next">
				Complete setup
				<i class="fa fa fa-arrow-circle-right"></i>
			</a><!-- .continue__next -->
		</div><!-- .continue -->
	</p>
</div><!-- .example -->

<h2 id="form-fields">Form Fields</h2>
<div class="example">
	<fieldset>
		<strong>Text Input</strong>
		<label class="form__label">Input type="text"</label>
		<input type="text" class="form__input" value="">

		<label class="form__label">Input type="text"</label>
		<input type="text" class="form__input" value="" placeholder="Placeholder text">

		<label class="form__label">Input type="text"</label>
		<input type="text" class="form__input" value="Text Input" placeholder="placeholder text">

		<label class="form__label">Input type="text"</label>
		<input type="text" class="form__input form__input--focus" value="Text Input: Focus" placeholder="placeholder text">

		<label class="form__label">Input type="text"</label>
		<input type="text" class="form__input form__input--invalid" value="Text Input: Invalid" placeholder="placeholder text">
	</fieldset>

	<fieldset>
		<strong>Radio Inputs</strong>
		<input id="radio_1" type="radio" name="radio_group" checked class="form__radio">
		<label for="radio_1" class="form__radio__label">Radio</label>
		
		<input id="radio_2" type="radio" name="radio_group" class="form__radio">
		<label for="radio_2" class="form__radio__label">Radio</label>
		
		<input id="radio_4" type="radio" name="radio_group" required class="form__radio">
		<label for="radio_4" class="form__radio__label">Radio</label>
		
		<input id="radio_3" type="radio" name="radio_group" disabled class="form__radio">
		<label for="radio_3" class="form__radio__label">Radio</label>
	</fieldset>

	<fieldset>
		<strong>Checkbox Inputs</strong>
		<input id="checkbox_1" type="checkbox" name="checkbox" checked class="form__checkbox">
		<label for="checkbox_1" class="form__checkbox__label">Checkbox</label>

		<input id="checkbox_2" type="checkbox" name="checkbox" class="form__checkbox">
		<label for="checkbox_2">Checkbox</label>

		<input id="checkbox_4" type="checkbox" name="checkbox" required class="form__checkbox">
		<label for="checkbox_4" class="form__checkbox__label">Checkbox</label>

		<input id="checkbox_3" type="checkbox" name="checkbox" disabled class="form__checkbox">
		<label for="checkbox_3" class="form__checkbox__label">Checkbox</label>
	</fieldset>

	<fieldset>
		<strong>Select Inputs</strong>
		<select class="form__select">
			<option selected="selected">Option 1</option>
			<option>Option 2</option>
			<option>Option 3</option>
		</select><!-- .form__select -->
		<select multiple class="form__select">
			<option selected="selected">Option 1</option>
			<option>Option 2</option>
			<option>Option 3</option>
		</select><!-- .form__select -->
	</fieldset>

	<fieldset>
		<strong>Textarea</strong>
		<textarea class="form__input"></textarea>
		<textarea placeholder="Sed posuere consectetur est at lobortis" class="form__input"></textarea>
		<textarea class="form__input">Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Curabitur blandit tempus porttitor.</textarea>
	</fieldset>

	<fieldset>
		<legend>
			<h5>Form Groups</h5>
			<p>Adds spacing between input fields.</p>
		</legend>
		<div class="form__group">
			<label class="form__label">First Name</label>
			<input type="text" class="form__input" placeholder="James" value="">
		</div><!-- .form__group -->
		<div class="form__group">
			<label class="form__label">Last Name</label>
			<select class="form__select">
				<option selected="selected">Washington</option>
				<option>Lincoln</option>
				<option>Roosevelt</option>
			</select><!-- .form__select -->
		</div><!-- .form__group -->
		<div class="form__group">
			<input id="radio_male" type="radio" name="select_gender" checked>
			<label for="radio_male" selected>Male</label>
			<input id="radio_female" type="radio" name="select_gender">
			<label for="radio_female">Female</label>
		</div><!-- .form__group -->
		<div class="form__group">
			<button class="button">Save Form</button>
			<a href="#">Cancel</a>
		</div>
	</fieldset>

	<fieldset>
		<legend>Buttons &amp; Links</legend>
		<div class="form__actions">
			<input type="submit" value="Submit Button" class="button">
			<button class="button">HTML5 Button</button>
			<a href="#" class="button button--link">Regular Link</a>
		</div>
	</fieldset>
</div><!-- .example -->

<h2 id="layout-and-grid-system">Layout &amp; Grid System</h2>
<div class="example">
	<h3>Sidebar Layout</h3>
	<div class="layout__container show-grid">
		<div class="layout">
			<div class="layout__sidebar">
				<p>.layout__sidebar</p>
			</div><!-- .sidebar -->
			<div class="layout__content">
				<p>.layout__content</p>
			</div><!-- .main-content -->
		</div>
	</div>

	<h3>Full-page Layout</h3>
	<div class="layout__container show-grid">
		<div class="layout">
			<div class="layout__full">
				<p>.layout__full</p>
			</div><!-- .main-content -->
		</div>
	</div>

	<h3>Grid System</h3>
	<div class="layout__container show-grid">
		<div class="layout">
		  <div class="grid__sm__1"><p>1 / 12</p></div>
		  <div class="grid__sm__1"><p>2 / 12</p></div>
		  <div class="grid__sm__1"><p>3 / 12</p></div>
		  <div class="grid__sm__1"><p>4 / 12</p></div>
		  <div class="grid__sm__1"><p>5 / 12</p></div>
		  <div class="grid__sm__1"><p>6 / 12</p></div>
		  <div class="grid__sm__1"><p>7 / 12</p></div>
		  <div class="grid__sm__1"><p>8 / 12</p></div>
		  <div class="grid__sm__1"><p>9 / 12</p></div>
		  <div class="grid__sm__1"><p>10 / 12</p></div>
		  <div class="grid__sm__1"><p>11 / 12</p></div>
		  <div class="grid__sm__1"><p>12 / 12</p></div>
		</div>

		<div class="layout">
		  <div class="grid__sm__8"><p>8 / 12</p></div>
		  <div class="grid__sm__4"><p>4 / 8</p></div>
		</div>

		<div class="layout">
		  <div class="grid__sm__4"><p>4 / 12</p></div>
		  <div class="grid__sm__4"><p>4 / 12</p></div>
		  <div class="grid__sm__4"><p>4 / 12</p></div>
		</div>

		<div class="layout">
		  <div class="grid__sm__6"><p>6 / 12</p></div>
		  <div class="grid__sm__6"><p>6 / 12</p></div>
		</div>
	</div><!-- .container -->
</div>

<h2 id="navs">Navs</h2>
<div class="example">
	<ul class="nav">
		<li class="active">
			<a href="#">Link 1</a>
		</li>
		<li>
			<a href="#">Link 2</a>
		</li>
		<li>
			<a href="#">Link 3</a>
		</li>
		<li>
			<a href="#">Link 4</a>
		</li>
	</ul><!-- .nav -->
	<hr>
	<ul class="nav nav--sidebar">
		<li>
			<a href="#">Delivery schedule</a>
		</li>
		<li class="active">
			<a href="#">Subscriptions</a>
		</li>
		<li>
			<a href="#">Billing information</a>
		</li>
		<li>
			<a href="#">Purchase history</a>
		</li>
	</ul><!-- .nav -->
</div>

<h2 id="card-details">Card Details</h2>
<div class="example">
	<div class="card-details">
		<span class="card-details__date">
			<label for="exp-month" class="card-details__label">Expiration Month/Year</label>
			<span class="card-details__date__month">
				<input type="text" name="exp-month" id="exp-month" data-stripe="exp-month" placeholder="MM" value="" class="form__input">
			</span><!-- .card-details__date__month -->
			<span class="card-details__date__divider">
				/
			</span><!-- .card-details__date__divider -->
			<span class="card-details__date__year">
				<input type="text" name="exp-year" id="exp-year" data-stripe="exp-year" placeholder="YYYY" value="" class="form__input">
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
</div><!-- .example -->

<h2 id="title-bar">Title Bar</h2>
<div class="description">
	<p>Place a h1 representary class (.h1, .h2, .h3, etc) in the element so it may adopt the correct margin, otherwise, the heading margin will be reset</p>
	<p>Not much seperates the difference between the <strong>Title Bar</strong> and the <a href="#info-bar">Info Bar</a>. The one notable difference is that the vertical-alignment of the <strong>Title Bar</strong> is set to <em>middle</em>.</p>
</div><!-- .description -->
<div class="example">
	<div class="title-bar h1">
		<div class="title-bar__title">
			<h1>This is an H1 title</h1>
		</div><!-- .info-bar__title -->
		<div class="title-bar__content">
			<a href="#">This is a title link</a>
		</div><!-- .title-bar__content -->
	</div><!-- .title-bar -->
	<div class="title-bar h3">
		<div class="title-bar__title">
			<h3>This is an H3 title</h3>
		</div><!-- .info-bar__title -->
		<div class="title-bar__content">
			<button class="button button--primary">This is a button</button>
		</div><!-- .title-bar__content -->
	</div><!-- .title-bar -->
</div>

<h2 id="info-bar">Info Bar</h2>
<div class="description">
	<p>
		Not much seperates the difference between the <strong>Info Bar</strong> and the <a href="#title-bar">Title Bar</a>. The one notable difference is that the vertical-alignment of the <strong>Info Bar is</strong> set to <code>top</code>.
	</p>
</div><!-- .description -->
<div class="example">
	<div class="info-bar">
		<div class="info-bar__label">
			<strong>Card on file</strong>
		</div><!-- .info-bar__label -->
		<div class="info-bar__content">
			<p>VISA ending in 1001</p>
		</div><!-- .info-bar__content -->
	</div><!-- .info-bar -->
	<hr>
	<div class="info-bar">
		<div class="info-bar__label">
			<strong>Card holder</strong>
		</div><!-- .info-bar__label -->
		<div class="info-bar__content"> 
			<address>
				Bobby Sue McCallister<br>
				500 Main Street, Suite 33<br>
				Springfield, WA 11102<br>
				United States
			</address>
		</div><!-- .info-bar__content -->
	</div><!-- .info-bar -->
</div><!-- .example -->

<h2 id="form-actions">Form Errors</h2>
<div class="example">
	<div class="form__errors"><p>Error 400: Could not find payment information</p></div>
</div><!-- .example -->

<h2 id="form-actions">Form Actions</h2>
<div class="example">
	<div class="form__actions">
		<button class="button button--default button--large">Cancel</button>
		<button class="button button--primary button--large">Save</button>
	</div><!-- .form__actions -->
</div><!-- .example -->

<h2 id="billing">Testing: Billing</h2>
<div class="example">
	<form>
		<fieldset>
			<legend class="h2">Admin details</legend>
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
			<legend class="h2">Billing details</legend>
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

<h2 id="admin-tools">Admin Tools</h2>
<div class="example">
	<div class="admin-tools">
		<div class="admin-tools__header">
			<div class="container-fluid">
				<div class="title-bar">
					<div class="title-bar__title">
						<strong>ReCharge Admin Tools</strong>
					</div><!-- .title-bar__title -->
					<div class="title-bar__controls">
						<button id="toggle-admin-tools" class="button">Show</button>
					</div><!-- .title-bar__controls -->
				</div><!-- .title-bar -->
			</div><!-- .container-fluid -->
		</div><!-- .admin-tools__header -->
	</div><!-- .admin-tools -->
	<div class="admin-tools">
		<div class="admin-tools__header">
			<div class="container-fluid">
				<div class="title-bar">
					<div class="title-bar__title">
						<strong>ReCharge Admin Tools</strong>
					</div><!-- .title-bar__title -->
					<div class="title-bar__controls">
						<button id="toggle-admin-tools" class="button">Hide</button>
					</div><!-- .title-bar__controls -->
				</div><!-- .title-bar -->
			</div><!-- .container-fluid -->
		</div><!-- .admin-tools__header -->
		<div class="admin-tools__content">
			<div class="container-fluid">
				<form>
					<div class="form__group">
						<label for="delete-account" class="form__label">This will cancel your account</label>
						<button id="delete-account" name="delete-account" class="button button--danger">Delete Account</button>
					</div><!-- .form__group -->
				</form>
				<br>
				<h5>Variables</h5>
<pre>
is_country_supported == <button data-toggle="is_country_supported">True</button>

is_code_installed == <button data-toggle="is_code_installed">True</button>

is_password_protected == <button data-toggle="is_password_protected">False</button>
is_supported_theme == <button data-toggle="is_supported_theme">False</button>
is_bold_installed == <button data-toggle="is_bold_installed">True</button>
</pre>
			</div><!-- .container-fluid -->
		</div><!-- .admin-tools__content -->
	</div><!-- .admin-tools -->
</div><!-- .example -->

<?php include('includes/footer.php'); ?>
<?php include('includes/header.php'); ?>
<h1>Components</h1>
<p>Typically made up of <a href="elements.php">Elements</a>, grouped with with a unique class identifier. Serves a specific, but widely-used purpose.</p>
<p>Needs to be abstracted from <a href="index.php">Overview</a>.</p>

<hr>

<h2 id="setup-header">Setup Header</h2>
<p>The previous base class name for this component was <code>.header</code>, but this was before I realized this was the Setup Header, not a standard header. The old class nomiclature will be removed in the future.</p>
<div class="example">
	<div class="setup-header">
		<h1 class="setup-header__title">This is a page title</h1>
		<div class="setup-header__description">This is a page title catpion</div>
	</div><!-- .setup-header -->
</div><!-- .example -->

<h2 id="page-title">Page Title</h2>
<p>The page title relies on the title-bar to create the header-to-action layout, but now adds the ability to include a description</p>
<div class="example">
<div class="page-title">
	<div class="title-bar">
		<div class="title-bar__title">
			<h1>Customer Portal settings</h1>
		</div><!-- .info-bar__title -->
		<div class="title-bar__content">
			<button class="button button--primary">Save</button>
		</div><!-- .title-bar__content -->
	</div><!-- .title-bar -->
	<div class="page-title__description">
		<p>The Customer Portal is where your customers manage their subscriptions. Set the controls for the  portal so that your customers see only the options that you set.</p>
	</div><!-- .page-title__description -->
</div><!-- .page-title -->
</div><!-- .example -->

<h2 id="title-bar">Title Bar</h2>
<div class="description">
	<p>Not much seperates the difference between the <strong>Title Bar</strong> and the <a href="#info-bar">Info Bar</a>. The one notable difference is that the vertical-alignment of the <strong>Title Bar</strong> is set to <em>middle</em>.</p>
	<p>Place a h1 representary class (.h1, .h2, .h3, etc) in the element so it may adopt the correct margin, otherwise, the heading margin will be reset</p>
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

<hr>

<h2 id="dropdowns">Dropdowns</h2>
<div class="example">
<div class="button dropdown">
	<a href="#" class="dropdown__trigger" data-toggle="dropdown__menu">
		Dropdown Menu
	</a><!-- .dropdown__trigger -->
	<ul class="dropdown__menu list">
		<li><a href="#">Customers</a></li>
		<li><a href="#">Upcoming Orders</a></li>
		<li class="active"><a href="#">Active Link 2</a></li>
		<li><a href="#">Processed Orders</a></li>
		<li><a href="#">Error Orders</a></li>
		<li><a href="#">Upcoming Pre-Paid Shipments</a></li>
		<li><a href="#">Inactive Customers</a></li>
		<li><a href="#">Customer Actions</a></li>
		<li><span>No Link</span></li>
		<li></li>
		<li><a href="#">Customers + Next Order</a></li>
		<li><a href="#">Number Subscribers per Item</a></li>
		<li><a href="#">Number Subscribers per Interval</a></li>
	</ul>
</div><!-- .button .dropdown -->
</div>

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
	</label><!-- .switch -->
</div><!-- .example -->

<h2 id="action-lists">Action Lists</h2>
<div class="example">
<?php include('_components/action-list.php'); ?>
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

<hr>

<h2 id="contextual-options">Contextual Options</h2>

<div class="example">
<div class="form__group">
	<div class="contextual">
		<div class="contextual__input">
			<input id="radio_1" type="radio" name="radio_group" class="form__radio">
			<label for="radio_1" class="form__radio__label">Only storeowner is able to cancel subscription</label>
		</div><!-- .contextual-radio__option -->
		<div class="contextual__input">
			<input id="radio_2" type="radio" name="radio_group" checked="" class="form__radio">
			<label for="radio_2" class="form__radio__label">Customer is able to cancel subscription</label>
			<div class="contextual__input__options">
				<div class="form__group">
					<label for="chargers_before_allowed_cancellation">Allow cancellation after</label>
					<div class="input-group">
						<select id="chargers_before_allowed_cancellation" name="chargers_before_allowed_cancellation" class="form__select">
							<option value="1">1</option>
							<option value="1">2</option>
							<option value="1">3</option>
							<option value="1">4</option>
						</select><!-- #chargers_before_allowed_cancellation -->
						<div class="input-group__addon">
							charge(s)
						</div><!-- .form__input-group__addon -->
					</div><!-- .input-group -->
				</div><!-- .form__group -->
			</div><!-- .contextual__input__options -->
		</div><!-- .contextual-radio__option -->
	</div>
	<style>
		.new .contextual__input .form__radio:checked + .form__radio__label + .contextual__input__options {
			display: block;
		}
		.new .contextual__input__options {
			background-color: #f3f3f3;
			padding: 18px 20px 0;
			margin-left: 24px;
			margin-top: -7px;
			display: none;
		}
	</style>
</div><!-- .form__group -->
</div><!-- .example -->

<?php include('includes/footer.php'); ?>
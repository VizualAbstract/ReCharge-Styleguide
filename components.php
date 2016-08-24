<?php include('includes/header.php'); ?>
<h1>Components</h1>
<p>Typically made up of <a href="elements.php">Elements</a>, grouped with with a unique class identifier. Serves a specific, but widely-used purpose.</p>
<p>Needs to be abstracted from <a href="index.php">Overview</a>.</p>

<hr>

<h2 class="rc_sg__pattern_title" id="setup-header">Setup Header</h2>
<div class="rc_sg__description">
	<p>The previous base class name for this component was <code>.header</code>, but this was before I realized this was the Setup Header, not a standard header. The old class nomiclature will be removed in the future.</p>
</div><!-- .description -->
<div class="rc_sg__example">
<?php include('_components/setup-header.php'); ?>
</div><!-- .example -->

<h2 class="rc_sg__pattern_title" id="page-title">Page Title</h2>
<div class="rc_sg__description">
	<p>Page Title is a wrapper that supports a description. Mix with a <a href="#title-bar">.title-bar</a> to create interface elements.</a></p>
</div><!-- .description -->
<div class="rc_sg__example">
<?php include('_components/page-title.php'); ?>
</div><!-- .example -->

<h2 class="rc_sg__pattern_title" id="title-bar">Title Bar</h2>
<div class="rc_sg__description">
	<p>Useful for page titles (h1, h2, h3, h4) that have relevant content or actions. Place a header class (.h1, .h2, .h3, etc) in the element so it may adopt the correct margin, otherwise, the heading margin will be reset.</p>
</div><!-- .description -->
<div class="rc_sg__example">
<?php include('_components/title-bar.php'); ?>
</div>

<h2 class="rc_sg__pattern_title" id="info-bar">Info Bar</h2>
<div class="rc_sg__description">
	<p>
		Similair to the <a href="#title-bar">Title Bar</a>, but the content is vertically-aligned to the top. Better for overviews instead of page titles.
	</p>
</div><!-- .description -->
<div class="rc_sg__example">
<?php include('_components/info-bar.php'); ?>
</div><!-- .example -->

<h2 class="rc_sg__pattern_title" id="dropdown-header">Dropdown Header</h2>
<div class="rc_sg__description">
	<p>There is no unique class name for the dropdown header, it is just a made up of a page-title, dropdown and buttons</p>
</div><!-- .description -->
<div class="rc_sg__example">
<?php include('_components/dropdown-header.php'); ?>
</div><!-- .example -->

<hr>

<h2 class="rc_sg__pattern_title" id="dropdowns">Dropdowns</h2>
<div class="rc_sg__example">
<?php include('_components/dropdowns.php'); ?>
</div><!-- .example -->

<h2 class="rc_sg__pattern_title" id="switches">Switches</h2>
<div class="rc_sg__example">
<?php include('_components/switches.php'); ?>
</div><!-- .example -->

<h2 class="rc_sg__pattern_title" id="action-lists">Action Lists</h2>
<div class="rc_sg__example">
<?php include('_components/action-list.php'); ?>
</div><!-- .example -->

<h2 class="rc_sg__pattern_title" id="action-list">Toggle List</h2>
<div class="rc_sg__description">
	<p>Toggle lists use a combination of HTML, CSS and JavaScript. Adding the class <code>.disable</code> to the parent list item will change the background color of the switch, the list item and the link color.</p>
	<p>Disabling the switch will trigger the <code>.disable</code> class.</p>
</div><!-- .rc_sg__description -->
<div class="rc_sg__example">
<ul class="toggle-list">
	<li class="toggle-list__item">
		<div class="toggle-list__item__content">
			<a href="#">Subscription Activation</a>
			<p>Sent to customers when they first sign up for a subscription</p>
		</div><!-- .toggle-list__item__content -->
		<div class="toggle-list__item__action">
			<label class="switch switch--small">
				<div class="switch__inner">
					<input class="switch__input" checked type="checkbox">
					<span class="switch__overlay"></span>
					<span class="switch__left"></span>
					<span class="switch__right"></span>
				</div><!-- .switch__inner -->
			</label><!-- .switch -->
		</div><!-- .toggle-list__item__action -->
	</li><!-- .toggle-list__item -->
	<li class="toggle-list__item disabled">
		<div class="toggle-list__item__content">
			<a href="#">Subscription Activation</a> <label>Disabled</label>
			<p>Sent to customers when they first sign up for a subscription</p>
		</div><!-- .toggle-list__item__content -->
		<div class="toggle-list__item__action">
			<label class="switch switch--small">
				<div class="switch__inner">
					<input class="switch__input" type="checkbox">
					<span class="switch__overlay"></span>
					<span class="switch__left"></span>
					<span class="switch__right"></span>
				</div><!-- .switch__inner -->
			</label><!-- .switch -->
		</div><!-- .toggle-list__item__action -->
	</li><!-- .toggle-list__item -->
	<li class="toggle-list__item">
		<div class="toggle-list__item__content">
			<a href="#">Subscription Activation</a>
			<p>Sent to customers when they first sign up for a subscription</p>
		</div><!-- .toggle-list__item__content -->
		<div class="toggle-list__item__action">
			<label class="switch switch--small">
				<div class="switch__inner">
					<input class="switch__input" checked type="checkbox">
					<span class="switch__overlay"></span>
					<span class="switch__left"></span>
					<span class="switch__right"></span>
				</div><!-- .switch__inner -->
			</label><!-- .switch -->
		</div><!-- .toggle-list__item__action -->
	</li><!-- .toggle-list__item -->
</ul><!-- .toggle-list -->
</div><!-- .example -->
<?php /* <h2 class="rc_sg__pattern_title" id="toggle-lists">Toggle Lists</h2>
<div class="rc_sg__description">
	<p><strong>Toggle Lists</strong> have a more specific use case than <a href="#action-lists">Action Lists</a>, which are a more general component. Toggle lists will lose their table-layout structure on mobile.</p>
</div>
<div class="rc_sg__example">
<?php include('_components/toggle-list.php'); ?>
</div><!-- .example --> */ ?>

<h2 class="rc_sg__pattern_title" id="progress-bar">Progress Bar</h2>
<div class="rc_sg__example">
<?php include('_components/progress-bar.php'); ?>
</div><!-- .example -->

<h2 class="rc_sg__pattern_title" id="breadcrumbs">Breadcrumbs</h2>
<div class="rc_sg__example">
<?php include('_components/breadcrumbs.php'); ?>
</div><!-- .example -->

<h2 class="rc_sg__pattern_title" id="continue-bar">Continue Bar</h2>
<div class="rc_sg__example">
<?php include('_components/continue-bar.php'); ?>
</div><!-- .example -->

<?php include('includes/footer.php'); ?>
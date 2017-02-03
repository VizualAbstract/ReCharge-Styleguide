<?php include('includes/header.php'); ?>
<h1>Components</h1>
<p>Typically made up of <a href="elements.php">Elements</a>, grouped with with a unique class identifier. Serves a specific, but widely-used purpose.</p>
<p>Needs to be abstracted from <a href="index.php">Overview</a>.</p>

<hr>

<script>
	$(function() {
		$('.accordion').on('click', '[data-toggle="collapse__menu"]', function() {
			$(this).parents('.accordion__header').toggleClass('accordion--active');
		});
	});
</script>
<style>
	.new ul.accordion,
	.new ul.accordion > li {
		list-style: none;
		margin-left: 0;
	}
	.new .accordion {
		display: table;
		width: 100%;
		position: relative;
	}
	.new .accordion__header {
		position: relative;
		width: 100%;
		white-space: nowrap;
		display: flex;
	}
	.new .accordion__details + .accordion__header {
		margin-top: 25px;
	}
	.new .accordion__header:before {
		content: "\f078";
		font-family: "font-awesome", "fontawesome";
		display: block;
		position: absolute;
		font-size: 16px;
		top: 0;
		left: 0;
		width: 40px;
		text-align: left;
	}
	.new .accordion__header.accordion--active:before {
		content: "\f077";
	}
	.new .accordion__media,
	.new .accordion__description {
		display: inline-block;
		vertical-align: top;
		white-space: initial;
	}
	.new .accordion__media {
		width: 55px;
		padding-left: 40px;
		padding-top: 5px;
	}
	.new .accordion__media img {
		width: 100%;
		height: auto;
	}
	.new .accordion__header h5 small {
		font-size: 14px;
		color: #676767;
	}
	.new .accordion__description {
		padding-left: 30px;
		width: 100%;
	}
	.new .accordion__details {
		padding-left: 119px;
	}
</style>
<h2 class="rc_sg__pattern_title" id="setup-header">Setup Header</h2>
<div class="rc_sg__description">
	<p>The previous base class name for this component was <code>.header</code>, but this was before I realized this was the Setup Header, not a standard header. The old class nomiclature will be removed in the future.</p>
</div><!-- .description -->
<div class="rc_sg__example">
<?php include('_components/setup-header.php'); ?>
</div><!-- .rc_sg__example -->

<h2 class="rc_sg__pattern_title" id="page-title">Page Title</h2>
<div class="rc_sg__description">
	<p>Page Title is a wrapper that supports a description. Mix with a <a href="#title-bar">.title-bar</a> to create interface elements.</a></p>
</div><!-- .description -->
<div class="rc_sg__example">
<?php include('_components/page-title.php'); ?>
</div><!-- .rc_sg__example -->

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
</div><!-- .rc_sg__example -->

<hr>

<h2 class="rc_sg__pattern_title" id="dropdown-header">Dropdown Header</h2>
<div class="rc_sg__description">
	<p>There is no unique class name for the dropdown header, it is just a made up of a page-title, dropdown and buttons</p>
</div><!-- .description -->
<div class="rc_sg__example">
<?php include('_components/dropdown-header.php'); ?>
</div><!-- .rc_sg__example -->

<hr>

<h2 class="rc_sg__pattern_title" id="notifications">Notifications</h2>
<div class="rc_sg__description">
	<p>
		Error notifications will be closeable. The rest will be time-closed at 2500 ms
	</p>
</div><!-- .description -->
<div class="rc_sg__example">
<?php include('_components/notifications.php'); ?>
</div><!-- .rc_sg__example -->

<hr>

<h2 class="rc_sg__pattern_title" id="dropdowns">Dropdowns</h2>
<div class="rc_sg__example">
<?php include('_components/dropdowns.php'); ?>
</div><!-- .rc_sg__example -->

<h2 class="rc_sg__pattern_title" id="switches">Switches</h2>
<div class="rc_sg__example">
<?php include('_components/switches.php'); ?>
</div><!-- .rc_sg__example -->

<h2 class="rc_sg__pattern_title" id="action-lists">Action Lists</h2>
<div class="rc_sg__example">
<?php include('_components/action-list.php'); ?>
</div><!-- .rc_sg__example -->

<h2 class="rc_sg__pattern_title" id="accordion-lists">Accordion Lists</h2>
<div class="rc_sg__example">
<?php include('_components/accordion-list.php'); ?>
</div><!-- .rc_sg__example -->

<h2 class="rc_sg__pattern_title" id="action-lists">Download List</h2>
<div class="rc_sg_description">
	<p>Download lists are a simplified version of the action list, with an action stacked on top of a description.</p>
</div><!-- .rc_sg_description -->
<div class="rc_sg__example">
<?php include('_components/download-list.php'); ?>
</div><!-- .rc_sg__example -->

<h2 class="rc_sg__pattern_title" id="toggle-list">Toggle List</h2>
<div class="rc_sg__description">
	<p>Toggle lists use a combination of HTML, CSS and JavaScript. Adding the class <code>.disable</code> to the parent list item will change the background color of the switch, the list item and the link color.</p>
	<p>Disabling the switch will trigger the <code>.disable</code> class.</p>
</div><!-- .rc_sg__description -->
<div class="rc_sg__example">
<?php include('_components/toggle-list.php'); ?>
</div><!-- .rc_sg__example -->

<h2 class="rc_sg__pattern_title" id="progress-bar">Progress Bar</h2>
<div class="rc_sg__example">
<?php include('_components/progress-bar.php'); ?>
</div><!-- .rc_sg__example -->

<h2 class="rc_sg__pattern_title" id="breadcrumbs">Breadcrumbs</h2>
<div class="rc_sg__example overflow-fix">
<?php include('_components/breadcrumbs.php'); ?>
</div><!-- .rc_sg__example -->

<h2 class="rc_sg__pattern_title" id="continue-bar">Continue Bar</h2>
<div class="rc_sg__example">
<?php include('_components/continue-bar.php'); ?>
</div><!-- .rc_sg__example -->

<h2 class="rc_sg__pattern_title" id="pagination">Pagination</h2>
<div class="rc_sg__example">
<?php include('_components/pagination.php'); ?>
</div><!-- .rc_sg__example -->

<?php include('includes/footer.php'); ?>
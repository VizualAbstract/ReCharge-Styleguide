<?php include('includes/header.php'); ?>
<h1>Elements</h1>
<p>Bare-bone, base HTML DOM elements. Class nomiclature follows standard HTML naming conventions, but CSS selectors are used for their improved rendering speed.</p>
<p><strong>Needs:</strong> Lists, Images, Form Groups</p>

<hr>

<h2 id="buttons">Buttons</h2>
<div class="description">
	<p>The <code>.button</code> class will render links, input[type="submit"] and buttons in the same fashion. Use  <code>.button--primary</code>, <code>.button--secondary</code>, <code>.button--danger</code>, <code>.button--disabled</code> to stylize further.</p>
</div><!-- .description -->
<div class="example">
<?php include('_elements/buttons.php'); ?>
</div><!-- .example -->

<h2 id="buttons-links">Buttons: Links</h2>
<div class="example">
<?php include('_elements/buttons-links.php'); ?>
</div><!-- .example -->

<h2 id="buttons-large">Buttons: Large</h2>
<div class="example">
<?php include('_elements/buttons-large.php'); ?>
</div><!-- .example -->

<h2 id="buttons-blocked">Buttons: Blocked</h2>
<div class="example">
<?php include('_elements/buttons-blocked.php'); ?>
</div><!-- .example -->

<hr>

<h2 id="inputs-text-field">Inputs: Text-field</h2>
<div class="example">
<?php include('_elements/inputs-text-field.php'); ?>
</div><!-- .example -->

<h2 id="inputs-textarea">Inputs: Textarea</h2>
<div class="example">
<?php include('inputs-textarea.php'); ?>
</div><!-- .example -->

<h2 id="inputs-radio">Inputs: Radio</h2>
<div class="example">
<?php include('_elemenets/inputs-radio.php'); ?>
</div><!-- .example -->

<h2 id="inputs-checkbox">Inputs: Checkbox</h2>
<div class="example">
<?php include('_elements/inputs-checkbox.php'); ?>
</div><!-- .example -->

<h2 id="inputs-select">Inputs: Select</h2>
<div class="example">
<?php include('_elements/inputs-select.php'); ?>
</div><!-- .example -->

<h2 id="inputs-color">Inputs: Color</h2>
<div class="example">
<?php include('_elements/inputs-color.php'); ?>
</div><!-- .example -->

<hr>

<h2 id="form-groups">Form: Groups</h2>
<div class="example">
<?php include('_elements/form-groups.php'); ?>
</div><!-- .example -->

<h2 id="form-errors">Form: Errors</h2>
<div class="example">
<?php include('_elements/form-errors.php'); ?>
</div><!-- .example -->

<h2 id="form-actions">Form: Actions</h2>
<div class="example">
<?php include('_elements/form-actions.php'); ?>
</div><!-- .example -->

<hr>

<h2 id="input-groups">Input Groups</h2>
<div class="description">
	<p>
		Input groups will have their addon items seperated by 15px. They can be either auto-width or full-width by adding <code>.input-group--full</code>
	</p>
</div><!-- .description -->
<div class="example">
<?php include('_elements/input-groups.php'); ?>
</div><!-- .example -->

<h2 id="input-groups-search">Input Groups: Search</h2>
<div class="description">
	<p>
		Form search relies on <a href="elements.php/#forms">Input Groups</a>, but wrapping the component in <code>.form__search</code> will remove the 15px gap between the button and the input field and finally set the button's min-width to 40px.
	</p>
</div><!-- .description -->
<div class="example">
<?php include('_elements/input-groups-search.php'); ?>
</div><!-- .example -->

<h2 id="input-groups-contextual">Input Groups: Contextual</h2>
<div class="description">
	<p>If a radio button is selected, or a checkbox is checked, and a contextual container follows it immediatly, it will be displayed.</p>
</div><!-- .description -->
<div class="example">
<?php include('_elements/input-groups-contextual.php'); ?>
</div><!-- .example -->

<hr>

<h2 id="card-details">Card Details</h2>
<div class="example">
<?php include('_elements/card-details.php'); ?>
</div><!-- .example -->

<hr>

<h2 id="tables">Tables</h2>
<div class="description">
	<p>Tables are the second most common element on ReCharge behind forms.</p>
</div><!-- .description -->
<div class="example" style="overflow: hidden;">
<?php include('_elements/tables.php'); ?>
</div><!-- .example -->

<h2 id="tables-responsive">Tables: Responsive</h2>
<div class="description">
	<p>Mobile-friendly tables are a special beast. The following documents several approaches available, since no perfect solution exists for every situation.</p>
	<p>
		<strong>Overflow Wrapper</strong><br>
		Wrapping the table in a special div is the simplest approach. For wide tables, it allows the user to scroll across the data table with their thumb. A shadow is used to hint that additional data is available. All responsive tables require this.
	</p>
</div><!-- .description -->
<div class="example">
<?php include('_elements/tables-responsive.php'); ?>
</div><!-- .example -->

<div class="description">
	<p>
		<strong>Pinned</strong><br>
		This approach pins the first column and allows you to scroll horizontally through the rest of the data, maintaing context for both columns and rows.
	</p>
	<p>The first-column has a set max-width, to prevent data from being unscrollable if the first column is too long.</p>
</div><!-- .description -->
<div class="example">
<?php include('_elements/tables-responsive-pinned.php'); ?>
</div><!-- .example -->

<div class="description">
	<p>
		<strong>Pinned Alternate</strong><br>
		This approach pins the <code>&lt;thead&gt;&lt;/thead&gt;</code> as the first column, allowing you to scroll horizontally and see all row data at once while maintaining context for cell values.
	</p>
	<p>This approach is incompatible with the <code>&lt;tfoot&gt;&lt;/tfoot&gt;</code>.</p>
</div><!-- .description -->
<div class="example">
<?php include('_elements/tables-responsive-alt.php'); ?>
</div><!-- .example -->

<div class="description">
	<p>
		<strong>Stacked</strong><br>
		This final approach will stack each row into it's own mini-table. While the approach makes the table look tailor-made for a mobile device, data comparison between rows is lost.
	</p>
	<p>This approach is incompatible with <code>&lt;tfoot&gt;&lt;/tfoot&gt;</code>. It also requires the use of JavaScript to duplicate the <code>&lt;thead&gt;&lt;/thead&gt;</code> labels for each data group.</p>
</div><!-- .description -->
<div class="example">
<?php include('_elements/tables-responsive-stacked.php'); ?>
</div><!-- .example -->

<?php include('includes/footer.php'); ?>
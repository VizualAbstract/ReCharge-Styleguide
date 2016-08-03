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

<h2 id="buttons-links">Buttons: Links</h2>
<div class="example">
<a href="#" class="button button--link">Button</a>
<input type="submit" class="button button--link" value="Button">
<button class="button button--link">Button</button>
<button class="button button--default button--link">Default</button>
<button class="button button--primary button--link">Primary</button>
<button class="button button--secondary button--link">Secondary</button>
<button class="button button--danger button--link">Danger</button>
<button class="button button--disabled button--link">Disabled</button>
</div><!-- .example -->

<h2 id="buttons-large">Buttons: Large</h2>
<div class="example">
<a href="#" class="button button--large">Large Button</a>
<input type="submit" class="button button--large button--primary" value="Large Button">
<button class="button button--large button--disabled">Large Button</button>
</div><!-- .example -->

<h2 id="buttons-blocked">Buttons: Blocked</h2>
<div class="example">
<a href="#" class="button button--block">Large Block Button</a>
<input type="submit" class="button button--block button--primary" value="Large Block Button">
<button class="button button--block button--disabled">Large Block Button</button>
</div><!-- .example -->

<hr>

<h2 id="inputs-text-field">Inputs: Text-field</h2>
<div class="example">
<fieldset>
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
</div><!-- .example -->

<h2 id="inputs-textarea">Inputs: Textarea</h2>
<div class="example">
<textarea class="form__input"></textarea>
<textarea placeholder="Sed posuere consectetur est at lobortis" class="form__input"></textarea>
<textarea class="form__input">Sed posuere consectetur est at lobortis. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Curabitur blandit tempus porttitor.</textarea>
</div><!-- .example -->

<h2 id="inputs-radio">Inputs: Radio</h2>
<div class="example">
<input id="radio_1" type="radio" name="radio_group" checked class="form__radio">
<label for="radio_1" class="form__radio__label">Radio</label>

<input id="radio_2" type="radio" name="radio_group" class="form__radio">
<label for="radio_2" class="form__radio__label">Radio</label>

<input id="radio_4" type="radio" name="radio_group" required class="form__radio">
<label for="radio_4" class="form__radio__label">Radio</label>

<input id="radio_3" type="radio" name="radio_group" disabled class="form__radio">
<label for="radio_3" class="form__radio__label">Radio</label>
</div><!-- .example -->

<h2 id="inputs-checkbox">Inputs: Checkbox</h2>
<div class="example">
<input id="checkbox_1" type="checkbox" name="checkbox" checked class="form__checkbox">
<label for="checkbox_1" class="form__checkbox__label">Checkbox</label>

<input id="checkbox_2" type="checkbox" name="checkbox" class="form__checkbox">
<label for="checkbox_2">Checkbox</label>

<input id="checkbox_4" type="checkbox" name="checkbox" required class="form__checkbox">
<label for="checkbox_4" class="form__checkbox__label">Checkbox</label>

<input id="checkbox_3" type="checkbox" name="checkbox" disabled class="form__checkbox">
<label for="checkbox_3" class="form__checkbox__label">Checkbox</label>
</div><!-- .example -->

<h2 id="inputs-select">Inputs: Select</h2>
<div class="example">
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
</div><!-- .example -->

<hr>

<h2 id="form-groups">Form: Groups</h2>
<div class="example">
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
	<a href="#" class="button button--link">Cancel</a>
</div><!-- .form__group -->
</div><!-- .example -->

<h2 id="form-errors">Form: Errors</h2>
<div class="example">
<div class="form__errors"><p>Error 400: Could not find payment information</p></div>
</div><!-- .example -->

<h2 id="form-actions">Form: Actions</h2>
<div class="example">
<div class="form__actions">
	<button class="button button--default button--large">Cancel</button>
	<button class="button button--primary button--large">Save</button>
</div><!-- .form__actions -->
</div><!-- .example -->


<hr>

<h2 id="input-groups">Input Groups</h2>
<p>
	Input groups will have their addon items seperated by 15px. They can be either auto-width or full-width by adding <code>.input-group--full</code>
</p>
<div class="example">
<div class="input-group">
	<div class="input-group__addon">
		$
	</div><!-- .form__input-group__addon -->
	<input type="text" id="" name="" value="10.99" placeholder="0.00" class="form__input">
	<div class="input-group__addon">
		<button id="" name="" class="button">Calculate</button>
	</div><!-- .form__input-group__addon -->
</div><!-- .input-group -->
<div class="input-group input-group--full">
	<div class="input-group__addon">
		$
	</div><!-- .form__input-group__addon -->
	<input type="text" id="" name="" value="10.99" placeholder="0.00" class="form__input">
	<div class="input-group__addon">
		<button id="" name="" class="button">Calculate</button>
	</div><!-- .form__input-group__addon -->
</div><!-- .input-group  -->
</div><!-- .example -->

<h2 id="input-groups-search">Input Groups: Search</h2>
<p>
	Form search relies on <a href="elements.php/#forms">Input Groups</a>, but wrapping the component in <code>.form__search</code> will remove the 15px gap between the button and the input field and finally set the button's min-width to 40px.
</p>
<div class="example">
<form class="form__search">
	<div class="input-group">
		<div class="input-group__addon">
			<label for="search_terms" class="form__label">Search</label>
		</div>
		<input type="text" id="search_terms" name="search_terms" value="" placeholder="Search terms..." class="form__input">
		<div class="input-group__addon">
			<button id="submit_search" class="button">
				<span class="fa fa-search"></span>
			</button><!-- #submit_search .button -->
		</div>
	</div><!-- .form__search -->
	<div class="input-group input-group--full">
		<div class="input-group__addon">
			<label for="search_terms" class="form__label">Search</label>
		</div>
		<input type="text" id="search_terms" name="search_terms" value="" placeholder="Search terms..." class="form__input">
		<div class="input-group__addon">
			<button id="submit_search" class="button">
				<span class="fa fa-search"></span>
			</button><!-- #submit_search .button -->
		</div>
	</div><!-- .input-group -->
</form><!-- .form__search -->
</div><!-- .example -->

<hr>

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

<hr>

<h2 id="tables">Tables</h2>
<p>Tables are the second most common element on ReCharge behind forms.</p>
<div class="example" style="overflow: hidden;">
<table class="table">
	<thead>
		<tr>
			<th>Customer</th>
			<th>Email</th>
			<th>Location</th>
			<th>Status</th>
			<th>Age</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td>Total users</td>
			<td colspan="4">4</td>
		</tr>
	</tfoot>
	<tbody>
		<tr>
			<td>Corey Capetillo</td>
			<td><a href="#">firstname.lastname@gmail.com</a></td>
			<td>Active</td>
			<td>Los Angeles, CA</td>
			<td>31</td>
		</tr>
		<tr>
			<td>Marisol Plaza</td>
			<td><a href="#">firstname.lastname@gmail.com</a></td>
			<td>Active</td>
			<td>West Covina, CA</td>
			<td>25</td>
		</tr>
		<tr>
			<td>Esli Sugich</td>
			<td><a href="#">firstname.lastname@gmail.com</a></td>
			<td>Active</td>
			<td>Hollywood, CA</td>
			<td>29</td>
		</tr>
		<tr>
			<td>Aimee Zamayoa</td>
			<td><a href="#">firstname.lastname@gmail.com</a></td>
			<td>Active</td>
			<td>Monrovia, CA</td>
			<td>30</td>
		</tr>
	</tbody>
</table><!-- .table -->
</div><!-- .example -->

<h2 id="tables-responsive">Tables: Responsive</h2>
<p>Mobile-friendly tables are a special beast. The following documents several approaches available, since no perfect solution exists for every situation.</p>
<p>
	<strong>Overflow Wrapper</strong><br>
	Wrapping the table in a special div is the simplest approach. For wide tables, it allows the user to scroll across the data table with their thumb. A shadow is used to hint that additional data is available. All responsive tables require this.
</p>
<div class="example">
<div class="table__container">
	<table class="table">
		<thead>
			<tr>
				<th>Customer</th>
				<th>Email</th>
				<th>Location</th>
				<th>Status</th>
				<th>Age</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td>Total users</td>
				<td colspan="4">4</td>
			</tr>
		</tfoot>
		<tbody>
			<tr>
				<td>Corey Capetillo</td>
				<td><a href="#">firstname.lastname@gmail.com</a></td>
				<td>Active</td>
				<td>Los Angeles, CA</td>
				<td>31</td>
			</tr>
			<tr>
				<td>Marisol Plaza</td>
				<td><a href="#">firstname.lastname@gmail.com</a></td>
				<td>Active</td>
				<td>West Covina, CA</td>
				<td>25</td>
			</tr>
			<tr>
				<td>Esli Sugich</td>
				<td><a href="#">firstname.lastname@gmail.com</a></td>
				<td>Active</td>
				<td>Hollywood, CA</td>
				<td>29</td>
			</tr>
			<tr>
				<td>Aimee Zamayoa</td>
				<td><a href="#">firstname.lastname@gmail.com</a></td>
				<td>Active</td>
				<td>Monrovia, CA</td>
				<td>30</td>
			</tr>
		</tbody>
	</table><!-- .table -->
</div><!-- .table__container -->
</div>

<p>
	<strong>Pinned</strong><br>
	This approach pins the first column and allows you to scroll horizontally through the rest of the data, maintaing context for both columns and rows.
</p>
<p>The first-column has a set max-width, to prevent data from being unscrollable if the first column is too long.</p>
<div class="example">
<div class="table__container">
	<table class="table table--pinned">
		<thead>
			<tr>
				<th>Customer</th>
				<th>Email</th>
				<th>Location</th>
				<th>Status</th>
				<th>Age</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td>Total users</td>
				<td colspan="4">4</td>
			</tr>
		</tfoot>
		<tbody>
			<tr>
				<td>Corey Capetillo</td>
				<td><a href="#">firstname.lastname@gmail.com</a></td>
				<td>Active</td>
				<td>Los Angeles, CA</td>
				<td>31</td>
			</tr>
			<tr>
				<td>Marisol Plaza</td>
				<td><a href="#">firstname.lastname@gmail.com</a></td>
				<td>Active</td>
				<td>West Covina, CA</td>
				<td>25</td>
			</tr>
			<tr>
				<td>Esli Sugich</td>
				<td><a href="#">firstname.lastname@gmail.com</a></td>
				<td>Active</td>
				<td>Hollywood, CA</td>
				<td>29</td>
			</tr>
			<tr>
				<td>Aimee Zamayoa</td>
				<td><a href="#">firstname.lastname@gmail.com</a></td>
				<td>Active</td>
				<td>Monrovia, CA</td>
				<td>30</td>
			</tr>
		</tbody>
	</table><!-- .table -->
</div><!-- .table__container -->
</div><!-- .example -->

<p>
	<strong>Pinned Alternate</strong><br>
	This approach pins the <code>&lt;thead&gt;&lt;/thead&gt;</code> as the first column, allowing you to scroll horizontally and see all row data at once while maintaining context for cell values.
</p>
<p>This approach is incompatible with the <code>&lt;tfoot&gt;&lt;/tfoot&gt;</code>.</p>
<div class="example">
<div class="table__container">
	<table class="table table--alt">
		<thead>
			<tr>
				<th>Customer</th>
				<th>Email</th>
				<th>Location</th>
				<th>Status</th>
				<th>Age</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td>Total users</td>
				<td colspan="4">4</td>
			</tr>
		</tfoot>
		<tbody>
			<tr>
				<td>Corey Capetillo</td>
				<td><a href="#">firstname.lastname@gmail.com</a></td>
				<td>Active</td>
				<td>Los Angeles, CA</td>
				<td>31</td>
			</tr>
			<tr>
				<td>Marisol Plaza</td>
				<td><a href="#">firstname.lastname@gmail.com</a></td>
				<td>Active</td>
				<td>West Covina, CA</td>
				<td>25</td>
			</tr>
			<tr>
				<td>Esli Sugich</td>
				<td><a href="#">firstname.lastname@gmail.com</a></td>
				<td>Active</td>
				<td>Hollywood, CA</td>
				<td>29</td>
			</tr>
			<tr>
				<td>Aimee Zamayoa</td>
				<td><a href="#">firstname.lastname@gmail.com</a></td>
				<td>Active</td>
				<td>Monrovia, CA</td>
				<td>30</td>
			</tr>
		</tbody>
	</table><!-- .table -->
</div><!-- .table__container -->
</div><!-- .example -->

<p>
	<strong>Stacked</strong><br>
	This final approach will stack each row into it's own mini-table. While the approach makes the table look tailor-made for a mobile device, data comparison between rows is lost.
</p>
<p>This approach is incompatible with <code>&lt;tfoot&gt;&lt;/tfoot&gt;</code>. It also requires the use of JavaScript to duplicate the <code>&lt;thead&gt;&lt;/thead&gt;</code> labels for each data group.</p>
<script>
	$(function() {
		$('.table--stacked').each(function(i) {
			var thead_th = $(this).find('thead th');
			var tbody_tr = $(this).find('tbody tr');
			$(tbody_tr).each(function(e) {
				var column = $(this).find('td')
				$(column).each(function(c) {
					$(this).attr('data-label', $(thead_th[c]).text());
				});
			});
		});
	});
</script>
<div class="example">
<div class="table__container">
	<table class="table table--stacked">
		<thead>
			<tr>
				<th>Customer</th>
				<th>Email</th>
				<th>Location</th>
				<th>Status</th>
				<th>Age</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td>Total users</td>
				<td colspan="4">4</td>
			</tr>
		</tfoot>
		<tbody>
			<tr>
				<td>Corey Capetillo</td>
				<td><a href="#">firstname.lastname@gmail.com</a></td>
				<td>Active</td>
				<td>Los Angeles, CA</td>
				<td>31</td>
			</tr>
			<tr>
				<td>Marisol Plaza</td>
				<td><a href="#">firstname.lastname@gmail.com</a></td>
				<td>Active</td>
				<td>West Covina, CA</td>
				<td>25</td>
			</tr>
			<tr>
				<td>Esli Sugich</td>
				<td><a href="#">firstname.lastname@gmail.com</a></td>
				<td>Active</td>
				<td>Hollywood, CA</td>
				<td>29</td>
			</tr>
			<tr>
				<td>Aimee Zamayoa</td>
				<td><a href="#">firstname.lastname@gmail.com</a></td>
				<td>Active</td>
				<td>Monrovia, CA</td>
				<td>30</td>
			</tr>
		</tbody>
	</table><!-- .table -->
</div><!-- .table__container -->
</div><!-- .example -->

<?php include('includes/footer.php'); ?>
<?php include('includes/header.php'); ?>
<h1>Elements</h1>
<p>Bare-bone, base HTML DOM elements. Class nomiclature follows standard HTML naming conventions, but CSS selectors are used for their improved rendering speed.</p>
<p><strong>Needs:</strong> Lists, Buttons, Images, Forms</p>

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

<p>
	<strong>Form Search</strong><br>
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

<h2 id="responsive-tables">Responsive Tables</h2>
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
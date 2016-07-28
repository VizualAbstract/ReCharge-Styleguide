<?php include('includes/header.php'); ?>
<h1>Components</h1>
<p>Typically made up of <a href="elements.php">Elements</a>, grouped with with a unique class identifier. Serves a specific, but widely-used purpose.</p>
<p>Needs to be abstracted from <a href="index.php">Overview</a>.</p>

<hr>

<h2 id="dropdowns">Dropdowns</h2>
<div class="example">
	<button class="button dropdown">
		<a href="#" class="dropdown__trigger" data-toggle="dropdown__menu">
			Dropdown Menu
		</a><!-- .dropdown__trigger -->
		<ul class="dropdown__menu dropdown-menu list">
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
	</button><!-- .button .dropdown -->
</div>

<h2 id="action-lists">Action Lists</h2>
<div class="example">
<?php include('_components/action-list.php'); ?>
</div><!-- .example -->

<?php include('includes/footer.php'); ?>
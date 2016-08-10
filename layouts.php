<?php include('includes/header.php'); ?>
<h1>Layouts</h1>
<p>Structural elements dependant on each other to build out a page. Houses <a href="components.php">Components</a>.</p>
<p><strong>Needs:</strong> Grid, Header, Footer, Sidebar, Menu, Admin Bar</p>

<hr>

<h2 id="navbar">Navbar</h2>
<div class="example overflow-fix">
<?php include('_layouts/navbar.php'); ?>
</div><!-- .example -->

<h2 id="navbar-setup">Navbar: Setup</h2>
<p>The Setup Navbar is used during the onboarding flow, but will eventually be implemented as an alternate color scheme, as opposed to a new navbar</p>
<div class="example overflow-fix">
<?php include('_layouts/navbar--setup.php'); ?>
</div><!-- .example -->

<h2 id="footer">Footer</h2>
<div class="example">
<div class="footer">
	<div class="footer__container">
		<ul class="footer__links list list--inline">
			<li>
				<a href="#">Link 1</a>
			</li>
			<li>
				<a href="#">Link 1</a>
			</li>
			<li>
				&copy; Copyright 2016 ReCharge Apps
			</li>
		</ul>
	</div><!-- .footer__container -->
</div><!-- .footer -->
</div><!-- .example -->

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


<h2 id="admin-tools">Admin Tools</h2>
<p>Admin Tools is in flux, it may be a dedicated section, a contextual card, or inline, but we're trying to move away from a javascript toolbar.</p>
<div class="example">
<div class="admin-tools">
	<div class="layout__container">
		<h5>ReCharge Admin Tools</h5>
		<fieldset>
			<div class="form__group">
				<label for="delete-account" class="form__label">This will cancel your account</label>
				<button id="delete-account" name="delete-account" class="button button--danger">Delete Account</button>
			</div><!-- .form__group -->
		</fieldset>
		<fieldset>
			<h5>Variable Toggler</h5>
			<ul class="admin-tools__toggler">
				<li>
					is_country_supported == <button data-toggle="is_country_supported">True</button>
				</li>
				<li>
					is_code_installed == <button data-toggle="is_code_installed">True</button>
				</li>
				<li>
					is_password_protected == <button data-toggle="is_password_protected">False</button>
				</li>
				<li>
					is_supported_theme == <button data-toggle="is_supported_theme">False</button>
				</li>
				<li>
					is_bold_installed == <button data-toggle="is_bold_installed">True</button>
				</li>
			</ul>
		</fieldset>
	</div><!-- .container-fluid -->
</div><!-- .admin-tools -->
</div><!-- .example -->

<?php include('includes/footer.php'); ?>
<?php include('includes/header.php'); ?>
<h1>Layouts</h1>
<p>Structural elements dependant on each other to build out a page. Houses <a href="components.php">Components</a>.</p>
<p><strong>Needs:</strong> Grid, Header, Footer, Sidebar, Menu, Admin Bar</p>

<hr>

<h2 class="rc_sg__pattern_title" id="navbar">Navbar</h2>
<div class="example overflow-fix">
<?php include('_layouts/navbar.php'); ?>
</div><!-- .example -->

<h2 class="rc_sg__pattern_title" id="navbar-setup">Navbar: Setup</h2>
<div class="rc_sg__description">
	<p>The Setup Navbar is used during the onboarding flow, but will eventually be implemented as an alternate color scheme, as opposed to a new navbar</p>
</div><!-- .description -->
<div class="example overflow-fix">
<?php include('_layouts/navbar--setup.php'); ?>
</div><!-- .example -->

<h2 class="rc_sg__pattern_title" id="footer">Footer</h2>
<div class="rc_sg__example">
<?php include('_layouts/footer.php'); ?>
</div><!-- .example -->

<h2 class="rc_sg__pattern_title" id="navs">Navs</h2>
<div class="rc_sg__example">
<?php include('_layouts/navs.php'); ?>
</div><!-- .example -->

<hr>

<h2 class="rc_sg__pattern_title" id="grids">Grids</h2>
<div class="rc_sg__example">
<?php include('_layouts/grids.php'); ?>
</div><!-- .example -->

<hr>

<h2 class="rc_sg__pattern_title" id="admin-tools">Admin Tools</h2>
<div class="rc_sg__description">
	<p>Admin Tools is in flux, it may be a dedicated section, a contextual card, or inline, but we're trying to move away from a javascript toolbar.</p>
</div><!-- .description -->
<div class="rc_sg__example">
<?php include('_layouts/admin-tools.php'); ?>
</div><!-- .example -->

<?php include('includes/footer.php'); ?>
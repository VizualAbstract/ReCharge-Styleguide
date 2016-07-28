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

<?php include('includes/footer.php'); ?>
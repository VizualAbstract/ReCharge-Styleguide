<?php include('includes/header.php'); ?>

<h1>Pattern library</h1>
<h5>Missing something?</h5>
<p>The Pattern Library is in a state of transition. It's becoming steadily complex, but it's not our main focus. It will be abstracted as necessary, with the main goal of maintaining usability. The <strong>Library</strong> contains all brand standards, components and snippets. <strong>Scratch Pad</strong> will contain examples of code found throughout the application.</p>

<p>You can view the ongoing status of this page <a href="https://docs.google.com/spreadsheets/d/1J-UcLAgN9eChuWUqMxEUObY6dlxIRZFL5eN2zrT4g18/edit?usp=sharing" target="_blank">here</a>.</p>
<hr>

<?php
	if ($_SERVER['HTTP_HOST'] == 'coreys-recharge-imac.local:5757'){
		$site_url = '';
	} else {
		$site_url = '/styleguide';
	}

	$_utility = scandir('./_utility/');
	$_dynamic = scandir('./_dynamic/');
	$_elements = scandir('./_elements/');
	$_layouts = scandir('./_layouts/');
	$_style = scandir('./_style/');
	$_templates = scandir('./_templates/');
	$_components = scandir('./_components/');
?>

<hr>

<h2 class="rc_sg__pattern_title" id="directory">Directory</h2>
<h3>Utility</h3>
<ul>
	<?php
		for ($i = 2; $i < count($_utility); $i++) {
			$name = str_replace('.php', '', $_utility[$i]);
			echo '<li><a href="' . $site_ur . '/utility.php#' . $name . '">' . ucfirst(str_replace('-', ' ', $name)) . '</a></li>';
		}
	?>
</ul>
<br>

<h3>Style</h3>
<ul>
	<?php
		for ($i = 2; $i < count($_style); $i++) {
			$name = str_replace('.php', '', $_style[$i]);
			echo '<li><a href="' . $site_ur . '/style.php#' . $name . '">' . ucfirst(str_replace('-', ' ', $name)) . '</a></li>';
		}
	?>
</ul>
<br>

<h3>Elements</h3>
<ul>
	<?php
		for ($i = 2; $i < count($_elements); $i++) {
			$name = str_replace('.php', '', $_elements[$i]);
			echo '<li><a href="' . $site_ur . '/elements.php#' . $name . '">' . ucfirst(str_replace('-', ' ', $name)) . '</a></li>';
		}
	?>
</ul>
<br>

<h3>Components</h3>
<ul>
	<?php
		for ($i = 2; $i < count($_components); $i++) {
			$name = str_replace('.php', '', $_components[$i]);
			echo '<li><a href="' . $site_ur . '/components.php#' . $name . '">' . ucfirst(str_replace('-', ' ', $name)) . '</a></li>';
		}
	?>
</ul>
<br>

<h3>Layouts</h3>
<ul>
	<?php
		for ($i = 2; $i < count($_layouts); $i++) {
			$name = str_replace('.php', '', $_layouts[$i]);
			echo '<li><a href="' . $site_ur . '/layouts.php#' . $name . '">' . ucfirst(str_replace('-', ' ', $name)) . '</a></li>';
		}
	?>
</ul>
<br>

<h3>Dynamic</h3>
<ul>
	<?php
		for ($i = 2; $i < count($_dynamic); $i++) {
			$name = str_replace('.php', '', $_dynamic[$i]);
			echo '<li><a href="' . $site_ur . '/dynamic.php#' . $name . '">' . ucfirst(str_replace('-', ' ', $name)) . '</a></li>';
		}
	?>
</ul>
<br>

<?php include('includes/footer.php'); ?>
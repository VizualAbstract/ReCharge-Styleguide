<?php include('includes/header.php'); ?>
<h1>Style</h1>
<p>Establishes the overall look and feel of the app. Colors, typography and spacing is defined here, as are SASS variables.</p>
<p><strong>Needs:</strong> Variables</p>

<hr>

<h2 class="rc_sg__pattern_title" id="colors">Colors</h2>
<div class="rc_sg__example">
<?php include('_style/colors.php'); ?>
</div><!-- .example -->

<h2 class="rc_sg__pattern_title" id="fonts">Fonts</h2>
<div class="rc_sg__example overflow-fix">
<?php include('_style/fonts.php'); ?>
</div><!-- .example -->

<h2 class="rc_sg__pattern_title" id="typography">Typography</h2>
<div class="rc_sg__example">
<?php include('_style/typography.php'); ?>
</div><!-- .example -->

<h2 class="rc_sg__pattern_title" id="animation">Animation</h2>
<p>This started off as a misc item, where we needed a loading animation for a modal. The assets created for this are valuable, although the modal was removed by Mike.</p>
<div class="rc_sg__example">
<?php include('_style/animation.php'); ?>
</div><!-- .example -->

<?php include('includes/footer.php'); ?>
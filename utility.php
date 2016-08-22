<?php include('includes/header.php'); ?>
<h1>Utility</h1>
<p>Resets, browser normalization, css utilities and mixins. Essential for building other elements and components.</p>

<hr>

<h2 class="rc_sg__pattern_title" id="alignment-helpers">Alignment Helpers</h2>
<div class="rc_sg__description">
	<p>Align text and elements with the following text alignment classes.</p>
</div><!-- .rc_sg__description -->
<div class="rc_sg__example">
<?php include('_utility/alignment-helpers.php'); ?>
</div><!-- .rc_sg__example -->

<h2 class="rc_sg__pattern_title" id="responsive-helpers">Resonsive Helpers</h2>
<div class="rc_sg__example">
<table class="table">
	<thead>
		<tr>
			<td></td>
			<th>Phone</th>
			<th>Tablet</th>
			<th>Desktop</th>
			<th>Fullscreen</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>.rc_visible__xs</td>
			<td class="rc_sg__visible">Visible</td>
			<td class="rc_sg__hidden">Hidden</td>
			<td class="rc_sg__hidden">Hidden</td>
			<td class="rc_sg__hidden">Hidden</td>
		</tr>
		<tr>
			<td>.rc_visible__sm</td>
			<td class="rc_sg__hidden">Hidden</td>
			<td class="rc_sg__visible">Visible</td>
			<td class="rc_sg__hidden">Hidden</td>
			<td class="rc_sg__hidden">Hidden</td>
		</tr>
		<tr>
			<td>.rc_visible__md</td>
			<td class="rc_sg__hidden">Hidden</td>
			<td class="rc_sg__hidden">Hidden</td>
			<td class="rc_sg__visible">Visible</td>
			<td class="rc_sg__hidden">Hidden</td>
		</tr>
		<tr>
			<td>.rc_visible__lg</td>
			<td class="rc_sg__hidden">Hidden</td>
			<td class="rc_sg__hidden">Hidden</td>
			<td class="rc_sg__hidden">Hidden</td>
			<td class="rc_sg__visible">Visible</td>
		</tr>
	</tbody>
</table><!-- .table -->

<table class="table">
	<thead>
		<tr>
			<td></td>
			<th>Phone</th>
			<th>Tablet</th>
			<th>Desktop</th>
			<th>Fullscreen</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>.rc_hidden__xs</td>
			<td class="rc_sg__hidden">Hidden</td>
			<td class="rc_sg__visible">Visible</td>
			<td class="rc_sg__visible">Visible</td>
			<td class="rc_sg__visible">Visible</td>
		</tr>
		<tr>
			<td>.rc_hidden__sm</td>
			<td class="rc_sg__visible">Visible</td>
			<td class="rc_sg__hidden">Hidden</td>
			<td class="rc_sg__visible">Visible</td>
			<td class="rc_sg__visible">Visible</td>
		</tr>
		<tr>
			<td>.rc_hidden__md</td>
			<td class="rc_sg__visible">Visible</td>
			<td class="rc_sg__visible">Visible</td>
			<td class="rc_sg__hidden">Hidden</td>
			<td class="rc_sg__visible">Visible</td>
		</tr>
		<tr>
			<td>.rc_hidden__lg</td>
			<td class="rc_sg__visible">Visible</td>
			<td class="rc_sg__visible">Visible</td>
			<td class="rc_sg__visible">Visible</td>
			<td class="rc_sg__hidden">Hidden</td>
		</tr>
	</tbody>
</table><!-- .table -->

<table class="table">
	<thead>
		<tr>
			<th>Visibility Type</th>
			<th>Display Type</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>.rc_sg__??__block</td>
			<td>display: block;</td>
		</tr>
		<tr>
			<td>.rc_sg__??__inline</td>
			<td>display: inline;</td>
		</tr>
		<tr>
			<td>.rc_sg__??__inline-block</td>
			<td>display: inline-block;</td>
		</tr>
	</tbody>
</table><!-- .table -->
</div><!-- .rc_sg__example -->

<h2 class="rc_sg__pattern_title" id="structural-helpers">Strucutral Helpers</h2>
<p>
	<code>.clearfix</code> - Helpful class to contain floats, clearing an element that otherwise has display problems.
</p>

<hr>
<?php include('includes/footer.php'); ?>
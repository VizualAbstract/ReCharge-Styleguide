<div class="date-range">
	<div class="date-range__start">
		<label for="start_date" class="form__label">Start date</label>
		<input type="text" name="start_date" id="start_date" class="form__date">
	</div><!-- .date-range__start -->
	<div class="date-range__end">
		<label for="end_date" class="form__label">End date</label>
		<input type="text" name="end_date" id="end_date" class="form__date">
	</div><!-- .date-range__end -->
</div><!-- .date-picker -->

<script>
	$(function() {
		var picker = new Pikaday({
			field: $('#start_date')[0],
			format: 'YYYY-MM-DD'
		});
	});
</script>
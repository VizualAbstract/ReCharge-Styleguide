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
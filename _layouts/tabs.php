<div class="tabs">
	<div class="tabs__header">
		<ul class="tabs__list list list--inline">
			<li class="tabs__list__item">
				<a href="#">First link</a>
			</li><!-- .tabs__list__item -->
			<li class="tabs__list__item active">
				<a href="#">Active link</a>
			</li><!-- .tabs__list__item -->
			<li class="tabs__list__item">
				<span>No link</span>
			</li><!-- .tabs__list__item -->
			<li class="tabs__list__item">
				<a href="#">Last link</a>
			</li><!-- .tabs__list__item -->
		</ul><!-- .tabs__list -->
	</div><!-- .tabs__header -->
	<div class="tabs__content">
		<div class="layout__container">
			<div class="layout">
				<div class="layout__content">
					<p>.layout__content</p>
					<p>&nbsp;</p><br><p>&nbsp;</p><br><p>&nbsp;</p>
				</div><!-- .layout__content -->
				<div class="layout__sidebar">
					<p>.layout__sidebar</p>
				</div><!-- .layout__sidebar-->
			</div><!-- .layout -->
		</div><!-- .layout__container -->
	</div><!-- .tabs__content -->
	<hr>
	<div class="tabs__content">
		<div class="layout__container">
			<div class="layout">
				<div class="layout__content">
					<p>.layout__content</p>
					<p>&nbsp;</p><br><p>&nbsp;</p><br><p>&nbsp;</p>
				</div><!-- .layout__content -->
				<div class="layout__sidebar layout__sidebar--statistics">
					<p>.layout__sidebar</p>
				</div><!-- .layout__sidebar-->
			</div><!-- .layout -->
		</div><!-- .layout__container -->
	</div><!-- .tabs__content -->
	<hr>
	<div class="tabs__content">
		<div class="layout__container">
			<div class="layout">
				<div class="layout__content">
					<p>.layout__content</p>
					<p>&nbsp;</p><br><p>&nbsp;</p><br><p>&nbsp;</p>
				</div><!-- .layout__content -->
				<div class="layout__sidebar layout__sidebar--statistics text--center">

					<div class="stat">
						<h3 class="stat__value">173</h3>
						<div class="stat__label">
							Active customers
						</div><!-- .stat__label -->
						<span class="tooltip-button" data-toggle="rc_tooltip" data-placement="left" title="<p>Active customers may include  customers that have had their  payment info declined because  they are not yet cancelled. </p>"></span>
					</div><!-- .stat -->

					<div class="stat">
						<h3 class="stat__value">16%</h3>
						<div class="stat__label">
							Recurring churn
						</div><!-- .stat__label -->
						<span class="tooltip-button" data-toggle="rc_tooltip" data-placement="left" title="<p>Percentage of cancelled  customers, including payment  declines between their first and  2nd charge.</p><p>Percentage does not include  customers created in the last  30 days. </p>"></span>
					</div><!-- .stat -->

					<div class="stat">
						<h3 class="stat__value">103</h3>
						<div class="stat__label">
							Average number of charges
						</div><!-- .stat__label -->
						<span class="tooltip-button" data-toggle="rc_tooltip" data-placement="left" title="<p>Number includes customers that  have signed up in the last 30 days.</p>"></span>
					</div><!-- .stat -->

					<div class="stat">
						<h3 class="stat__value">$10,000,000</h3>
						<div class="stat__label">
							Average revenue per customer
						</div><!-- .stat__label -->
						<span class="tooltip-button" data-toggle="rc_tooltip" data-placement="left" title="<p>Revenue does not include taxes or  shipping costs.</p>"></span>
					</div><!-- .stat -->
				</div><!-- .layout__sidebar-->
			</div><!-- .layout -->
		</div><!-- .layout__container -->
	</div><!-- .tabs__content -->
</div><!-- .tabs -->

<style>
.new .stat {
	max-width: 210px;
	margin: 0 auto 30px;
	display: block;
	clear: both;
}

.new .stat .rc_popover {
	text-align: left;
}

.new .stat .popover-button,
.new .stat .tooltip-button {
	color: #FFF;
}

.new .stat .popover-button:hover,
.new .stat .tooltip-button:hover {
	color: #4dd6b7;
}

.new .stat .tooltip-box,
.new .stat .popover-box {
	width: 290px !important;
}
</style>
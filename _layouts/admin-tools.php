<div class="admin-tools">
	<div class="layout__container">
		<h5>RECHARGE ADMIN TOOLS</h5>
		<fieldset>
			<div class="form__group">
				<label for="delete-account" class="form__label">This will cancel your account</label>
				<button id="delete-account" name="delete-account" class="button button--danger">Delete Account</button>
			</div><!-- .form__group -->
		</fieldset>
		<fieldset>
			<h5>Variable Toggler</h5>
			<ul class="admin-tools__toggler">
				<li>is_country_supported == <button data-toggle="is_country_supported">True</button></li>
				<li>is_code_installed == <button data-toggle="is_code_installed">True</button></li>
				<li>is_password_protected == <button data-toggle="is_password_protected">False</button></li>
				<li>is_supported_theme == <button data-toggle="is_supported_theme">False</button></li>
				<li>is_bold_installed == <button data-toggle="is_bold_installed">True</button></li>
			</ul><!-- .admin-tools__toggler -->
		</fieldset>
		<fieldset>
			<ul class="rc_toggle-list">
				<li class="rc_toggle-list__item">
					<div class="rc_toggle-list__item__content">
						<label>
							<a href="/new/settings/notifications/customer-action-log">Customer Action Log</a>
							<span class="disabled_status">Disabled</span>
						</label>
						<p>Sent to storeowner, daily log of customer's actions.</p>
					</div><!-- .rc_toggle-list__item__content -->
					<div class="rc_toggle-list__item__action">
						<label for="customer_actions_summary" class="switch switch--small">
							<div class="switch__inner">
								<input type="checkbox" name="customer_actions_summary" id="customer_actions_summary" checked="checked" class="switch__input">
								<span class="switch__overlay"></span>
								<span class="switch__left"></span>
								<span class="switch__right"></span>
							</div><!-- .switch__inner -->
						</label><!-- .switch -->
					</div><!-- .rc_toggle-list__item__action -->
				</li><!-- .rc_toggle-list__item -->
			</ul><!-- .rc_toggle-list -->
		</fieldset>
	</div><!-- .container-fluid -->
</div><!-- .admin-tools -->
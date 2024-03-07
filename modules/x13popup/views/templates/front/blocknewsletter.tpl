<div class="x13-popup-newsletter">
	<div class="block_content_newsletter">
		<p class="newsletter-content">{$content}</p>
		<p class="x13-popup-newsletter-message" class="alert"></p>
		<form action="{$modules_dir}x13popup/ajax.php" method="post" class="x13-popup-newsletter-form">
			<p>
				<input placeholder="{l s='your e-mail' mod='x13popup'}" class="inputNew x13-newsletter-input" type="text" name="email" size="18" value="{if isset($value) && $value}{$value}{/if}" />
				<input type="hidden" value="ok" name="submitNewsletter" />
				<input type="hidden" name="action" value="0" />
				<input type="hidden" name="secure_key" value="{$moduleKey}" />
                <input class="newsletter-sweet-field" type="text" name="website">
                <input class="newsletter-sweet-field" type="text" name="url">
                <input class="newsletter-sweet-field" type="text" name="firstname">
                <input class="newsletter-sweet-field" type="text" name="lastname">
				{hook h='displayX13PrivacyManagerConsent' element='newsletter'}
				<input type="submit" value="{l s='sign up' mod='x13popup'}" class="button_zapisz" />
			</p>
		</form>
	</div>
</div>
<style>
.newsletter-sweet-field {
  position: absolute; left: -10000px;
}
</style>
<!-- /Block Newsletter module-->

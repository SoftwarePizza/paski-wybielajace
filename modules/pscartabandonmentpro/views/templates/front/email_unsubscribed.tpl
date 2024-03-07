{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *}

{* Load *}
<link rel=stylesheet type="text/css" href="{$bootstrap}">
<link rel=stylesheet type="text/css" href="{$css}">
<script type="text/javascript" src="{$jquery}"></script>
<script type="text/javascript" src="{$js}"></script>
{if isset($controller_url)}
<script type="text/javascript">
	var cap_controller_url = "{$controller_url nofilter}";
</script>
{/if}

{* Template *}
<div class="container">
	<div class="row">
		<a href="{$url}"><img class="col-centered" src="{$logo}"/></a>
	</div>
	<div class="row">
		{if !$wrongToken}
			{if !$bCustomerAlreadyUnsubscribed}
				<h4>{l s='You will no longer receive a cart reminder email on your email address: ' mod='pscartabandonmentpro'}<br/>{$email}</h4>
				<div id="action">
					<a href="{$url}" class="btn btn-primary">{l s='Cancel' mod='pscartabandonmentpro'}</a>
					<button name="confirmUnsubscribe" type="text" class="btn btn-secondary">{l s='Confirm' mod='pscartabandonmentpro'}</button>
					<input type="hidden" value="{$token}" name="tk" id="token" />
					<input type="hidden" value="{$customerid}" name="customer" id="customer"/>
				</div>
				<div id="ajax_return" class="alert"></div>
			{else}
				<h4>{l s='You already no longer receive a cart reminder email on your email address: ' mod='pscartabandonmentpro'}<br/>{$email}</h4>
				<a href="{$url}" class="btn btn-primary">{l s='Return to the shop' mod='pscartabandonmentpro'}</a>
			{/if}
		{else} 
			<h4>{l s='Bad token' mod='pscartabandonmentpro'}</h4>
		{/if}
	</div>
</div>

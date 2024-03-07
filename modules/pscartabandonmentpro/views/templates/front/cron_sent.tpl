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

<link rel=stylesheet type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

{if !empty($sendList)}
	{foreach from=$sendList item=customers key=key}
	<div class="container col-lg-12">
		<h3><b>Reminder #{$key} : </b>{$customers|count} mails have been sent.</h3>
		<table class="table table-striped">
			<tr>
				<th>ID CUSTOMER</th>
				<th>ID CART</th>
				<th>FIRSTNAME</th>
				<th>LASTNAME</th>
				<th>EMAIL</th>
			</tr>
			{foreach from=$customers item=item key=key2}
			<tr>
				<td>{$item.id_customer}</td>
				<td>{$item.id_cart}</td>
				<td>{$item.firstname}</td>
				<td>{$item.lastname}</td>
				<td>{$item.email}</td>
			</tr>
			{/foreach}
		</table>
	</div>
	{/foreach}
{else}
	<div class="container col-lg-12">
		<h3 style="text-align:center;">{l s='No email was sent.' mod='pscartabandonmentpro'}</h3>
		<h4 style="text-align:center;">{l s='You may check the shop Logs in your backoffice.' mod='pscartabandonmentpro'}</h4>
	</div>
{/if}

{* custom CSS *}
<style>
	.container{
		margin-top: 25px;
	}
</style>
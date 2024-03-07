{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
{literal}
<script>
	_ceneo('transaction', {
		client_email: '{/literal}{$email|escape:'javascript':'UTF-8'}{literal}',
		order_id: '{/literal}{$order_id|escape:'javascript':'UTF-8'}{literal}',
		shop_products: [
		{/literal}
		{foreach from=$products item=product}
            {literal}{{/literal}
				id: '{$product['id_product']|escape:'javascript':'UTF-8'}',
				price: {$product['unit_price_tax_incl']|escape:'javascript':'UTF-8'},
				quantity: {$product['product_quantity']|escape:'javascript':'UTF-8'},
				currency: '{$currency|escape:'javascript':'UTF-8'}'
            {literal}},{/literal}
        {/foreach}
        {literal}
		],{/literal}
        {literal}
		work_days_to_send_questionnaire: {/literal}{$days|escape:'javascript':'UTF-8'}{literal},
		amount: {/literal}{$total_paid|escape:'javascript':'UTF-8'}{literal}
	});
</script>
{/literal}

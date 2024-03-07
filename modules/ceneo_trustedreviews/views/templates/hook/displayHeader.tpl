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
{if isset($guid) && $guid !== ''}
{literal}
	<script>(function (w, d, s, i, dl){w._ceneo = w._ceneo || function () {
            w._ceneo.e = w._ceneo.e || []; w._ceneo.e.push(arguments); };
			w._ceneo.e = w._ceneo.e || [];
			dl = dl === undefined ? "dataLayer" : dl;
			const f = d.getElementsByTagName(s)[0], j = d.createElement(s);
			j.defer = true;
			j.src = "https://ssl.ceneo.pl/ct/v5/script.js?accountGuid=" + i +
				"&t=" + Date.now() + (dl ? "&dl=" + dl : '');
			f.parentNode.insertBefore(j, f);
	})(window, document, "script", "{/literal}{$guid|escape:'javascript':'UTF-8'}{literal}");
	</script>
{/literal}
{/if}

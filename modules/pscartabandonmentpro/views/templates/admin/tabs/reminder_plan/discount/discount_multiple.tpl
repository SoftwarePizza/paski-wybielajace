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
<div class="discount">
    <div class="row nopadding-left col-lg-10 col-xs-10 col-lg-offset-1 col-xs-offset-1 nopadding-left">

        <div class="discount-from-to nopadding-left col-lg-2 col-xs-2">
            <div class="input-group">
                <input type="text" name="discount_from" class="discount_from" value="{if isset($discount['discount_from'])}{$discount['discount_from']}{else}{$key}{/if}"/>
                <span class="input-group-addon" id="discount_from">{$currency}</span>
            </div>
            <input type="hidden" name="discount_to" class="discount_to" value="{if isset($discount['discount_to'])}{$discount['discount_to']}{else}{$key+1}{/if}"/>
       </div>

        <div class="nopadding-left col-lg-12 col-xs-12">
            <div class="intern-section nopadding-left col-lg-2 col-xs-2">
                <p class="range-number">
                    <i class="material-icons">arrow_downward</i>{l s='Range' mod='pscartabandonmentpro'} <span class="range">{$key}</span>
                </p>
            </div>
            <div class="col-lg-9 col-xs-9 col-lg-offset-1 col-xs-offset-1">
                {include file="./discount_template.tpl"}
            </div>
        </div>
    </div>
    <div class="col-lg-1 col-xs-1 remove_line">
        <i class="material-icons">delete</i>
    </div>
</div>
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

<div class="col-lg-12 col-xs-12 reminder_info">
    <div class="col-lg-2 col-xs-2 align_right">
        <img src="{$module_url}/views/img/templates/{$sEmailTemplateName}.jpg"/>
    </div>
    <div class="col-lg-10 col-xs-10">
        <section class="col-lg-12 col-xs-12">
            <div class="col-lg-2 col-xs-2 align_right">
                {l s='Email\'s template' mod='pscartabandonmentpro'} :
            </div>
            <div class="col-lg-10 col-xs-10 align_left">
                {$sEmailTemplateName}
            </div>
        </section>

        <section class="col-lg-12 col-xs-12">
            <div class="col-lg-2 col-xs-2 align_right">
                {l s='Target' mod='pscartabandonmentpro'} :
            </div>
            <div class="col-lg-10 col-xs-10 align_left">
                {$sFinalTargetInfos}
            </div>
        </section>

        <section class="col-lg-12 col-xs-12">
            <div class="col-lg-2 col-xs-2 align_right">
                {l s='Discount' mod='pscartabandonmentpro'} :
            </div>
            <div class="col-lg-10 col-xs-10 align_left">
                {foreach from=$aFinalDiscountInfos item=item key=key}
                    <p>{$item}</p>
                {/foreach}
            </div>
        </section>
    </div>
</div>
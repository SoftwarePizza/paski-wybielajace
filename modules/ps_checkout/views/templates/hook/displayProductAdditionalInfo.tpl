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

<div class="ps_checkout payment-method-logo-block left">
  <div class="ps_checkout payment-method-logo-block-title">
    <img src="{$modulePath}views/img/lock_checkout.svg" alt="">
    {l s='100% secure payments' mod='ps_checkout'}
  </div>
  {foreach from=$paymentOptions item=paymentOption}
    {if $paymentOption == 'card'}
      <div class="ps_checkout payment-method-logo w-fixed">
        <div class="wrapper"><img src="{$modulePath}views/img/visa.svg" alt=""></div>
      </div>
      <div class="ps_checkout payment-method-logo w-fixed">
        <div class="wrapper"><img src="{$modulePath}views/img/mastercard.svg" alt=""></div>
      </div>
      <div class="ps_checkout payment-method-logo w-fixed">
        <div class="wrapper"><img src="{$modulePath}views/img/amex.svg" alt=""></div>
      </div>
    {else}
      <div class="ps_checkout payment-method-logo w-fixed">
          <div class="wrapper"><img src="{$modulePath}views/img/{$paymentOption}.svg" alt=""></div>
      </div>
    {/if}
  {/foreach}
</div>

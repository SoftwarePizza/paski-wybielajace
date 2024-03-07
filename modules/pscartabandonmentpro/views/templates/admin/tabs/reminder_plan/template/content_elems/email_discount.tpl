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

<div id="email_discount" class="row clear">
    <div class="col-lg-12 col-xs-12">
        <label>{l s='Discount Text' mod='pscartabandonmentpro'}</label>
    </div>
    <div class="col-lg-10 col-xs-10">
        <p>{l s='This text will only display in the email if the customer cart is eligible to a discount, according to your settings in step 2.' mod='pscartabandonmentpro'}</p>
    </div>
    <div class="col-lg-10 col-xs-10">
        <div class="cap-lang-form">
            <textarea name="email_discount_{$lang.id_lang|intval}"  class="cap-editor email_discount {if isset($template_datas[$lang.id_lang]['email_discount'])}has_content{/if}">
                {if isset($template_datas[$lang.id_lang]['email_discount'])}
                    {$template_datas[$lang.id_lang]['email_discount'] nofilter}
                {else}
                    <p>{$email_discount_default[0]}&nbsp;</p>
                    <p>{$email_discount_default[1]}&nbsp;</p>
                    <p>{$email_discount_default[2]}&nbsp;</p>
                    <p>{$email_discount_default[3]}&nbsp;</p>
                {/if}
            </textarea>
        </div>
    </div>
    <div class="col-lg-10 col-xs-10">
        <p>{l s='Add the following tags to customize your message' mod='pscartabandonmentpro'}</p>
    </div>
    <div class="col-lg-10 col-xs-10">
        {foreach from=$discount_content key=name item=content}
            <button class="email_content_custom" data-content="{$content}" data-type="discount">
                <i class="material-icons">add_circle</i>
                {$name}
            </button>
        {/foreach}
    </div>
</div>

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

<div id="email_unsubscribe" class="row clear">
    <div class="col-lg-12 col-xs-12">
        <label>{l s='Unsubscribe text' mod='pscartabandonmentpro'}</label>
    </div>
    <div class="col-lg-10 col-xs-10">
        <div class="cap-lang-form">
            <textarea name="email_unsubscribe_{$lang.id_lang|intval}" class="cap-editor email_unsubscribe {if isset($template_datas[$lang.id_lang]['email_unsubscribe'])}has_content{/if}">
                {if isset($template_datas[$lang.id_lang]['email_unsubscribe'])}
                    {$template_datas[$lang.id_lang]['email_unsubscribe']}
                {else}
                    <p>{ldelim}unsubscribe{rdelim}</p>
                {/if}
            </textarea>
        </div>
    </div>
    <div class="col-lg-10 col-xs-10">
        <p>{l s='Add a unsusbcribe link to your footer message.' mod='pscartabandonmentpro'}</p>
    </div>
    <div class="col-lg-10 col-xs-10">
        {foreach from=$unsubscribe_content key=name item=content}
            <button class="email_content_custom" data-content="{$content}" data-type="unsubscribe">
                <i class="material-icons">add_circle</i>
                {$name}
            </button>
        {/foreach}
    </div>
</div>
<div class="row clear">
    <div class="col-lg-12 col-xs-12">
        <label>{l s='Unsubscribe link text' mod='pscartabandonmentpro'}</label>
    </div>
        <div class="col-lg-10 col-xs-10">
        <p>{l s='This text will replace the Unsubscribe link in the footer. The customer will be able to click on this text in order to never receive a reminder from you again. ' mod='pscartabandonmentpro'}</p>
    </div>
    <div id="email_unsubscribe_text" class="col-lg-10 col-xs-10">
        <input type="text" autocomplete="off" class="form-control cap-lang-form" name="email_unsubscribe_text"  placeholder="{l s='Unsubscribe text' mod='pscartabandonmentpro'}" 
            value="{if isset($template_datas[$lang.id_lang]['email_unsubscribe_text'])}{$template_datas[$lang.id_lang]['email_unsubscribe_text']}{/if}"
        />
        <span class="caract-count">
            <span class="amount">{if isset($template_datas[$lang.id_lang]['email_unsubscribe_text'])}{$template_datas[$lang.id_lang]['email_unsubscribe_text']|strlen}{else}0{/if}</span>/100 
            {l s='characters' mod='pscartabandonmentpro'}
        </span>
    </div>
</div>
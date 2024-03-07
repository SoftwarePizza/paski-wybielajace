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

<div class="row clear cap-email-socials">
    <div class="col-lg-12 col-xs-12">
        <label>{l s='Social networks links' mod='pscartabandonmentpro'}</label>
    </div>
    <div id="email_link_facebook" class="input-group col-lg-10 col-xs-10">
        <span class="input-group-addon"><img src="{$img_url}/templates/social/facebook_revert.png"/></span>
        <input type="text" autocomplete="off" data-social="facebook" class="form-control cap-lang-form" name="email_link_facebook"  placeholder="URL to your Facebook page (optional)" 
            value="{if isset($template_datas[$lang.id_lang]['email_link_facebook'])}{$template_datas[$lang.id_lang]['email_link_facebook']}{/if}"
        />
    </div>
    <div id="email_link_twitter"  class="input-group col-lg-10 col-xs-10">
        <span class="input-group-addon"><img src="{$img_url}/templates/social/twitter_revert.png"/></span>
        <input type="text" autocomplete="off" data-social="twitter" class="form-control cap-lang-form" name="email_link_twitter"  placeholder="URL to your Twitter page (optional)" 
            value="{if isset($template_datas[$lang.id_lang]['email_link_twitter'])}{$template_datas[$lang.id_lang]['email_link_twitter']}{/if}"
        />
    </div>
    <div id="email_link_instagram" class="input-group col-lg-10 col-xs-10">
        <span class="input-group-addon"><img src="{$img_url}/templates/social/instagram_revert.png"/></span>
        <input type="text" autocomplete="off" data-social="instagram" class="form-control cap-lang-form" name="email_link_instagram"  placeholder="URL to your Instagram page (optional)" 
            value="{if isset($template_datas[$lang.id_lang]['email_link_instagram'])}{$template_datas[$lang.id_lang]['email_link_instagram']}{/if}"
        />
    </div>
</div>
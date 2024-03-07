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

<section id="cancel_confirm" class="cap_popin">
    <div class="content_cancel">
        <h2>{l s='Leave the configuration steps' mod='pscartabandonmentpro'}</h2>
        <div class="cancel_text col-lg-12">
            <p>{l s='Are you sure you want to leave the configuration steps ? You will lose all your un saved settings for this reminder.' mod='pscartabandonmentpro'}</p>
        </div>
        <div class="d-flex justify-content-end col-lg-12">
            <button name="cancel_cancel" id="cancel_cancel" type="submit" class="btn btn-primary">{l s='Return to configuration' mod='pscartabandonmentpro'}</button>
            <button name="confirm_cancel" id="confirm_cancel" type="submit" class="btn btn-back">{l s='Yes I\'m sure' mod='pscartabandonmentpro'}</button>
        </div>
    </div>
</section>
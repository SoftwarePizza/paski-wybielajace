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

<section id="delete_reminder" class="cap_popin">
    <div class="content_cancel">
        <h2>{l s='Delete the reminder' mod='pscartabandonmentpro'}</h2>
        <div class="cancel_text col-lg-12">
            <p>{l s='Are you sure you want to delete this reminder ?' mod='pscartabandonmentpro'}</p>
        </div>
        <div class="buttons d-flex justify-content-end col-lg-12">
            <button name="cancel" type="submit" class="btn btn-primary">{l s='Cancel' mod='pscartabandonmentpro'}</button>
            <button name="confirm" type="submit" class="btn btn-back" data-delete_id='0'>{l s='Yes I\'m sure' mod='pscartabandonmentpro'}</button>
        </div>
        <div class="ajax_return d-flex justify-content-end col-lg-12">
            <div class="success">
                <i class="material-icons">done</i>
            </div>
            <div class="error">
                <i class="material-icons">error</i> <span>{l s='An error occured' mod='pscartabandonmentpro'}</span>
            </div>
        </div>
    </div>
</section>
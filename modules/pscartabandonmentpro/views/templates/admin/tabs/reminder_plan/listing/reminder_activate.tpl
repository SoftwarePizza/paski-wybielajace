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

<label class="col-lg-12" id="reminder_active_{$key}" for="reminder_active_{$key}" data-cart_reminder_id='{$id}'>
    <section class="switch-input {if $active}-checked{/if}">
        <input data-toggle="switch" class="switch-new" data-inverse="true" type="checkbox" name="reminder_active_{$key}" checked="">
    </section> 
    <span class="switch_text switch-on" style="{if !$active}display:none;{/if}">{l s='Activated' mod='pscartabandonmentpro'}</span>
    <span class="switch_text switch-off" style="{if $active}display:none;{/if}">{l s='Disabled' mod='pscartabandonmentpro'}</span>
</label>

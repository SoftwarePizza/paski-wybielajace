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

{if !empty($reminderList)}
<div id="reminder_tests" class="reminder_listing panel panel-default col-xl-10 col-xl-offset-1 col-lg-12 col-xs-12 col-lg-offset-0" >
    <div class="panel-heading">
        <i class="material-icons">send</i>{l s='Test your reminders' mod='pscartabandonmentpro'}
    </div>
    <div class="panel-body">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="col-lg-12 top">
                <p>{l s='By clicking on "send emails", you will receive instantly every reminder. That way, you can check if they match with your expectations depending on the cart content.' mod='pscartabandonmentpro'}</p>
            </div>
            <div class="col-lg-3">
                <input class="form-control col-lg-6" type="email" name="reminder_test_email" value="{$reminder_test_email}" placeholder="test@email_domain.com"/>
            </div> 
            <div class="col-lg-12 alerts">
                {* Manage Ajax return msg*}
                <div class="col-lg-12 ajax_return false alert alert-warning"><p>{l s='Invalid Email.' mod='pscartabandonmentpro'}</p></div>
                <div class="col-lg-12 ajax_return true alert alert-success"><p>{l s='All emails have been sent' mod='pscartabandonmentpro'}</p></div>
            </div>
        </div>      
    </div>
    <div class="panel-footer">
        <div class="d-flex justify-content-end">
            <button name="submit_email_test" id="submit_email_test" type="submit" class="btn btn-primary">
                {l s='Send emails' mod='pscartabandonmentpro'}
            </button>
        </div>
    </div>
</div>
{/if}

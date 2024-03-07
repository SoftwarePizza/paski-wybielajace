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

{* Date picker *}
<script src="{$datepicker_script}"></script>
<div class="panel panel-default col-lg-4 col-lg-offset-7 col-md-4 col-md-offset-7">
    <div class="panel-body">
        <div class="input-group col-lg-5">
            <span class="input-group-addon">{l s='From' mod='pscartabandonmentpro'}</span>
            <input class="form-group" autocomplete="off" type="text" id="from" name="from" placeholder="{l s='start' mod='pscartabandonmentpro'}">
        </div>
        <div class="input-group col-lg-5 col-lg-offset-2">
            <span class="input-group-addon">{l s='To' mod='pscartabandonmentpro'}</span>
            <input class="form-group" autocomplete="off" type="text" id="to" name="to" placeholder="{l s='now' mod='pscartabandonmentpro'}">
        </div>
    </div>
</div>

{* Global View *}
<div id="view_datas">
    {include file='./datas.tpl'}
</div>
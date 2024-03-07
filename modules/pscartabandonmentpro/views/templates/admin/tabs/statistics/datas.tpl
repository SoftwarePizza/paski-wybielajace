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

{* Global View *}
<div class="panel panel-default col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0">
    <div class="panel-heading">
        <i class="material-icons">remove_red_eye</i>{l s='Global view' mod='pscartabandonmentpro'}
    </div>
    {include file='./elements/global_view.tpl'}
</div>

{* Stats by reminder *}
{assign var="i" value="0"}
{foreach from=$generalStatsList item=item key=key}
{assign var="i" value="{$i + 1}"}
<div class="panel panel-default col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0">
    <div class="panel-heading">
        <i class="material-icons">email</i>{l s='Reminder' mod='pscartabandonmentpro'} {$i} ({$item.cart_frequency_number} {$item.cart_frequency_type})
    </div>
    {include file='./elements/range_datas.tpl' data=$item}
</div>
{/foreach}
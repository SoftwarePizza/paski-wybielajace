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

<div id="sendy" class="show_template"
    {if (isset($template_appearance['model_name']) && $template_appearance['model_name'] != 'sendy')}
    style="display: none;"
    {/if}
>
    {include file="../../../emails/sendy.tpl"}
</div>
<div id="boxy" class="show_template" 
    {if (isset($template_appearance['model_name']) && $template_appearance['model_name'] != 'boxy') || !isset($template_appearance['model_name'])}
    style="display: none;"
    {/if}
>
    {include file="../../../emails/boxy.tpl"}
</div>
<div id="puffy" class="show_template" 
    {if (isset($template_appearance['model_name']) && $template_appearance['model_name'] != 'puffy') || !isset($template_appearance['model_name'])}
    style="display: none;"
    {/if}
>
    {include file="../../../emails/puffy.tpl"}
</div>
<div class="responsive form-control-label">
    <span class="device" onclick="openTemplateInDeviceWindow('smartphone')">
        <i class="material-icons">smartphone</i> {l s='Mobile view' mod='pscartabandonmentpro'}
    </span>
    <span class="device" onclick="openTemplateInDeviceWindow('tablet')">
        <i class="material-icons">tablet</i> {l s='Tablet view' mod='pscartabandonmentpro'}
    </span>
</div>
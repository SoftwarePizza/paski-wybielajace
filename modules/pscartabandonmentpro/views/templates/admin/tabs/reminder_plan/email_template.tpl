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

<div id="reminder_email_template" class="steps_panel form-group col-lg-12">
    <script>
        var color1 = '{$color1}';
        var color2 = '{$color2}';
    </script>
    <script src="{$pickr}"></script>
    <div class="col-lg-5">
        {include file="./template/appearance.tpl"}
        {include file="./template/content.tpl"}
    </div>
    <div id="template_live-edit" class="col-lg-7">
        {include file="./template/live.tpl"}
    </div>
</div>
{include file="./popin/save_error_popin.tpl"}
{include file="./template/reassurance_block.tpl"}

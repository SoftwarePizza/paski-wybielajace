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

<section id="conversions">
    <div class="panel-body">
        {if $data.amount_send == 0}
        <div class="no_data col-lg-12">
            {l s='No data for this reminder.' mod='pscartabandonmentpro'}
        </div>
        {else}
        <table class="table">
            <thead>
                <th>{l s='Amount sent' mod='pscartabandonmentpro'}<br/>{$data.amount_send}</th>
                <th>{l s='Opened emails' mod='pscartabandonmentpro'}<br/>{$data.visualize}</th>
                <th>{l s='Clicked emails' mod='pscartabandonmentpro'}<br/>{$data.email_clicked}</th>
                <th>{l s='Converted carts' mod='pscartabandonmentpro'}<br/>{$data.nb_conversion}</th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="col-lg-12">
                            <div class="stat_visu col-lg-3">

                            </div>
                            <div class="stat_rise col-lg-9"
                                 style="clip-path: polygon(0 0, 100% {100 - $data.between_send_and_opened}%, 100% 100%, 0% 100%);">
                                <div class="percent">{$data.between_send_and_opened}% </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="col-lg-12">
                            <div class="stat_visu col-lg-3" 
                                style="height: {220 * ($data.between_send_and_opened/100)}px">
                            </div>
                            <div class="stat_rise col-lg-9"
                                style="height: {220 * ($data.between_send_and_opened/100)}px;
                                clip-path: polygon(0 0, 100% {100 - $data.between_opened_and_clicked}%, 100% 100%, 0% 100%);">
                                <div class="percent">{$data.between_opened_and_clicked}% </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="col-lg-12">
                            <div class="stat_visu col-lg-3"  
                                style="height: {(220 * ($data.between_send_and_opened/100)) * ($data.between_opened_and_clicked/100)}px">
                            </div>
                            <div class="stat_rise col-lg-9"
                                style="height: {(220 * ($data.between_send_and_opened/100)) * ($data.between_opened_and_clicked/100)}px;
                                clip-path: polygon(0 0, 100% {100 - $data.between_clicked_and_converted}%, 100% 100%, 0% 100%);">
                                <div class="percent">{$data.between_clicked_and_converted}% </div>
                            </div>
                        </div>
                    </td>
                    <td>
                         <div class="stat_visu col-lg-3"  
                            style="height: {((220 * ($data.between_send_and_opened/100)) * ($data.between_opened_and_clicked/100)) * ($data.between_clicked_and_converted/100)}px">
                        </div>
                        <div class="stat_rise col-lg-9" style="height: 0;"
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        {/if}
   </div>
</section>


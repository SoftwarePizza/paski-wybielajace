/**
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
 */

let ajaxLoadDatasByDateFromTo = (dateFrom, dateTo) => {
    let cap_controller = getControllerName('statistics');
    let cap_controller_url = getControllerUrl('statistics');
 
    $.ajax({
        type: 'POST',
        url: cap_controller_url,
        dataType: 'html',
        async: false,
        data: {
            controller : cap_controller,
            dateFrom : dateFrom,
            dateTo : dateTo,
            action : 'LoadTemplate',
            ajax : true,
        },
        success : (data) => {
            $('#view_datas').html(data);
        }
    });
}
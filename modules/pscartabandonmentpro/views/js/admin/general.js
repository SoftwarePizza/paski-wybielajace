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

/**
 * Popin management
 */

$(document).on('click', '.cap_popin', (e) => {
    let clickHasClassPopin = $(e.target).hasClass('cap_popin');

    if (clickHasClassPopin)
        $('.cap_popin').fadeOut(300);
});

/**
 * General controller routing
 */

getControllerUrl = (template) => {
    let cap_controller_url = '';

    switch (template) {
        case 'statistics':
            cap_controller_url = cap_controller_statistics_url;
            break;
        case 'listing':
            cap_controller_url = cap_controller_listing_url;
            break;
        case 'target_frequency':
            cap_controller_url = cap_controller_target_url;
            break;
        case 'discount':
            cap_controller_url = cap_controller_discount_url;
            break;
        case 'email_template':
            cap_controller_url = cap_controller_template_url; 
            break;
        case 'email_test':
            cap_controller_url = cap_controller_email_test_url; 
            break;
        default:
            console.log('Controller URL Routing error');
            break;  
    }
    return cap_controller_url;
}

getControllerName = (template) => {
    let controller = '';

    switch (template) {
        case 'statistics':
            controller = cap_controller_statistics;
            break;
        case 'listing':
            controller = cap_controller_listing;
            break;
        case 'target_frequency':
            controller = cap_controller_target;
            break;
        case 'discount':
            controller = cap_controller_discount;
            break;
        case 'email_template':
            controller = cap_controller_template; 
            break;
        case 'email_test':
            controller = cap_controller_email_test; 
            break;
        default:
            console.log('Controller Routing error');
            break;  
    }
    return controller;
}

/**
 * Load statistics template on tab click
 */
$(document).on('click', '#stats_tab a', (e) => {
    let cap_controller = getControllerName('statistics');
    let cap_controller_url = getControllerUrl('statistics');
 
    $.ajax({
        type: 'POST',
        url: cap_controller_url,
        dataType: 'html',
        async: false,
        data: {
            controller : cap_controller,
            action : 'LoadTemplate',
            ajax : true,
        },
        success : (data) => {
            $('#stats').html(data);
        }
    });
});
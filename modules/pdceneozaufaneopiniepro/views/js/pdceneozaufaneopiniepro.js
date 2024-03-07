/**
 * 2012-2020 Patryk Marek PrestaDev.pl
 *
 * Patryk Marek PrestaDev.pl - PD Ceneo Zaufane Opinie Pro PrestaShop 1.6.x and 1.7.x Module © All rights reserved.
 *
 * DISCLAIMER
 *
 * Do not edit, modify or copy this file.
 * If you wish to customize it, contact us at info@prestadev.pl.
 *
 *  @author    Patryk Marek PrestaDev.pl <info@prestadev.pl>
 *  @copyright 2012-2020 Patryk Marek - PrestaDev.pl
 *  @license   License is for use in domain / or one multistore enviroment (do not modify or reuse this code or part of it)
 *  @link      http://prestadev.pl
 *  @package   PD Ceneo Zaufane Opinie Pro PrestaShop 1.6.x and 1.7.x Module
 *  @version   2.0.0
 *  @date      24-12-2020
 */
$(document).ready(function() {
    PdCeneoZaufaneOpiniePro.init();
});

let PdCeneoZaufaneOpiniePro = {
	
    init() {
        if (pdceneozaufaneopiniepro_ps17 && pdceneozaufaneopiniepro_work_mode == 1) {
            PdCeneoZaufaneOpiniePro.initPrestaShopEmiter();
        }

        $('input#pdceneozaufaneopiniepro_accept').on('change', function() {

            let accepted = $("input#pdceneozaufaneopiniepro_accept").is(':checked'),
                checkbox_icon = $(this).next('span').find('i.material-icons');

            $.ajax({
                type: "POST",
                url: pdceneozaufaneopiniepro_ajax_link,
                data: {
                    action: 'saveCeneoAcceptedStatus',
                    accepted: Number(accepted),
                    secure_key: pdceneozaufaneopiniepro_secure_key
                },
                dataType: "json",
                success: function(data) {
                    if (data) {
                        $('input#pdceneozaufaneopiniepro_accept').prop('checked', true);
                        if (typeof(checkbox_icon) !== 'undefined') {
                            $(checkbox_icon).show();
                        }
                        if (pdceneozaufaneopiniepro_work_mode == 3) {
                            PdCeneoZaufaneOpiniePro.returnCeneoJsCode();
                        }
                    } else {
                        $('input#pdceneozaufaneopiniepro_accept').prop('checked', false);
                        if (typeof(checkbox_icon) !== 'undefined') {
                            $(checkbox_icon).hide();
                        }
                    }
                }
            });
        });
    },
    returnCeneoJsCode() {

        let accepted = $("input#pdceneozaufaneopiniepro_accept").is(':checked');

        $.ajax({
            type: "POST",
            url: pdceneozaufaneopiniepro_ajax_link,
            data: {
                action: 'returnCeneoJs',
                accepted: Number(accepted),
                secure_key: pdceneozaufaneopiniepro_secure_key
            },
            dataType: "json",
            success: function(data) {
                if (data) {
                    $("#pdceneozaufaneopiniepro_ajax_js_response").append(data);
                }
            }
        });
    },
    initPrestaShopEmiter() {

        if (typeof(prestashop) !== 'undefined') {
            prestashop.on('changedCheckoutStep', function(params) {
                if (typeof(params.event.currentTarget.id) !== 'undefined') {
                    var step = params.event.currentTarget.id;
                    if (step == 'checkout-payment-step') {
                        PdCeneoZaufaneOpiniePro.returnCeneoJsCode();
                    }
                }
            });
        }
    }
}
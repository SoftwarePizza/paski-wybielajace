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
 * Replace all elements of the ckeditor to show it on the live preview
 */
setPreviewCustomText = (element, customText) => {

	let findCart = customText.search("{cart}");

	// If there is {cart} on the ckeditor we must show the cart template on the preview
	if (findCart > 0) {
		// The ajax must be executed just once !
		preloadCart();
		customText = customText.replace(new RegExp("{cart}", 'g'), window.cartTemplate);
	}

	customText = customText.replace(new RegExp("{first_name}", 'g'), cap_template_demo_first_name);
	customText = customText.replace(new RegExp("{last_name}", 'g'), cap_template_demo_last_name);
	customText = customText.replace(new RegExp("{gender}", 'g'), cap_template_demo_gender);
	customText = customText.replace(new RegExp("{nb_product}", 'g'), cap_template_demo_nb_product);
	customText = customText.replace(new RegExp("{cart_link}", 'g'), cap_template_demo_cart_link);
	customText = customText.replace(new RegExp("{discount_code}", 'g'), cap_template_demo_discount_code);
	customText = customText.replace(new RegExp("{discount_value}", 'g'), cap_template_demo_discount_value);
	customText = customText.replace(new RegExp("{discount_validity}", 'g'), cap_template_demo_discount_validity);
	customText = customText.replace(new RegExp("{shop_link}", 'g'), cap_template_demo_shop_link);
	customText = customText.replace(new RegExp("{unsubscribe}", 'g'), cap_template_demo_unsubscribe);

	$(element).html(customText);
}

/**
 * Preload a cart for the template preview
 */
preloadCart = () => {
    if (window.cartTemplate == undefined) {
        $.ajax({
            async: false,
            type: "POST",
            url: cap_controller_template_url,
            data: {
                ajax : true,
                controller : cap_controller_template,
                action : 'getDemoCart',
            },
            success: (cartPreview) => {
                window.cartTemplate = cartPreview
            },
        });
    }
}

/**
 * Subject tags
 */
$(document).on('click', '.email_subject_custom', (e) => {
	let elem = e.target;

	if ($(elem).hasClass('material-icons')) {
		elem = $(elem).parent();
	}

	let data = $(elem).data('content');
	let inputCurrentVal = $('.subject input:visible').val();

	$('.subject input:visible').val(inputCurrentVal+data);
	$('.subject input:visible').trigger('focus');
});

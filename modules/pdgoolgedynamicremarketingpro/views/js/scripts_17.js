/*
* 2012-2021 Patryk Marek PrestaDev.pl
*
* Patryk Marek PrestaDev.pl - PD Google Dynamic Remarketing Pro 1.7.x Module © All rights reserved.
*
* DISCLAIMER
*
* Do not edit, modify or copy this file.
* If you wish to customize it, contact us at info@prestadev.pl.
*
* @author    Patryk Marek <info@prestadev.pl>
* @copyright 2012-2021 Patryk Marek @ PrestaDev.pl
* @license   Do not edit, modify or copy this file, if you wish to customize it, contact us at info@prestadev.pl.
* @link      http://prestadev.pl
* @package   PD Google Dynamic Remarketing Pro 1.7.x Module
* @version   1.0.2
* @date      01-05-2021
*/

$(document).ready(function() {

	prestashop.on('updateCart', function(params) {

		if (typeof(params) !== 'undefined' && typeof(prestashop.cart) !== 'undefined') {
			let iso_code = prestashop.currency.iso_code,
				product_id = params.reason.idProduct,
				product_id_product_attribute = params.reason.idProductAttribute;

			if (typeof(product_id) !== 'undefined' && typeof(product_id_product_attribute) !== 'undefined') {
				$.ajax({
					type: "POST",
					url: pdgoolgedynamicremarketingpro_ajax_link,
					data: {'action': 'updateCart', 'product_id': product_id, 'product_id_product_attribute' : product_id_product_attribute, 'secure_key':  pdgoolgedynamicremarketingpro_secure_key, ajax : true},
					dataType: "json",
					success: function(data) {
						console.log('Fired up event GDR: add_to_cart');
						gtag('event', 'add_to_cart', {
							value: data.content_value,
							items: [{
								id: data.content_ids,
								google_business_vertical: 'retail'
							}]
						});

					}
				});
			}
		}
	});

	prestashop.on('updatedProduct', function(params) {

		if (typeof(params) !== 'undefined') {
			let iso_code = prestashop.currency.iso_code,
				product_id = parseInt(document.getElementsByName('id_product')[0].value),
				groups = [],
				select_groups = document.getElementsByClassName('form-control-select'),
				input_color_group = document.getElementsByClassName('input-color'),
				input_radio_group = document.querySelector('.input-radio:checked');

			if (typeof(select_groups) != 'undefined' && select_groups != null) {
				for (select_count = 0; select_count < select_groups.length; select_count++) {
					groups.push(select_groups[select_count].value);
				}
			}

			if (typeof(input_color_group) != 'undefined' && input_color_group != null) {
				for (color_count = 0; color_count < input_color_group.length; color_count++) {
					if (input_color_group[color_count].checked) {
						groups.push(input_color_group[color_count].value);
					}
				}
			}

			if (typeof(input_radio_group) != 'undefined' && input_radio_group != null) {
				for (radio_count = 0; radio_count < input_radio_group.length; radio_count++) {
					if (input_radio_group[radio_count].checked) {
						groups.push(input_radio_group[radio_count].value);
					}
				}
			}
				
			if (typeof groups !== 'undefined' && groups.length > 0 && typeof product_id !== 'undefined') {
				$.ajax({
					type: "POST",
					url: pdgoolgedynamicremarketingpro_ajax_link,
					data: {'action': 'updateProduct', 'product_id': product_id, 'attributes_groups': groups,'secure_key':  pdgoolgedynamicremarketingpro_secure_key, ajax : true},
					dataType: "json",
					success: function(data) {
						console.log('Fired up event GDR: view_item on combination change');
						setEventFireUpDelay(250);
						gtag('event', 'view_item', {
							value: data.content_value,
							items: [{
								id: data.content_ids,
								google_business_vertical: 'retail',
							}]
						});
					}
				});
			}
		}
	});

	function setEventFireUpDelay(ms) {
		var cur_d = new Date();
		var cur_ticks = cur_d.getTime();
		var ms_passed = 0;
		while(ms_passed < ms) {
			var d = new Date();
			var ticks = d.getTime();
			ms_passed = ticks - cur_ticks;
		}
	}

});
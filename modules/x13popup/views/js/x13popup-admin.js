$(document).ready(function(){

	$('select#type').bind('change', function(){
		display_content();
	});

	$('select#place').bind('change', function(){
		display_place_ids();
	});

	$('input[name=referer]').bind('change', function(){
		display_referer_popup();
	});

	setTimeout(function(){
		display_content();
		display_place_ids();
		display_referer_popup();
	}, 100);

});

function display_content() {
	var _el = $('select#type');
	if(_el.length > 0) {
		var cg = $('[name*="content_"]').closest('.form-group');
		if($('.translatable-field').length > 0) {
			if(_el.val() == 'text') {
				$('[name*="content_"]').closest('.form-group').parent().closest('.form-group').hide();
				$('[name*="content_big"]').closest('.form-group').parent().closest('.form-group').show();
			}
			else if(_el.val() == 'newsletter') {
				$('[name*="content_"]').closest('.form-group').parent().closest('.form-group').hide();
				$('[name*="content_big_"]').closest('.form-group').parent().closest('.form-group').show();
			}
			else {
				$('[name*="content_"]').closest('.form-group').parent().closest('.form-group').show();
				$('[name*="content_big_"]').closest('.form-group').parent().closest('.form-group').hide();
				if(_el.val() == 'youtube') {
					$('[name*="content_"]').siblings('.help-block').text('Wklej adres filmu YouTube, np. https://www.youtube.com/watch?v=ayFAQ2OoJaA');
				}
				else if(_el.val() == 'google-maps') {
					$('[name*="content_"]').closest('.form-group').siblings('.help-block').text('Wklej kod mapy Google.');
				}
				else if(_el.val() == 'facebook') {
					$('[name*="content_"]').closest('.form-group').siblings('.help-block').text('Wklej adres Facebook\'a, np. https://www.facebook.com/prestashop');
				}
			}
		}
		else {
			if(_el.val() == 'text') {
				$('[name*="content_"]').closest('.form-group').hide();
				$('[name*="content_big_"]').closest('.form-group').show();
				/* PS1.5 */ $('[name*="content_"]').closest('.margin-form').hide();
				/* PS1.5 */ $('[name*="content_"]').closest('.margin-form').prev().hide();
				/* PS1.5 */ $('[name*="content_big_"]').closest('.margin-form').show();
				/* PS1.5 */ $('[name*="content_big_"]').closest('.margin-form').prev().show();
			}
			else if(_el.val() == 'newsletter') {
				$('[name*="content_1"]').closest('.form-group').hide();
				$('[name*="content_big_"]').closest('.form-group').show();
				/* PS1.5 */ $('[name*="content_"]').closest('.margin-form').hide();
				/* PS1.5 */ $('[name*="content_"]').closest('.margin-form').prev().hide();
				/* PS1.5 */ $('[name*="content_big_"]').closest('.margin-form').show();
				/* PS1.5 */ $('[name*="content_big_"]').closest('.margin-form').prev().show();
			}
			else {
				$('[name*="content_"]').closest('.form-group').show();
				$('[name*="content_big_"]').closest('.form-group').hide();
				/* PS1.5 */ $('[name*="content_"]').closest('.margin-form').show();
				/* PS1.5 */ $('[name*="content_"]').closest('.margin-form').prev().show();
				/* PS1.5 */ $('[name*="content_big_"]').closest('.margin-form').hide();
				/* PS1.5 */ $('[name*="content_big_"]').closest('.margin-form').prev().hide();
				if(_el.val() == 'youtube') {
					$('[name*="content_"]').siblings('.help-block').text('Wklej adres filmu YouTube, np. https://www.youtube.com/watch?v=ayFAQ2OoJaA');
					/* PS1.5 */ $('[name*="content_"]').closest('.translatable').siblings('.preference_description').text('Wklej adres filmu YouTube, np. https://www.youtube.com/watch?v=ayFAQ2OoJaA');
				}
				else if(_el.val() == 'google-maps') {
					$('[name*="content_"]').siblings('.help-block').text('Wklej kod mapy Google.');
					/* PS1.5 */ $('[name*="content_"]').closest('.translatable').siblings('.preference_description').text('Wklej kod mapy Google.');
				}
				else if(_el.val() == 'facebook') {
					$('[name*="content_"]').siblings('.help-block').text('Wklej adres Facebook\'a, np. https://www.facebook.com/prestashop');
					/* PS1.5 */ $('[name*="content_"]').closest('.translatable').siblings('.preference_description').text('Wklej adres Facebook\'a, np. https://www.facebook.com/prestashop');
				}
			}
		}
	}
}

function display_place_ids() {
	var _el = $('select#place');
	if(_el.length > 0) {
		if(_el.val() == 'product' || _el.val() == 'category' || _el.val() == 'cms' || _el.val() == 'manufacturer' || _el.val() == 'category_products') {
			$('#place_ids').closest('.form-group').show();
			/* PS1.5 */ $('#place_ids').closest('.margin-form').show();
			/* PS1.5 */ $('#place_ids').closest('.margin-form').prev().show();
		}
		else {
			$('#place_ids').closest('.form-group').hide();
			/* PS1.5 */ $('#place_ids').closest('.margin-form').hide();
			/* PS1.5 */ $('#place_ids').closest('.margin-form').prev().hide();
		}
	}
}

function display_referer_popup()
{
	var refererUrlWrapper = $('#referer_url');
	var isRefererPopup = $('input[name=referer]:checked').val();
	if (isRefererPopup > 0) {
		refererUrlWrapper.closest('.form-group').show();
		/* PS1.5 */ refererUrlWrapper.closest('.margin-form').show();
		/* PS1.5 */ refererUrlWrapper.closest('.margin-form').prev().show();
	} else {
		refererUrlWrapper.closest('.form-group').hide();
		/* PS1.5 */ refererUrlWrapper.closest('.margin-form').hide();
		/* PS1.5 */ refererUrlWrapper.closest('.margin-form').prev().hide();
	}
}

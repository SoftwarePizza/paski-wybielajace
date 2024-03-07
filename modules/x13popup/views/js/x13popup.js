$(document).ready(function() {
	var x13_currentPopup 				= false;
	var x13_popupCover 					= $('#x13popup-cover');
	var x13_popupContainer 				= $('#x13popup-container');
	var x13_delayedPopupHasBeenShown 	= false;
	var x13_exitPopupHasBeenShown 		= false;
	var x13_popupIsCurrentlyVisible		= false;
	var x13_delayedPopupTimer			= false;
	var x13_delayedPopup				= false;
	var $body = $('body');
	setNewsletterSubmitEvent();

	$('body').find('div.x13popup').each(function(index, el) {
		x13_bindPopup($(el));
	});

	function x13_bindPopup(popupInstance) {
		var $popup 		= popupInstance;
		var $type 		= $popup.data('type');
		var $delay 		= $popup.data('delay');
		var $duration 	= $popup.data('duration');
		var $closeBy 	= $popup.data('close');

		var $width      = $popup.width();
		var $height     = x13_popupContainer.height();
		var $minHeight	= parseInt($popup.css('min-height').replace('/[^0-9]/', ''), 10);
		var $iframe = $popup.find('iframe');

		$popup.attr('data-original-width', $popup.css('width'));

		if($iframe.length > 0) {
			$popup.find('.content').height($iframe.height());
		}

		if(!isNaN($delay) && parseInt($delay) > 0) {
			x13_delayedPopupTimer = setTimeout(function() {
				if (!x13_popupIsCurrentlyVisible && !x13_delayedPopupHasBeenShown) {
					x13_showPopup($popup);
					x13_delayedPopupHasBeenShown = true;
				}
			}, $delay);
			x13_delayedPopup = $popup;
		} else {
			x13_showPopup($popup);
		}

		if ($type === 'exit') {
			x13_handleExitPopup($popup);
		}
	}

	function x13_showPopup(popupInstance) {
		var $popup 		= popupInstance;
		var $duration 	= $popup.data('duration');
		var $type 		= $popup.data('type');
		
		$body.addClass('x13popup-open');

		if (x13_popupIsCurrentlyVisible || $type === 'standard' && x13_delayedPopupHasBeenShown) {
			return false;
		}

		if ($type === 'exit' && x13_exitPopupHasBeenShown) {
			return false;
		}

		if ($type === 'exit') {
			x13_exitPopupHasBeenShown = true;
		}

		$popup.show();
		x13_popupCover.appendTo('body').fadeIn(200);
		x13_popupContainer.appendTo('body').fadeIn(300);

		x13_currentPopup = $popup;
		x13_popupIsCurrentlyVisible = true;

		$(window).on('resize', function() {
			x13_handleResponsive($popup);
		});
		x13_handleResponsive($popup);


		if(!isNaN($duration) && $duration > 0) {
			setTimeout(function() {
				$popup.children('.x13popup-close').trigger('click');
			}, $duration);
		}

		$popup.find('.x13popup-close').on('click', function(e){
			e.preventDefault();
			var $close = $(e.delegateTarget);
			var closeHref = $close.attr('href');
			handlePopupCookie($popup, function() {
				if(closeHref && closeHref.length > 0) {
					window.location.href = closeHref;
				}
			});
			$(document).trigger('x13popupClose', $popup);
		});
	}

	function x13_handleExitPopup(popupInstance)
	{
		$(document).on('mouseout', function (e) {
			e = e ? e : window.event;
			var vpWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);

			if(e.clientX >= (vpWidth - 50) || e.clientY >= 50 || e.target.tagName.toLowerCase() == 'input') {
				return false;
			}

			var from = e.relatedTarget || e.toElement;

			if(!from && !x13_exitPopupHasBeenShown && !x13_popupIsCurrentlyVisible) {
				return x13_showPopup(popupInstance);
			}
		});
	}

	function x13_handleResponsive(popupInstance)
	{
		var $popup = popupInstance;

		if ($(window).width() < parseInt($popup.data('original-width'), 10)) {
			x13_popupContainer.addClass('mobile');
		} else {
			x13_popupContainer.removeClass('mobile');
		}

	}

	$(document).on('x13popupClose', function (e, popup) {
		x13_popupCover.fadeOut(200);
		x13_popupContainer.fadeOut(200);
		x13_popupIsCurrentlyVisible = false;
		popup.remove();
		$body.removeClass('x13popup-open');

		if (!x13_delayedPopupHasBeenShown && x13_delayedPopupTimer) {
			clearTimeout(x13_delayedPopupTimer);
			x13_bindPopup(x13_delayedPopup);
		}
	});

	$(document).on('click', x13_popupCover, function(e) {
		var $caller = $(e.target);
		if (typeof $caller === 'undefined' || ($caller.prop('id') !== 'x13popup-container' && $caller.prop('id') !== 'x13popup-cover' && $caller.prop('id') !== 'x13popup-container-inner')) {
			return;
		}

		if (!x13_currentPopup) {
			return;
		}
		var closeBy = parseInt(x13_currentPopup.data('close'), 10);
		if (closeBy > 0) {
			handlePopupCookie(x13_currentPopup);
		}
		$body.removeClass('x13popup-open');
		$(document).trigger('x13popupClose', x13_currentPopup);
	});

	$(document).on('click', x13_popupContainer, function(e) {
		var $caller = $(e.target);
		if (typeof $caller === 'undefined' || ($caller.prop('id') !== 'x13popup-container' && $caller.prop('id') !== 'x13popup-cover' && $caller.prop('id') !== 'x13popup-container-inner')) {
			return;
		}

		if (!x13_currentPopup) {
			return;
		}
		var closeBy = parseInt(x13_currentPopup.data('close'), 10);
		if (closeBy > 0) {
			handlePopupCookie(x13_currentPopup);
		}
		$body.removeClass('x13popup-open');
		$(document).trigger('x13popupClose', x13_currentPopup);
	});

	function setNewsletterSubmitEvent() {
		if($('.x13-popup-newsletter-form').length === 0) {
			return;
		}
		$(document).on('submit', '.x13-popup-newsletter-form', function(e) {
			e.preventDefault();
			handleNewsletterSubmit(this);
		});
	}
	
	
	function handleNewsletterSubmit(el) {
		var $form = $(el);
	
		$.post($form.attr('action'), $form.find('input').serialize(), function(res){
			if(x13_isPs17()) {
				handleResposneForPS17(res, $form);
			} else {
				handleResposneForPS16(res, $form);
			}
		});
	
	}
	
	
	function handleResposneForPS16(res, $form) {
		var response = res.split('::');
		
		if(response[0] == 'OK') {
			handleNewsletterAlert('success', $form, response[1]);
			handleNewsletterSuccessSubmit($form);
		}
		else {
			handleNewsletterAlert('warning', $form, response[1]);
		}
	}
	
	
	function handleResposneForPS17(res, $form) {
		var response = $.parseJSON(res);
	
		if(!response.hasError) {
			handleNewsletterAlert('success', $form, response.message);
			handleNewsletterSuccessSubmit($form);
		} else {
			handleNewsletterAlert('warning', $form, response.message);
		}
	}
	
	
	function handleNewsletterSuccessSubmit($form) {
		var $popup = $form.parents('.x13popup');
		handlePopupCookie($popup);
		setTimeout(function() {
			$(document).trigger('x13popupClose', $popup);
		}, 3000);
		$form.get(0).reset();
	
		var $newslettesPopups = $('.x13popup[data-content="newsletter"]');

		$newslettesPopups.each(function(i, el) {
			var $el = $(el);
			if(!$el.is($popup)) {
				handlePopupCookie($el);
				$el.remove();
				if($el.hasClass('exit')) {
					x13_exitPopupHasBeenShown = true;
				} else {
					setTimeout(function() {
						x13_popupIsCurrentlyVisible = true;
					}, 3000)
				}
			}
		})
	
	}
	
	function handleNewsletterAlert(type, $form, text) {
	
		if(x13_isPs17()) {
			var successClasses = 'alert alert-success';
			var warningClasses = 'alert alert-warning';
		} else {
			var successClasses = 'success_inline alert-success';
			var warningClasses = 'warning_inline alert-danger';
		}
	
		var $messageBlock = $form.closest('.block_content_newsletter').find('.x13-popup-newsletter-message');
		if(type === 'success') {
			$messageBlock.removeClass(warningClasses).addClass(successClasses);
		} else if(type ==='warning') {
			$messageBlock.removeClass(successClasses).addClass(warningClasses);
		}
	
		$messageBlock.text(text)
	}
	
	
	function x13_isPs17() {
		return typeof prestashop !== 'undefined';
	}
});

function handlePopupCookie(element, callback)
{
	var cookie_expired = parseInt(element.data('cookie_expired'));
	var cookie_popup_id = parseInt(element.data('cookie_popup_id'));
	var ajaxUrl = element.data('ajax');

	var callback = callback ? callback : function(){};

	$.post(ajaxUrl, {
		'x13popup_id': cookie_popup_id,
		'x13popup_expiration': cookie_expired,
		'handleCookie': 1,
		'newsletter': (element.data('content') === 'newsletter')
	}, function() {
		callback();
	});
}

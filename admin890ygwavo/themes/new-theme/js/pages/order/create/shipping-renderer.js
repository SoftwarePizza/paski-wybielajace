/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

import createOrderMap from './create-order-map';

const {$} = window;

/**
 * Manipulates UI of Shipping block in Order creation page
 */
export default class ShippingRenderer {
  constructor() {
    this.$container = $(createOrderMap.shippingBlock);
    this.$form = $(createOrderMap.shippingForm);
    this.$noCarrierBlock = $(createOrderMap.noCarrierBlock);
  }

  /**
   * @param {Object} shipping
   * @param {Boolean} emptyCart
   */
  render(shipping, emptyCart) {
    if (emptyCart) {
      this.hideContainer();
    } else if (shipping !== null) {
      this.displayForm(shipping);
    } else {
      this.displayNoCarriersWarning();
    }
  }

  /**
   * Show form block with rendered delivery options instead of warning message
   *
   * @param shipping
   *
   * @private
   */
  displayForm(shipping) {
    this.hideNoCarrierBlock();
    this.renderDeliveryOptions(shipping.deliveryOptions, shipping.selectedCarrierId);
    this.renderTotalShipping(shipping.shippingPrice);
    this.renderFreeShippingSwitch(shipping.freeShipping);
    this.renderRecycledPackagingSwitch(shipping.recycledPackaging);
    this.renderGiftMessageField(shipping.giftMessage);
    this.renderGiftSwitch(shipping.gift);
    this.showForm();
    this.showContainer();
  }

  /**
   * Renders free shipping switch depending on free shipping value
   *
   * @param isFreeShipping
   *
   * @private
   */
  renderFreeShippingSwitch(isFreeShipping) {
    $(createOrderMap.freeShippingSwitch).each((key, input) => {
      if (input.value === '1') {
        input.checked = isFreeShipping;
      } else {
        input.checked = !isFreeShipping;
      }
    });
  }

  /**
   * @param useRecycledPackaging
   *
   * @private
   */
  renderRecycledPackagingSwitch(useRecycledPackaging) {
    $(createOrderMap.recycledPackagingSwitch).each((key, input) => {
      if (input.value === '1') {
        input.checked = useRecycledPackaging;
      } else {
        input.checked = !useRecycledPackaging;
      }
    });
  }

  /**
   * @param isAGift
   *
   * @private
   */
  renderGiftSwitch(isAGift) {
    $(createOrderMap.isAGiftSwitch).each((key, input) => {
      if (input.value === '1') {
        input.checked = isAGift;
      } else {
        input.checked = !isAGift;
      }
    });
  }

  /**
   * @param giftMessage
   *
   * @private
   */
  renderGiftMessageField(giftMessage) {
    $(createOrderMap.giftMessageField).val(giftMessage);
  }

  /**
   * Show warning message that no carriers are available and hide form block
   *
   * @private
   */
  displayNoCarriersWarning() {
    this.showContainer();
    this.hideForm();
    this.showNoCarrierBlock();
  }

  /**
   * Renders delivery options selection block
   *
   * @param deliveryOptions
   * @param selectedVal
   *
   * @private
   */
  renderDeliveryOptions(deliveryOptions, selectedVal) {
    const $deliveryOptionSelect = $(createOrderMap.deliveryOptionSelect);
    $deliveryOptionSelect.empty();

    Object.values(deliveryOptions).forEach((option) => {
      const deliveryOption = {
        value: option.carrierId,
        text: `${option.carrierName} - ${option.carrierDelay}`,
      };

      if (selectedVal === deliveryOption.value) {
        deliveryOption.selected = 'selected';
      }

      $deliveryOptionSelect.append($('<option>', deliveryOption));
    });
  }

  /**
   * Renders dynamic value of shipping price
   *
   * @param shippingPrice
   *
   * @private
   */
  renderTotalShipping(shippingPrice) {
    const $totalShippingField = $(createOrderMap.totalShippingField);
    $totalShippingField.empty();

    $totalShippingField.append(shippingPrice);
  }

  /**
   * Show whole shipping container
   *
   * @private
   */
  showContainer() {
    this.$container.removeClass('d-none');
  }

  /**
   * Hide whole shipping container
   *
   * @private
   */
  hideContainer() {
    this.$container.addClass('d-none');
  }

  /**
   * Show form block
   *
   * @private
   */
  showForm() {
    this.$form.removeClass('d-none');
  }

  /**
   * Hide form block
   *
   * @private
   */
  hideForm() {
    this.$form.addClass('d-none');
  }

  /**
   * Show warning message block which warns that no carriers are available
   *
   * @private
   */
  showNoCarrierBlock() {
    this.$noCarrierBlock.removeClass('d-none');
  }

  /**
   * Hide warning message block which warns that no carriers are available
   *
   * @private
   */
  hideNoCarrierBlock() {
    this.$noCarrierBlock.addClass('d-none');
  }
}

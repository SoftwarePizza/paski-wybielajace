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
import OrderViewPageMap from './OrderViewPageMap';

const {$} = window;

/**
 * Manages adding/editing note for invoice documents.
 */
export default class InvoiceNoteManager {
  constructor() {
    this.setupListeners();
  }

  setupListeners() {
    this.initShowNoteFormEventHandler();
    this.initCloseNoteFormEventHandler();
    this.initEnterPaymentEventHandler();
  }

  initShowNoteFormEventHandler() {
    $('.js-open-invoice-note-btn').on('click', (event) => {
      event.preventDefault();
      const $btn = $(event.currentTarget);
      const $noteRow = $btn.closest('tr').next();

      $noteRow.removeClass('d-none');
    });
  }

  initCloseNoteFormEventHandler() {
    $('.js-cancel-invoice-note-btn').on('click', (event) => {
      $(event.currentTarget).closest('tr').addClass('d-none');
    });
  }

  initEnterPaymentEventHandler() {
    $('.js-enter-payment-btn').on('click', (event) => {
      const $btn = $(event.currentTarget);
      const paymentAmount = $btn.data('payment-amount');

      $(OrderViewPageMap.viewOrderPaymentsBlock).get(0).scrollIntoView({behavior: 'smooth'});
      $(OrderViewPageMap.orderPaymentFormAmountInput).val(paymentAmount);
    });
  }
}

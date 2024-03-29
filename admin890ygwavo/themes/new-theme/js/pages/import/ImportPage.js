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

import FormFieldToggle from './FormFieldToggle';

const {$} = window;

export default class ImportPage {
  constructor() {
    new FormFieldToggle();

    $('.js-from-files-history-btn').on('click', () => this.showFilesHistoryHandler());
    $('.js-close-files-history-block-btn').on('click', () => this.closeFilesHistoryHandler());
    $('#fileHistoryTable').on('click', '.js-use-file-btn', (event) => this.useFileFromFilesHistory(event));
    $('.js-change-import-file-btn').on('click', () => this.changeImportFileHandler());
    $('.js-import-file').on('change', () => this.uploadFile());

    this.toggleSelectedFile();
    this.handleSubmit();
  }

  /**
   * Handle submit and add confirm box in case the toggle button about
   * deleting all entities before import is checked
   */
  handleSubmit() {
    $('.js-import-form').on('submit', function () {
      const $this = $(this);

      if ($this.find('input[name="truncate"]:checked').val() === '1') {
        /* eslint-disable-next-line max-len */
        return window.confirm(`${$this.data('delete-confirm-message')} ${$.trim($('#entity > option:selected').text().toLowerCase())}?`);
      }

      return true;
    });
  }

  /**
   * Check if selected file names exists and if so, then display it
   */
  toggleSelectedFile() {
    const selectFilename = $('#csv').val();

    if (selectFilename.length > 0) {
      this.showImportFileAlert(selectFilename);
      this.hideFileUploadBlock();
    }
  }

  changeImportFileHandler() {
    this.hideImportFileAlert();
    this.showFileUploadBlock();
  }

  /**
   * Show files history event handler
   */
  showFilesHistoryHandler() {
    this.showFilesHistory();
    this.hideFileUploadBlock();
  }

  /**
   * Close files history event handler
   */
  closeFilesHistoryHandler() {
    this.closeFilesHistory();
    this.showFileUploadBlock();
  }

  /**
   * Show files history block
   */
  showFilesHistory() {
    $('.js-files-history-block').removeClass('d-none');
  }

  /**
   * Hide files history block
   */
  closeFilesHistory() {
    $('.js-files-history-block').addClass('d-none');
  }

  /**
   *  Prefill hidden file input with selected file name from history
   */
  useFileFromFilesHistory(event) {
    const filename = $(event.target).closest('.btn-group').data('file');

    $('.js-import-file-input').val(filename);

    this.showImportFileAlert(filename);
    this.closeFilesHistory();
  }

  /**
   * Show alert with imported file name
   */
  showImportFileAlert(filename) {
    $('.js-import-file-alert').removeClass('d-none');
    $('.js-import-file').text(filename);
  }

  /**
   * Hides selected import file alert
   */
  hideImportFileAlert() {
    $('.js-import-file-alert').addClass('d-none');
  }

  /**
   * Hides import file upload block
   */
  hideFileUploadBlock() {
    $('.js-file-upload-form-group').addClass('d-none');
  }

  /**
   * Hides import file upload block
   */
  showFileUploadBlock() {
    $('.js-file-upload-form-group').removeClass('d-none');
  }

  /**
   * Make file history button clickable
   */
  enableFilesHistoryBtn() {
    $('.js-from-files-history-btn').removeAttr('disabled');
  }

  /**
   * Show error message if file uploading failed
   *
   * @param {string} fileName
   * @param {integer} fileSize
   * @param {string} message
   */
  showImportFileError(fileName, fileSize, message) {
    const $alert = $('.js-import-file-error');

    const fileData = `${fileName} (${this.humanizeSize(fileSize)})`;

    $alert.find('.js-file-data').text(fileData);
    $alert.find('.js-error-message').text(message);
    $alert.removeClass('d-none');
  }

  /**
   * Hide file uploading error
   */
  hideImportFileError() {
    const $alert = $('.js-import-file-error');
    $alert.addClass('d-none');
  }

  /**
   * Show file size in human readable format
   *
   * @param {int} bytes
   *
   * @returns {string}
   */
  humanizeSize(bytes) {
    if (typeof bytes !== 'number') {
      return '';
    }

    if (bytes >= 1000000000) {
      return `${(bytes / 1000000000).toFixed(2)} GB`;
    }

    if (bytes >= 1000000) {
      return `${(bytes / 1000000).toFixed(2)} MB`;
    }

    return `${(bytes / 1000).toFixed(2)} KB`;
  }

  /**
   * Upload selected import file
   */
  uploadFile() {
    this.hideImportFileError();

    const $input = $('#file');
    const uploadedFile = $input.prop('files')[0];

    const maxUploadSize = $input.data('max-file-upload-size');

    if (maxUploadSize < uploadedFile.size) {
      this.showImportFileError(uploadedFile.name, uploadedFile.size, 'File is too large');
      return;
    }

    const data = new FormData();
    data.append('file', uploadedFile);

    $.ajax({
      type: 'POST',
      url: $('.js-import-form').data('file-upload-url'),
      data,
      cache: false,
      contentType: false,
      processData: false,
    }).then((response) => {
      if (response.error) {
        this.showImportFileError(uploadedFile.name, uploadedFile.size, response.error);
        return;
      }

      const filename = response.file.name;

      $('.js-import-file-input').val(filename);

      this.showImportFileAlert(filename);
      this.hideFileUploadBlock();
      this.addFileToHistoryTable(filename);
      this.enableFilesHistoryBtn();
    });
  }

  /**
   * Renders new row in files history table
   *
   * @param {string} filename
   */
  addFileToHistoryTable(filename) {
    const $table = $('#fileHistoryTable');

    const baseDeleteUrl = $table.data('delete-file-url');
    const deleteUrl = `${baseDeleteUrl}&filename=${encodeURIComponent(filename)}`;

    const baseDownloadUrl = $table.data('download-file-url');
    const downloadUrl = `${baseDownloadUrl}&filename=${encodeURIComponent(filename)}`;

    const $template = $table.find('tr:first').clone();

    $template.removeClass('d-none');
    $template.find('td:first').text(filename);
    $template.find('.btn-group').attr('data-file', filename);
    $template.find('.js-delete-file-btn').attr('href', deleteUrl);
    $template.find('.js-download-file-btn').attr('href', downloadUrl);

    $table.find('tbody').append($template);

    const filesNumber = $table.find('tr').length - 1;
    $('.js-files-history-number').text(filesNumber);
  }
}

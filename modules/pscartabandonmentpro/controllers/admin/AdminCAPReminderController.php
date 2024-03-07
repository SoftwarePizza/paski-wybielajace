<?php
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
class AdminCAPReminderController extends ModuleAdminController
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->ajax = true;
        parent::__construct();
    }

    /**
     * ajaxProcessSave
     */
    public function ajaxProcessSave()
    {
        $errors = [];
        $datasModify = new CartReminderDatasModify();

        // Transform the string into an array
        $aTargetData = $datasModify->parseStr(Tools::getValue('targetData'));
        $aDiscountData = $datasModify->parseStr(Tools::getValue('discountData'));
        $aTemplateData = $datasModify->parseStr(Tools::getValue('templateData'));

        // Step 1 - Validate data
        // validate return true if there is no errors. Return array if there is some errors
        $targetValidation = new ReminderTargetValidation();
        $discountValidation = new ReminderDiscountValidation();
        $templateValidation = new ReminderTemplateValidation();

        $targetDatasValidation = $targetValidation->validate($aTargetData);
        $discountDatasValidation = $discountValidation->validate($aDiscountData);
        $templateDatasValidation = $templateValidation->validate($aTemplateData);

        if (!empty($targetDatasValidation)) {
            $errors['target'] = $targetDatasValidation;
        }
        if (!empty($discountDatasValidation)) {
            $errors['discount'] = $discountDatasValidation;
        }
        if (!empty($templateDatasValidation['appearance']) || !empty($templateDatasValidation['datas'])) {
            $errors['template'] = $templateDatasValidation;
        }

        if (!empty($errors)) {
            echo json_encode([
                'errors' => $errors,
            ]);

            return;
        }

        // Step 2 - Save or Update the reminder's datas
        $ajaxActionProcess = Tools::getValue('saveAction');

        if ($ajaxActionProcess === 'add') {
            $result = $targetValidation->save($aTargetData)
                && $discountValidation->save($aDiscountData)
                && $templateValidation->save($aTemplateData);
        } else {
            $reminderId = (int) Tools::getValue('reminder_id');

            $result = $targetValidation->update($aTargetData, $reminderId)
                && $discountValidation->update($aDiscountData, $reminderId)
                && $templateValidation->update($aTemplateData, $reminderId);
        }

        $this->ajaxDie(json_encode([
            'result' => $result,
        ]));
    }
}

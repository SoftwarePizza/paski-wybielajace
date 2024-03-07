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
class AdminCAPDiscountController extends ModuleAdminController
{
    /**
     * ajaxProcessLoadTemplate
     *
     * @return void
     */
    public function ajaxProcessLoadTemplate()
    {
        $this->initializeTemplate();

        // If $reminderId > 0 that means we are updating a Reminder and we must load the reminder datas
        $reminderId = (int) Tools::getValue('reminder_id');

        if ($reminderId > 0) {
            $this->loadTemplateExistingDatas($reminderId);
        }

        exit($this->context->smarty->fetch(_PS_MODULE_DIR_ . '/' . $this->module->name . '/views/templates/admin/tabs/reminder_plan/discount.tpl'));
    }

    /**
     * prepareDefaultDiscount
     *
     * @return array
     */
    public function prepareDefaultDiscount()
    {
        return [
            [
                'discount_from' => 1,
                'discount_to' => 29,
            ],
            [
                'discount_from' => 30,
                'discount_to' => 31,
            ],
        ];
    }

    /**
     * Initialize medias JS and smarty variables
     *
     * @return void
     */
    public function initializeTemplate()
    {
        $this->context->smarty->assign([
            'currency' => $this->context->currency->sign,
            'discount_infos' => $this->prepareDefaultDiscount(),
        ]);
    }

    /**
     * loadTemplateExistingDatas
     *
     * @param int $reminderId
     *
     * @return void
     */
    public function loadTemplateExistingDatas($reminderId)
    {
        $oReminderInfos = new CartReminderInfo();

        $allReminderdiscountInformations = $oReminderInfos->getDiscountInfos($reminderId);

        $this->context->smarty->assign([
            'multiple_discount' => count($allReminderdiscountInformations),
            'discount_infos' => $allReminderdiscountInformations,
        ]);
    }
}

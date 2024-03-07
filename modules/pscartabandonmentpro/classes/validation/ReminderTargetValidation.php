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
class ReminderTargetValidation implements ReminderStepsValidation
{
    const NEWSLETTER_ERROR = 'Newletter is invalid';
    const TARGET_ERROR = 'Target is invalid';
    const FREQUENCY_NUMBER_ERROR = 'Frequency number is invalid';
    const FREQUENCY_TYPE_ERROR = 'Frequency type is invalid';

    /**
     * Validates the Target step
     *
     * @param array $data
     *
     * @return array Error lists, bool if ok
     */
    public function validate($data)
    {
        $messagesError = [];

        if (empty($data)) {
            array_push(
                $messagesError,
                self::NEWSLETTER_ERROR,
                self::TARGET_ERROR,
                self::FREQUENCY_NUMBER_ERROR,
                self::FREQUENCY_TYPE_ERROR
            );

            return $messagesError;
        }

        /*
        * Is mandatory
        * Check if data 'cart_target_newsletter' exist
        * Data must be '1' or '0'
        */
        if (isset($data['cart_target_newsletter'])) {
            if (!in_array($data['cart_target_newsletter'], ['0', '1'])) {
                $messagesError[] = self::NEWSLETTER_ERROR;
            }
        } else {
            $messagesError[] = self::NEWSLETTER_ERROR;
        }

        /*
        * Is mandatory
        * Check if data 'cart_target' exist
        * Data must be an array
        * count(Data) must be > 0
        * Data must be 'active' or 'inactive' or 'no_orders'
        */
        if (isset($data['cart_target'])) {
            if (!is_array($data['cart_target']) || !count($data['cart_target'])) {
                $messagesError[] = self::TARGET_ERROR;
            } else {
                foreach ($data['cart_target'] as $value) {
                    if (!in_array($value, ['active', 'inactive', 'no_orders'])) {
                        $messagesError[] = self::TARGET_ERROR;
                        break;
                    }
                }
            }
        } else {
            $messagesError[] = self::TARGET_ERROR;
        }

        /*
        * Is mandatory
        * Check if data 'cart_frequency_number' exist
        * Data must be between 1 and 255
        */
        if (isset($data['cart_frequency_number'])) {
            if ((int) $data['cart_frequency_number'] < 1 || (int) $data['cart_frequency_number'] > 255) {
                $messagesError[] = self::FREQUENCY_NUMBER_ERROR;
            }
        } else {
            $messagesError[] = self::FREQUENCY_NUMBER_ERROR;
        }

        /*
        * Is mandatory
        * Check if data 'cart_frequency_type' exist
        * Data must be 'hour' or 'day'
        */
        if (isset($data['cart_frequency_type'])) {
            if (!in_array($data['cart_frequency_type'], ['hour', 'day'])) {
                $messagesError[] = self::FREQUENCY_TYPE_ERROR;
            }
        } else {
            $messagesError[] = self::FREQUENCY_TYPE_ERROR;
        }

        return $messagesError;
    }

    /**
     * prepareTargetDatas
     *
     * @param array $data
     *
     * @return array
     */
    private function prepareTargetDatas($data)
    {
        $aExistingCartTargets = [
            'active',
            'inactive',
            'no_orders',
        ];

        /**
         * $data['cart_target'] is an array which can contain these following datas : 'active' or 'inactive' or 'no_orders'
         * The result must be an array having these datas as key :
         * $data['cart_target_active'] or $data['cart_target_inactive'] or $data['cart_target_no_orders']
         */
        foreach ($data['cart_target'] as $key => $value) {
            $data['cart_target_' . $value] = 1;
        }

        // if a target is not on the list, we create it and set it to 0
        foreach ($aExistingCartTargets as $value) {
            if (!isset($data['cart_target_' . $value])) {
                $data['cart_target_' . $value] = 0;
            }
        }

        unset($data['cart_target']);

        // we escape the datas
        $data = array_map('pSQL', $data);

        return $data;
    }

    /**
     * Save the Target step
     *
     * @param array $data
     *
     * @return bool
     */
    public function save($data)
    {
        $data = $this->prepareTargetDatas($data);
        $data['id_shop'] = (int) Context::getContext()->shop->id;

        if (!Db::getInstance()->insert('cart_abandonment', $data)) {
            return false;
        }

        return true;
    }

    /**
     * Update the Target step
     *
     * @param array $data
     *
     * @return bool
     */
    public function update($data, $reminderId)
    {
        $data = $this->prepareTargetDatas($data);
        $where = 'id_cart_abandonment = ' . $reminderId . ' AND id_shop = ' . (int) Context::getContext()->shop->id;

        if (!Db::getInstance()->update('cart_abandonment', $data, $where)) {
            return false;
        }

        return true;
    }
}

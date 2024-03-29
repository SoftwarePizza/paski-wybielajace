<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3c4c96ddfdd6dcdc6c9a56703a10a425
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PrestaShop\\Decimal\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PrestaShop\\Decimal\\' => 
        array (
            0 => __DIR__ . '/..' . '/prestashop/decimal/src',
        ),
    );

    public static $classMap = array (
        'APIFAQ' => __DIR__ . '/../..' . '/classes/APIFAQClass.php',
        'AdminCAPDiscountController' => __DIR__ . '/../..' . '/controllers/admin/AdminCAPDiscountController.php',
        'AdminCAPEmailTestController' => __DIR__ . '/../..' . '/controllers/admin/AdminCAPEmailTestController.php',
        'AdminCAPListingController' => __DIR__ . '/../..' . '/controllers/admin/AdminCAPListingController.php',
        'AdminCAPReminderController' => __DIR__ . '/../..' . '/controllers/admin/AdminCAPReminderController.php',
        'AdminCAPStatisticsController' => __DIR__ . '/../..' . '/controllers/admin/AdminCAPStatisticsController.php',
        'AdminCAPTargetController' => __DIR__ . '/../..' . '/controllers/admin/AdminCAPTargetController.php',
        'AdminCAPTemplateController' => __DIR__ . '/../..' . '/controllers/admin/AdminCAPTemplateController.php',
        'CartReminderCheckOlderVersion' => __DIR__ . '/../..' . '/classes/CartReminderCheckOlderVersion.php',
        'CartReminderCreateEmailByLang' => __DIR__ . '/../..' . '/classes/CartReminderCreateEmailByLang.php',
        'CartReminderCustomerInfo' => __DIR__ . '/../..' . '/classes/CartReminderCustomerInfo.php',
        'CartReminderDatasModify' => __DIR__ . '/../..' . '/classes/CartReminderDatasModify.php',
        'CartReminderFrontControllerRouter' => __DIR__ . '/../..' . '/classes/CartReminderFrontControllerRouter.php',
        'CartReminderInfo' => __DIR__ . '/../..' . '/classes/CartReminderInfo.php',
        'CartReminderProductInfo' => __DIR__ . '/../..' . '/classes/CartReminderProductInfo.php',
        'CartReminderStatistics' => __DIR__ . '/../..' . '/classes/CartReminderStatistics.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PrestaShop\\Decimal\\Builder' => __DIR__ . '/..' . '/prestashop/decimal/src/Builder.php',
        'PrestaShop\\Decimal\\DecimalNumber' => __DIR__ . '/..' . '/prestashop/decimal/src/DecimalNumber.php',
        'PrestaShop\\Decimal\\Exception\\DivisionByZeroException' => __DIR__ . '/..' . '/prestashop/decimal/src/Exception/DivisionByZeroException.php',
        'PrestaShop\\Decimal\\Number' => __DIR__ . '/..' . '/prestashop/decimal/src/Number.php',
        'PrestaShop\\Decimal\\Operation\\Addition' => __DIR__ . '/..' . '/prestashop/decimal/src/Operation/Addition.php',
        'PrestaShop\\Decimal\\Operation\\Comparison' => __DIR__ . '/..' . '/prestashop/decimal/src/Operation/Comparison.php',
        'PrestaShop\\Decimal\\Operation\\Division' => __DIR__ . '/..' . '/prestashop/decimal/src/Operation/Division.php',
        'PrestaShop\\Decimal\\Operation\\MagnitudeChange' => __DIR__ . '/..' . '/prestashop/decimal/src/Operation/MagnitudeChange.php',
        'PrestaShop\\Decimal\\Operation\\Multiplication' => __DIR__ . '/..' . '/prestashop/decimal/src/Operation/Multiplication.php',
        'PrestaShop\\Decimal\\Operation\\Rounding' => __DIR__ . '/..' . '/prestashop/decimal/src/Operation/Rounding.php',
        'PrestaShop\\Decimal\\Operation\\Subtraction' => __DIR__ . '/..' . '/prestashop/decimal/src/Operation/Subtraction.php',
        'ReminderDiscountValidation' => __DIR__ . '/../..' . '/classes/validation/ReminderDiscountValidation.php',
        'ReminderStepsValidation' => __DIR__ . '/../..' . '/classes/validation/ReminderStepsValidation.php',
        'ReminderTargetValidation' => __DIR__ . '/../..' . '/classes/validation/ReminderTargetValidation.php',
        'ReminderTemplateValidation' => __DIR__ . '/../..' . '/classes/validation/ReminderTemplateValidation.php',
        'pscartabandonmentpro' => __DIR__ . '/../..' . '/pscartabandonmentpro.php',
        'pscartabandonmentproFrontCAPCronJobModuleFrontController' => __DIR__ . '/../..' . '/controllers/front/FrontCAPCronJob.php',
        'pscartabandonmentproFrontCAPEmailClickCartUrlModuleFrontController' => __DIR__ . '/../..' . '/controllers/front/FrontCAPEmailClickCartUrl.php',
        'pscartabandonmentproFrontCAPEmailClickProductUrlModuleFrontController' => __DIR__ . '/../..' . '/controllers/front/FrontCAPEmailClickProductUrl.php',
        'pscartabandonmentproFrontCAPEmailClickShopUrlModuleFrontController' => __DIR__ . '/../..' . '/controllers/front/FrontCAPEmailClickShopUrl.php',
        'pscartabandonmentproFrontCAPEmailVisualizeModuleFrontController' => __DIR__ . '/../..' . '/controllers/front/FrontCAPEmailVisualize.php',
        'pscartabandonmentproFrontCAPUnsubscribeJobModuleFrontController' => __DIR__ . '/../..' . '/controllers/front/FrontCAPUnsubscribeJob.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3c4c96ddfdd6dcdc6c9a56703a10a425::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3c4c96ddfdd6dcdc6c9a56703a10a425::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3c4c96ddfdd6dcdc6c9a56703a10a425::$classMap;

        }, null, ClassLoader::class);
    }
}

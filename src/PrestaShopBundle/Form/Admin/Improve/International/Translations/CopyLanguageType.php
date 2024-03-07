<?php
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

namespace PrestaShopBundle\Form\Admin\Improve\International\Translations;

use PrestaShopBundle\Form\Admin\Type\TranslatorAwareType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Translation\TranslatorInterface;

/**
 * Class CopyLanguageType is responsible for building 'Copy' form
 * in 'Improve > International > Translations' page.
 */
class CopyLanguageType extends TranslatorAwareType
{
    /**
     * @var array
     */
    private $themeChoices;

    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param array $themeChoices
     */
    public function __construct(
        TranslatorInterface $translator,
        array $locales,
        array $themeChoices
    ) {
        parent::__construct($translator, $locales);
        $this->themeChoices = $themeChoices;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $localeChoices = $this->getLocaleChoices();

        $builder
            ->add('from_language', ChoiceType::class, [
                'label' => $this->trans(
                    'From',
                    'Admin.Global'
                ),
                'choices' => $localeChoices,
                'choice_translation_domain' => false,
            ])
            ->add('from_theme', ChoiceType::class, [
                'label' => false,
                'choices' => $this->themeChoices,
                'choice_translation_domain' => false,
            ])
            ->add('to_language', ChoiceType::class, [
                'label' => $this->trans(
                    'To',
                    'Admin.Global'
                ),
                'choices' => $localeChoices,
                'choice_translation_domain' => false,
            ])
            ->add('to_theme', ChoiceType::class, [
                'label' => false,
                'choices' => $this->themeChoices,
                'choice_translation_domain' => false,
            ]);
    }
}

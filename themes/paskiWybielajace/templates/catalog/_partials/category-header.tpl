{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
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
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
 {assign var='desc_read_more_characters' value=650}

<div id="js-product-list-header">
    {if $listing.pagination.items_shown_from == 1}
        <div class="block-category card card-block">
            
            <div class="block-category-inner">
                {if $category.description}
                    <div id="category-description" data-status="close"><p>{$category.description|strip_tags|escape:'htmlall':'UTF-8'|truncate:$desc_read_more_characters:'...'}</p></div>

                    {if $category.description|strlen > $desc_read_more_characters}
                        <div class="read-more">
                            <span>Czytaj dalej</span>
                            <div class="icon"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.3335 10.5H16.6668M10.8335 4.66663L16.6668 10.5L10.8335 16.3333" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <div id="descFull" data-full="{$category.description}" data-short="{$category.description|strip_tags|escape:'htmlall':'UTF-8'|truncate:$desc_read_more_characters:'...'}"></div>
                    {/if}
                {/if}
            </div>
        </div>
    {/if}
</div>

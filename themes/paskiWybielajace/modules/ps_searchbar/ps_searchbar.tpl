{**
 * 2007-2020 PrestaShop SA and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
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
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

<div id="search_widget" class="search-widgets" data-search-controller-url="{$search_controller_url}">
    <a onclick="openSearch(this)" >
      <div class="icon">
        <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M22.5387 21.2713L27.8925 26.6238L26.1238 28.3925L20.7713 23.0387C18.7797 24.6353 16.3025 25.5036 13.75 25.5C7.54 25.5 2.5 20.46 2.5 14.25C2.5 8.04 7.54 3 13.75 3C19.96 3 25 8.04 25 14.25C25.0036 16.8025 24.1353 19.2797 22.5387 21.2713ZM20.0312 20.3438C21.6176 18.7124 22.5036 16.5255 22.5 14.25C22.5 9.415 18.5837 5.5 13.75 5.5C8.915 5.5 5 9.415 5 14.25C5 19.0837 8.915 23 13.75 23C16.0255 23.0036 18.2124 22.1176 19.8438 20.5312L20.0312 20.3438Z" fill="#1D4385"/>
        </svg>
      </div>
    </a>
    <div class="search-wrapper">
      <form method="get" action="{$search_controller_url}">
        <input type="hidden" name="controller" value="search">
        
        <input type="text" name="s" value="{$search_string}" placeholder="{l s='Search our catalog' d='Shop.Theme.Catalog'}" aria-label="{l s='Search' d='Shop.Theme.Catalog'}">
        <button type="submit"><i class="material-icons search" aria-hidden="true">search</i></button>
        <i class="material-icons clear" aria-hidden="true">clear</i>
      </form>
    </div>

</div>

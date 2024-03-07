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
<div id="_desktop_cart">
  <div class="blockcart cart-preview {if $cart.products_count > 0}active{else}inactive{/if}" data-refresh-url="{$refresh_url}">
    <div class="header">
      {if $cart.products_count > 0}
        <a rel="nofollow" aria-label="{l s='Shopping cart link containing %nbProducts% product(s)' sprintf=['%nbProducts%' => $cart.products_count] d='Shop.Theme.Checkout'}" href="{$cart_url}">
      {/if}
         <div class="icon">
          <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.646 6.198C3.646 5.90792 3.76123 5.62972 3.96635 5.4246C4.17147 5.21948 4.44967 5.10425 4.73975 5.10425H5.5535C6.93891 5.10425 7.77016 6.03612 8.24412 6.90237C8.56058 7.47987 8.78954 8.14925 8.96891 8.75592C9.01743 8.75208 9.06608 8.75014 9.11475 8.75008H27.341C28.5514 8.75008 29.4264 9.908 29.0939 11.0732L26.4281 20.4197C26.1891 21.258 25.6834 21.9956 24.9877 22.5208C24.2919 23.0461 23.444 23.3303 22.5722 23.3305H13.8981C13.0194 23.3305 12.1651 23.042 11.4663 22.5093C10.7676 21.9765 10.2632 21.2291 10.0306 20.3817L8.92225 16.3392L7.08475 10.1442L7.08329 10.1326C6.85579 9.30571 6.64287 8.53133 6.32495 7.95383C6.02016 7.39237 5.77516 7.29175 5.55495 7.29175H4.73975C4.44967 7.29175 4.17147 7.17651 3.96635 6.9714C3.76123 6.76628 3.646 6.48808 3.646 6.198ZM11.0441 15.8084L12.1393 19.8028C12.3581 20.5932 13.077 21.143 13.8981 21.143H22.5722C22.9685 21.143 23.3539 21.0139 23.6702 20.7752C23.9865 20.5365 24.2164 20.2013 24.3252 19.8203L26.8583 10.9376H9.60329L11.0237 15.7311L11.0441 15.8084ZM16.0418 27.7084C16.0418 28.482 15.7345 29.2238 15.1876 29.7708C14.6406 30.3178 13.8987 30.6251 13.1252 30.6251C12.3516 30.6251 11.6097 30.3178 11.0628 29.7708C10.5158 29.2238 10.2085 28.482 10.2085 27.7084C10.2085 26.9349 10.5158 26.193 11.0628 25.646C11.6097 25.099 12.3516 24.7917 13.1252 24.7917C13.8987 24.7917 14.6406 25.099 15.1876 25.646C15.7345 26.193 16.0418 26.9349 16.0418 27.7084ZM13.8543 27.7084C13.8543 27.515 13.7775 27.3296 13.6408 27.1928C13.504 27.0561 13.3186 26.9792 13.1252 26.9792C12.9318 26.9792 12.7463 27.0561 12.6096 27.1928C12.4728 27.3296 12.396 27.515 12.396 27.7084C12.396 27.9018 12.4728 28.0873 12.6096 28.224C12.7463 28.3608 12.9318 28.4376 13.1252 28.4376C13.3186 28.4376 13.504 28.3608 13.6408 28.224C13.7775 28.0873 13.8543 27.9018 13.8543 27.7084ZM26.2502 27.7084C26.2502 28.482 25.9429 29.2238 25.3959 29.7708C24.8489 30.3178 24.107 30.6251 23.3335 30.6251C22.5599 30.6251 21.8181 30.3178 21.2711 29.7708C20.7241 29.2238 20.4168 28.482 20.4168 27.7084C20.4168 26.9349 20.7241 26.193 21.2711 25.646C21.8181 25.099 22.5599 24.7917 23.3335 24.7917C24.107 24.7917 24.8489 25.099 25.3959 25.646C25.9429 26.193 26.2502 26.9349 26.2502 27.7084ZM24.0627 27.7084C24.0627 27.515 23.9858 27.3296 23.8491 27.1928C23.7124 27.0561 23.5269 26.9792 23.3335 26.9792C23.1401 26.9792 22.9546 27.0561 22.8179 27.1928C22.6812 27.3296 22.6043 27.515 22.6043 27.7084C22.6043 27.9018 22.6812 28.0873 22.8179 28.224C22.9546 28.3608 23.1401 28.4376 23.3335 28.4376C23.5269 28.4376 23.7124 28.3608 23.8491 28.224C23.9858 28.0873 24.0627 27.9018 24.0627 27.7084Z" fill="#1D4385"/>
          </svg>
         </div>
        <span class="cart-products-count">{$cart.products_count}</span>
        <span class="hidden-md-down">{l s='Cart' d='Shop.Theme.Checkout'}</span>
      {if $cart.products_count > 0}
        </a>
      {/if}
    </div>
  </div>
</div>
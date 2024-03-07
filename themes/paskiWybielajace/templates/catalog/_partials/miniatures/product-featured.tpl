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
{block name='product_miniature_item'}
<div class="js-product product{if !empty($productClasses)} {$productClasses}{/if}">
  <article class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}">
    <div class="thumbnail-container">
      <div class="thumbnail-top">
        {block name='product_thumbnail'}
          {if $product.cover}
            <a href="{$product.url}" class="thumbnail product-thumbnail">
              <img
                src="{$product.cover.bySize.home_default.url}"
                alt="{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
                loading="lazy"
                data-full-size-image-url="{$product.cover.large.url}"
                width="{$product.cover.bySize.home_default.width}"
                height="{$product.cover.bySize.home_default.height}"
              />
            </a>
          {else}
            <a href="{$product.url}" class="thumbnail product-thumbnail">
              <img
                src="{$urls.no_picture_image.bySize.home_default.url}"
                loading="lazy"
                width="{$urls.no_picture_image.bySize.home_default.width}"
                height="{$urls.no_picture_image.bySize.home_default.height}"
              />
            </a>
          {/if}
        {/block}
        {block name='product_variants'}
        {if $product.main_variants}
            <div class="highlighted-informations{if !$product.main_variants} no-variants{/if}">
              {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
            </div>
          {/if}
        {/block}
      </div>
      <div class="product-description">
        {block name='product_name'}
          {if $page.page_name == 'index'}
            <h3 class="h3 product-title"><a href="{$product.url}" content="{$product.url}">{$product.name}</a></h3>
          {else}
            <h2 class="h3 product-title"><a href="{$product.url}" content="{$product.url}">{$product.name}</a></h2>
          {/if}
        {/block}
        {block name='product_delivery_info'}
        {if !empty($shop.top_banner_mobile) }
                  <div class="banner-delivery">
                      <span class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M18 18.5C17.6022 18.5 17.2206 18.342 16.9393 18.0607C16.658 17.7794 16.5 17.3978 16.5 17C16.5 16.6022 16.658 16.2206 16.9393 15.9393C17.2206 15.658 17.6022 15.5 18 15.5C18.3978 15.5 18.7794 15.658 19.0607 15.9393C19.342 16.2206 19.5 16.6022 19.5 17C19.5 17.3978 19.342 17.7794 19.0607 18.0607C18.7794 18.342 18.3978 18.5 18 18.5ZM19.5 9.5L21.46 12H17V9.5M6 18.5C5.60218 18.5 5.22064 18.342 4.93934 18.0607C4.65804 17.7794 4.5 17.3978 4.5 17C4.5 16.6022 4.65804 16.2206 4.93934 15.9393C5.22064 15.658 5.60218 15.5 6 15.5C6.39782 15.5 6.77936 15.658 7.06066 15.9393C7.34196 16.2206 7.5 16.6022 7.5 17C7.5 17.3978 7.34196 17.7794 7.06066 18.0607C6.77936 18.342 6.39782 18.5 6 18.5ZM20 8H17V4H3C1.89 4 1 4.89 1 6V17H3C3 17.7956 3.31607 18.5587 3.87868 19.1213C4.44129 19.6839 5.20435 20 6 20C6.79565 20 7.55871 19.6839 8.12132 19.1213C8.68393 18.5587 9 17.7956 9 17H15C15 17.7956 15.3161 18.5587 15.8787 19.1213C16.4413 19.6839 17.2044 20 18 20C18.7956 20 19.5587 19.6839 20.1213 19.1213C20.6839 18.5587 21 17.7956 21 17H23V12L20 8Z" fill="#1D4385"/>
                        </svg>
                      </span>
                      <span class="label-mobile">{$shop.top_banner_mobile}</span>
                  </div>
              {/if}
        {/block}
        {block name='product_aplication_times'}
            <div class="product-aplication-times">
            {foreach from=$product.features item=feature }
              {if $feature.id_feature eq 3 }
                <p>{$feature.value}</p>
              {/if}
            {/foreach}
            </div>
        {/block}
        {block name='product_price_and_shipping'}
          {if $product.show_price}
            <div class="product-price-and-shipping">
            

              {hook h='displayProductPriceBlock' product=$product type="before_price"}

              <span class="price" aria-label="{l s='Price' d='Shop.Theme.Catalog'}">
                {capture name='custom_price'}{hook h='displayProductPriceBlock' product=$product type='custom_price' hook_origin='products_list'}{/capture}
                {if '' !== $smarty.capture.custom_price}
                  {$smarty.capture.custom_price nofilter}
                {else}
                  {$product.price}
                {/if}
              </span>
                {if $product.has_discount}

                {if $product.discount_type === 'percentage'}
                  <span class="discount-percentage discount-product">{$product.discount_percentage}</span>
                {elseif $product.discount_type === 'amount'}
                  <span class="discount-amount discount-product">{$product.discount_amount_to_display}</span>
                {/if}
                {hook h='displayProductPriceBlock' product=$product type="old_price"}
                <span class="regular-price" aria-label="{l s='Regular price' d='Shop.Theme.Catalog'}">{$product.regular_price}</span>
              {/if}
              {hook h='displayProductPriceBlock' product=$product type='unit_price'}

              {hook h='displayProductPriceBlock' product=$product type='weight'}
               <div class="product-actions js-product-actions">
              {block name='product_buy'}
                <form action="{$urls.pages.cart}" method="post" class="add-to-cart-or-refresh">
                  <input type="hidden" name="token" value="{$static_token}">
                  <input type="hidden" name="id_product" value="{$product.id}" class="product_page_product_id">
                  <input type="hidden" name="qty" value="1">
                  <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" {if $product.quantity < 1 }disabled{/if}>
                    <div class="icon">
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3.646 6.198C3.646 5.90792 3.76123 5.62972 3.96635 5.4246C4.17147 5.21948 4.44967 5.10425 4.73975 5.10425H5.5535C6.93891 5.10425 7.77016 6.03612 8.24412 6.90237C8.56058 7.47987 8.78954 8.14925 8.96891 8.75592C9.01743 8.75208 9.06608 8.75014 9.11475 8.75008H27.341C28.5514 8.75008 29.4264 9.908 29.0939 11.0732L26.4281 20.4197C26.1891 21.258 25.6834 21.9956 24.9877 22.5208C24.2919 23.0461 23.444 23.3303 22.5722 23.3305H13.8981C13.0194 23.3305 12.1651 23.042 11.4663 22.5093C10.7676 21.9765 10.2632 21.2291 10.0306 20.3817L8.92225 16.3392L7.08475 10.1442L7.08329 10.1326C6.85579 9.30571 6.64287 8.53133 6.32495 7.95383C6.02016 7.39237 5.77516 7.29175 5.55495 7.29175H4.73975C4.44967 7.29175 4.17147 7.17651 3.96635 6.9714C3.76123 6.76628 3.646 6.48808 3.646 6.198ZM11.0441 15.8084L12.1393 19.8028C12.3581 20.5932 13.077 21.143 13.8981 21.143H22.5722C22.9685 21.143 23.3539 21.0139 23.6702 20.7752C23.9865 20.5365 24.2164 20.2013 24.3252 19.8203L26.8583 10.9376H9.60329L11.0237 15.7311L11.0441 15.8084ZM16.0418 27.7084C16.0418 28.482 15.7345 29.2238 15.1876 29.7708C14.6406 30.3178 13.8987 30.6251 13.1252 30.6251C12.3516 30.6251 11.6097 30.3178 11.0628 29.7708C10.5158 29.2238 10.2085 28.482 10.2085 27.7084C10.2085 26.9349 10.5158 26.193 11.0628 25.646C11.6097 25.099 12.3516 24.7917 13.1252 24.7917C13.8987 24.7917 14.6406 25.099 15.1876 25.646C15.7345 26.193 16.0418 26.9349 16.0418 27.7084ZM13.8543 27.7084C13.8543 27.515 13.7775 27.3296 13.6408 27.1928C13.504 27.0561 13.3186 26.9792 13.1252 26.9792C12.9318 26.9792 12.7463 27.0561 12.6096 27.1928C12.4728 27.3296 12.396 27.515 12.396 27.7084C12.396 27.9018 12.4728 28.0873 12.6096 28.224C12.7463 28.3608 12.9318 28.4376 13.1252 28.4376C13.3186 28.4376 13.504 28.3608 13.6408 28.224C13.7775 28.0873 13.8543 27.9018 13.8543 27.7084ZM26.2502 27.7084C26.2502 28.482 25.9429 29.2238 25.3959 29.7708C24.8489 30.3178 24.107 30.6251 23.3335 30.6251C22.5599 30.6251 21.8181 30.3178 21.2711 29.7708C20.7241 29.2238 20.4168 28.482 20.4168 27.7084C20.4168 26.9349 20.7241 26.193 21.2711 25.646C21.8181 25.099 22.5599 24.7917 23.3335 24.7917C24.107 24.7917 24.8489 25.099 25.3959 25.646C25.9429 26.193 26.2502 26.9349 26.2502 27.7084ZM24.0627 27.7084C24.0627 27.515 23.9858 27.3296 23.8491 27.1928C23.7124 27.0561 23.5269 26.9792 23.3335 26.9792C23.1401 26.9792 22.9546 27.0561 22.8179 27.1928C22.6812 27.3296 22.6043 27.515 22.6043 27.7084C22.6043 27.9018 22.6812 28.0873 22.8179 28.224C22.9546 28.3608 23.1401 28.4376 23.3335 28.4376C23.5269 28.4376 23.7124 28.3608 23.8491 28.224C23.9858 28.0873 24.0627 27.9018 24.0627 27.7084Z" fill="#1D4385"/>
                    </svg>
                    </div>
                    <span class="label">{l s='Dodaj do koszyka' d='Shop.Theme.Actions'}</span>
                  </button>
                </form>
              {/block}

            </div>

            </div>
          {/if}
        {/block}

      
      </div>

      {include file='catalog/_partials/product-flags.tpl'}
    </div>
  </article>
</div>
{/block}

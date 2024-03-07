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
{extends file=$layout}

{block name='head' append}
  <meta property="og:type" content="product">
  {if $product.cover}
    <meta property="og:image" content="{$product.cover.large.url}">
  {/if}

  {if $product.show_price}
    <meta property="product:pretax_price:amount" content="{$product.price_tax_exc}">
    <meta property="product:pretax_price:currency" content="{$currency.iso_code}">
    <meta property="product:price:amount" content="{$product.price_amount}">
    <meta property="product:price:currency" content="{$currency.iso_code}">
  {/if}
  {if isset($product.weight) && ($product.weight != 0)}
    <meta property="product:weight:value" content="{$product.weight}">
    <meta property="product:weight:units" content="{$product.weight_unit}">
  {/if}
{/block}

{block name='head_microdata_special'}
  {include file='_partials/microdata/product-jsonld.tpl'}
{/block}

{block name='content'}

  <section id="main">
    <meta content="{$product.url}">

    <div class="row product-container js-product-container">
      <div class="col-md-6 product-images-desktop">
        {block name='page_content_container'}
          <section class="page-content" id="content">
            {block name='page_content'}
              {include file='catalog/_partials/product-flags.tpl'}

              {block name='product_cover_thumbnails'}
                {include file='catalog/_partials/product-cover-thumbnails.tpl'}
              {/block}
              <div class="scroll-box-arrows">
                <i class="material-icons left">&#xE314;</i>
                <i class="material-icons right">&#xE315;</i>
              </div>

            {/block}
          </section>
        {/block}
      </div>
      <div class="col-md-6 product-images-mobile">
        {block name='page_content_container'}
          <section class="page-content" id="content">
            {block name='page_content'}
              {include file='catalog/_partials/product-flags.tpl'}

              {block name='product_cover_thumbnails'}
                {include file='catalog/_partials/product-cover-thumbnails-mobile.tpl'}
              {/block}

            {/block}
          </section>
        {/block}
      </div>
      <div class="col-md-6">
        {block name='page_header_container'}
          {block name='page_header'}
            <div class="boxesInProduct">
              {foreach from=$product.features item=feature }
                {if $feature.id_feature eq 5}
                  <h3>{$feature.value} {if $feature.value eq 1 }opakowanie{elseif $feature.value > 1}opakowania{/if} </h3>
                {/if}
              {/foreach}

            </div>
            <h1 class="h1">{block name='page_title'}{$product.name}{/block}</h1>

            <div class="stars">
              {* {assign var='tempGrade' value=$product.productComments.averageRating}
              {assign var='totalGrades' value=$product.productComments.nbComments} *}
              {assign var='tempGrade' value=5}
              {assign var='totalGrades' value=77}
              
              {if $tempGrade != 0}
                <div class="grade-stars" data-grade="{$tempGrade}"></div>
              {/if}

              {if $tempGrade != 0}
                <p>{$totalGrades}
                  {if $totalGrades == 1}opinia{else if $totalGrades >= 2 && $totalGrades <= 5}opinie{else}opinii{/if}</p>
              {/if}
            </div>

            <div class="qty-info">
              <hr>
              <div class="wrapper">
                <div class="info">
                  {if $product.quantity gt 0}
                    <p><span class="icon"><svg width="30" height="31" viewBox="0 0 30 31" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M15 3C8.125 3 2.5 8.625 2.5 15.5C2.5 22.375 8.125 28 15 28C21.875 28 27.5 22.375 27.5 15.5C27.5 8.625 21.875 3 15 3ZM15 25.5C9.4875 25.5 5 21.0125 5 15.5C5 9.9875 9.4875 5.5 15 5.5C20.5125 5.5 25 9.9875 25 15.5C25 21.0125 20.5125 25.5 15 25.5ZM20.7375 9.975L12.5 18.2125L9.2625 14.9875L7.5 16.75L12.5 21.75L22.5 11.75L20.7375 9.975Z"
                            fill="#1CD6A9" />
                        </svg>
                      </span>
                      <span class="text">{l s='W magazynie'  d='Shop.Theme.Global'}</span>
                    </p>
                  {else}
                    <p>Out of stock</p>
                  {/if}
                </div>
                <div class="delivery">
                  {if $product.delivery_in_stock}
                    <p>
                      <span class="delivery-information"><svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M2 20.5C1.45 20.5 0.979002 20.304 0.587002 19.912C0.195002 19.52 -0.000664969 19.0493 1.69779e-06 18.5V4.5C1.69779e-06 3.95 0.196002 3.479 0.588002 3.087C0.980002 2.695 1.45067 2.49933 2 2.5H3V0.5H5V2.5H13V0.5H15V2.5H16C16.55 2.5 17.021 2.696 17.413 3.088C17.805 3.48 18.0007 3.95067 18 4.5V18.5C18 19.05 17.804 19.521 17.412 19.913C17.02 20.305 16.5493 20.5007 16 20.5H2ZM2 18.5H16V8.5H2V18.5Z"
                            fill="#828282" />
                        </svg>
                      </span>
                      </span class="text"> {$product.delivery_in_stock}</span>
                    </p>

                    {elseif $product.delivery_information }
                    <p>
                      <span class="delivery-information"><svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M2 20.5C1.45 20.5 0.979002 20.304 0.587002 19.912C0.195002 19.52 -0.000664969 19.0493 1.69779e-06 18.5V4.5C1.69779e-06 3.95 0.196002 3.479 0.588002 3.087C0.980002 2.695 1.45067 2.49933 2 2.5H3V0.5H5V2.5H13V0.5H15V2.5H16C16.55 2.5 17.021 2.696 17.413 3.088C17.805 3.48 18.0007 3.95067 18 4.5V18.5C18 19.05 17.804 19.521 17.412 19.913C17.02 20.305 16.5493 20.5007 16 20.5H2ZM2 18.5H16V8.5H2V18.5Z"
                            fill="#828282" />
                        </svg>
                      </span>
                      </span class="text"> {$product.delivery_information}</span>
                    </p>
                    {/if}


                </div>
              </div>
              <hr>
            </div>
          {/block}
        {/block}
        {block name='product_description_short'}
          <div id="product-description-short-{$product.id}" class="product-description">
            {$product.description_short nofilter}</div>
        {/block}
        {block name='product_prices'}
          {include file='catalog/_partials/product-prices.tpl'}
        {/block}

        <div class="product-information">
          

          {if $product.is_customizable && count($product.customizations.fields)}
            {block name='product_customization'}
              {include file="catalog/_partials/product-customization.tpl" customizations=$product.customizations}
            {/block}
          {/if}

          <div class="product-actions js-product-actions">
            {block name='product_buy'}
              <form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
                <input type="hidden" name="token" value="{$static_token}">
                <input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
                <input type="hidden" name="id_customization" value="{$product.id_customization}"
                  id="product_customization_id" class="js-product-customization-id">

                {block name='product_variants'}
                  {include file='catalog/_partials/product-variants.tpl'}
                {/block}

                {block name='product_pack'}
                  {if $packItems}
                    <section class="product-pack">
                      <p class="h4">{l s='This pack contains' d='Shop.Theme.Catalog'}</p>
                      {foreach from=$packItems item="product_pack"}
                        {block name='product_miniature'}
                          {include file='catalog/_partials/miniatures/pack-product.tpl' product=$product_pack showPackProductsPrice=$product.show_price}
                        {/block}
                      {/foreach}
                    </section>
                  {/if}
                {/block}

                {block name='product_discounts'}
                  {include file='catalog/_partials/product-discounts.tpl'}
                {/block}

                {block name='product_add_to_cart'}
                  {include file='catalog/_partials/product-add-to-cart.tpl'}
                {/block}

                {block name='product_additional_info'}
                  {include file='catalog/_partials/product-additional-info.tpl'}
                {/block}

                {* Input to refresh product HTML removed, block kept for compatibility with themes *}
                {block name='product_refresh'}{/block}
              </form>
            {/block}

          </div>
        </div>
      </div>
    </div>

    {block name='hook_display_reassurance'}
      {hook h='displayReassurance'}
    {/block}

    {block name='product_tabs'}
      <div class="tabs">
        <ul class="nav nav-tabs" role="tablist">
          {if $product.description}
            <li class="nav-item">
              <a class="nav-link{if $product.description} active js-product-nav-active{/if}" data-toggle="tab"
                href="#description" role="tab" aria-controls="description" {if $product.description} aria-selected="true"
                {/if}>{l s='Product Details' d='Shop.Theme.Catalog'}</a>
            </li>
          {/if}
          <li class="nav-item">
            <a class="nav-link{if !$product.description} active js-product-nav-active{/if}" data-toggle="tab"
              href="#product-details" role="tab" aria-controls="product-details" {if !$product.description}
              aria-selected="true" {/if}>{l s='Additional info' d='Shop.Theme.Catalog'}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab"
              href="#delivery" role="tab" aria-controls="delivery">{l s='Delivery' d='Shop.Theme.Catalog'}</a>
          </li>
          {if $product.attachments}
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#attachments" role="tab"
                aria-controls="attachments">{l s='Attachments' d='Shop.Theme.Catalog'}</a>
            </li>
          {/if}
          
          {foreach from=$product.extraContent item=extra key=extraKey}
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#extra-{$extraKey}" role="tab"
                aria-controls="extra-{$extraKey}">{$extra.title}</a>
            </li>
          {/foreach}
        </ul>

        <div class="tab-content" id="tab-content">
          <div class="tab-pane fade in{if $product.description} active js-product-tab-active{/if}" id="description"
            role="tabpanel">
            {block name='product_description'}
              <div class="product-description">{$product.description nofilter}</div>
            {/block}
          </div>

          {block name='product_details'}
            {include file='catalog/_partials/product-details.tpl'}
          {/block}
          
          <div class="tab-pane fade in" id="delivery"
          role="tabpanel">
          {block name='delivery'}
            {assign var=cms_content value=CMS::getCMSContent(1, true, true)}
            <div class="delivery">{$cms_content.content nofilter}</div>
          {/block}
          </div>
          
          {block name='product_attachments'}
            {if $product.attachments}
              <div class="tab-pane fade in" id="attachments" role="tabpanel">
                <section class="product-attachments">
                  <p class="h5 text-uppercase">{l s='Download' d='Shop.Theme.Actions'}</p>
                  {foreach from=$product.attachments item=attachment}
                    <div class="attachment">
                      <h4><a
                          href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">{$attachment.name}</a>
                      </h4>
                      <p>{$attachment.description}</p>
                      <a href="{url entity='attachment' params=['id_attachment' => $attachment.id_attachment]}">
                        {l s='Download' d='Shop.Theme.Actions'} ({$attachment.file_size_formatted})
                      </a>
                    </div>
                  {/foreach}
                </section>
              </div>
            {/if}
          {/block}

          {foreach from=$product.extraContent item=extra key=extraKey}
            <div class="tab-pane fade in {$extra.attr.class}" id="extra-{$extraKey}" role="tabpanel"
              {foreach $extra.attr as $key => $val} {$key}="{$val}" {/foreach}>
              {$extra.content nofilter}
            </div>
          {/foreach}
        </div>
      {/block}
    </div>


    {block name='product_accessories'}
      {if $accessories}
        <section class="product-accessories clearfix">
          <p class="h5 text-uppercase">{l s='You might also like' d='Shop.Theme.Catalog'}</p>
          <div class="products row">
            {foreach from=$accessories item="product_accessory" key="position"}
              {block name='product_miniature'}
                {include file='catalog/_partials/miniatures/product.tpl' product=$product_accessory position=$position productClasses="col-xs-12 col-sm-6 col-lg-4 col-xl-3"}
              {/block}
            {/foreach}
          </div>
        </section>
      {/if}
    {/block}

    {block name='product_footer'}
      {hook h='displayFooterProduct' product=$product category=$category}
    {/block}

    {block name='product_images_modal'}
      {include file='catalog/_partials/product-images-modal.tpl'}
    {/block}

    {block name='page_footer_container'}
      <footer class="page-footer">
        {block name='page_footer'}
          <!-- Footer content -->
        {/block}
      </footer>
    {/block}
  </section>

{/block}
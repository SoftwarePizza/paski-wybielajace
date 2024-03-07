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

<div class="block_newsletter col-lg-8 col-md-12 col-sm-12" id="blockEmailSubscription_{$hookName}">
  <div class="row">
    <div class="newsletter-header">
     <div class="icon">
      <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M4.625 14.3403V26.125C4.625 27.3848 5.11228 28.593 5.97963 29.4838C6.84699 30.3746 8.02337 30.875 9.25 30.875H27.75C28.9766 30.875 30.153 30.3746 31.0204 29.4838C31.8877 28.593 32.375 27.3848 32.375 26.125V11.875C32.375 10.6152 31.8877 9.40704 31.0204 8.51624C30.153 7.62544 28.9766 7.125 27.75 7.125H9.25C8.02337 7.125 6.84699 7.62544 5.97963 8.51624C5.11228 9.40704 4.625 10.6152 4.625 11.875V14.3403ZM9.25 9.5H27.75C28.3633 9.5 28.9515 9.75022 29.3852 10.1956C29.8189 10.641 30.0625 11.2451 30.0625 11.875V13.6325L18.5 20.026L6.9375 13.6325V11.875C6.9375 11.2451 7.18114 10.641 7.61482 10.1956C8.04849 9.75022 8.63669 9.5 9.25 9.5ZM6.9375 16.3305L17.9519 22.42C18.1204 22.5131 18.3087 22.5619 18.5 22.5619C18.6913 22.5619 18.8796 22.5131 19.0481 22.42L30.0625 16.3305V26.125C30.0625 26.7549 29.8189 27.359 29.3852 27.8044C28.9515 28.2498 28.3633 28.5 27.75 28.5H9.25C8.63669 28.5 8.04849 28.2498 7.61482 27.8044C7.18114 27.359 6.9375 26.7549 6.9375 26.125V16.3305Z" fill="#1D4385"/>
      </svg>

     </div>
      <h3 id="block-newsletter-label" class="col-md-5 col-xs-12">{l s='Sign up for the newsletter' d='Shop.Theme.Global'}</h3>
    </div>
    <div class="newsetter-form">
      <form action="{$urls.current_url}#blockEmailSubscription_{$hookName}" method="post">
      <div class="checkbox-container">
               <input
                  name="checkbox"
                  type="checkbox"
                  placeholder="{l s='Your email address' d='Shop.Forms.Labels'}"
                  aria-labelledby="block-newsletter-label"
                  required
                >
                <div>
                  <p>Potwierdzam, że zapoznałem się z <a href='#'>polityką prywatności</a> sklepu internetowego oraz zgadzam się na otrzymywanie treści marketingowych drogą mailową.</p>

                </div>
                </div>
        <div class="row">
          <div class="input-container">
            <input
              class="btn btn-primary float-xs-right "
              name="submitNewsletter"
              type="submit"
              value="{l s='Zapisz się' d='Shop.Theme.Actions'}"
            >
            <div class="arrow">
              <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.33301 10.5H16.6663M10.833 4.66663L16.6663 10.5L10.833 16.3333" stroke="#1D4385" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            
            <div class="input-wrapper">
              <input
                name="email"
                type="email"
                value="{$value}"
                placeholder="{l s='Your email address' d='Shop.Forms.Labels'}"
                aria-labelledby="block-newsletter-label"
                required
              >
            </div>
            <input type="hidden" name="blockHookName" value="{$hookName}" />
            <input type="hidden" name="action" value="0">
            <div class="clearfix"></div>
          </div>
          <div class="">
              {if $conditions}
                <p>{$conditions}</p>
              {/if}
              {if $msg}
                <p class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
                  {$msg}
                </p>
              {/if}
              {hook h='displayNewsletterRegistration'}
              {if isset($id_module)}
                {hook h='displayGDPRConsent' id_module=$id_module}
              {/if}
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

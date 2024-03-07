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
<div class="row">
  <div class="section-email">
      <div class="content-wrapper">
        <h2>{l s='Masz pytania?'  d='Shop.Theme.Custom'}</h2>
        <h3>{l s='Zapraszamy do kontaktu z naszymi ekspertami.'  d='Shop.Theme.Custom'}</h3>
        
        <div class="email-wrapper">
          <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.625 14.3403V26.125C4.625 27.3848 5.11228 28.593 5.97963 29.4838C6.84699 30.3746 8.02337 30.875 9.25 30.875H27.75C28.9766 30.875 30.153 30.3746 31.0204 29.4838C31.8877 28.593 32.375 27.3848 32.375 26.125V11.875C32.375 10.6152 31.8877 9.40704 31.0204 8.51624C30.153 7.62544 28.9766 7.125 27.75 7.125H9.25C8.02337 7.125 6.84699 7.62544 5.97963 8.51624C5.11228 9.40704 4.625 10.6152 4.625 11.875V14.3403ZM9.25 9.5H27.75C28.3633 9.5 28.9515 9.75022 29.3852 10.1956C29.8189 10.641 30.0625 11.2451 30.0625 11.875V13.6325L18.5 20.026L6.9375 13.6325V11.875C6.9375 11.2451 7.18114 10.641 7.61482 10.1956C8.04849 9.75022 8.63669 9.5 9.25 9.5ZM6.9375 16.3305L17.9519 22.42C18.1204 22.5131 18.3087 22.5619 18.5 22.5619C18.6913 22.5619 18.8796 22.5131 19.0481 22.42L30.0625 16.3305V26.125C30.0625 26.7549 29.8189 27.359 29.3852 27.8044C28.9515 28.2498 28.3633 28.5 27.75 28.5H9.25C8.63669 28.5 8.04849 28.2498 7.61482 27.8044C7.18114 27.359 6.9375 26.7549 6.9375 26.125V16.3305Z" fill="#1D4385"/>
            </svg>
            {if (!empty({$shop.email}))}
            <h3>
              <a class="mail" href="mailto:{$shop.email}">{$shop.email}</a>
            </h3>
         {/if}
            

        </div>
      </div>
  </div>
  <div class="section-img">

    <img src="{$urls.theme_assets}img/usmiechnieta-dentystka.png">
  </div>
</div>
<div class="row">
  <section class="section-header">
    <div class="header-wrapper">
      <h2>{l s='Skorzystaj z formularza kontaktowego'  d='Shop.Theme.Custom'}</h2>
        <h3>{l s='Odpowiedzmy w ciągu 24h'  d='Shop.Theme.Custom'}</h3>
    </div>
    
  </section>
  <section class="contact-form">
    <form action="{$urls.pages.contact}" method="post" {if $contact.allow_file_upload}enctype="multipart/form-data"{/if}>
      {if $notifications}
        <div class="col-xs-12 alert {if $notifications.nw_error}alert-danger{else}alert-success{/if}">
          <ul>
            {foreach $notifications.messages as $notif}
              <li>{$notif}</li>
            {/foreach}
          </ul>
        </div>
      {/if}
  
      {if !$notifications || $notifications.nw_error}
        <section class="form-fields">

        <div class="row top">
        <div class="form-group ">
           
            <div class="col">
              <input
                id="name"
                class="form-control"
                name="from"
                type="text"
                value="{$contact.email}"
                placeholder="{l s='Imię i nazwisko' d='Shop.Forms.Help'}"
              >
            </div>
          </div>
  
  
          <div class="form-group">
            
            <div class="col">
              <input
                id="email"
                class="form-control"
                name="from"
                type="email"
                value="{$contact.email}"
                placeholder="{l s='Adres e-mail' d='Shop.Forms.Help'}"
              >
            </div>
          </div>
        </div>

        
  
         
  
          <div class="form-group row textarea-wrapper">

            <div class="col">
              <textarea
                id="contactform-message"
                class="form-control"
                name="message"
                placeholder="{l s='Treść wiadomości' d='Shop.Forms.Help'}"
                rows="3"
              >{if $contact.message}{$contact.message}{/if}</textarea>
            </div>
          </div>
  
          {if isset($id_module)}
            <div class="form-group row">
              <div class="offset-md-3">
                {hook h='displayGDPRConsent' id_module=$id_module}
              </div>
            </div>
          {/if}

         

  
        </section>

        
        
  
        <footer class="form-footer text-sm-right">
        <div class="checkbox-container">
        <label>
             <input
                name="checkbox"
                type="checkbox"
                placeholder="{l s='Your email address' d='Shop.Forms.Labels'}"
                aria-labelledby="block-contact-form-label"
                required
              >
              
                <p>Akceptuję <a>Regulamin</a> i <a>Politykę Prywatności</a></p>

        </label>
              </div>
          <style>
            input[name=url] {
              display: none !important;
            }
          </style>
          <input type="text" name="url" value=""/>
          <input type="hidden" name="token" value="{$token}" />
          <button type="submit" name="submitMessage" class="btn btn-primary">
            {l s='Send' d='Modules.Contactform.Shop'}
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.3335 10.5H16.6668M10.8335 4.66663L16.6668 10.5L10.8335 16.3333" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button> 
           </footer>
      {/if}
  
    </form>
  </section>
</div>



{**
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
 *}


{foreach from=$aProducts item=item key=key name=products}

  <!-- ROW OF PRODUCTS BEGIN -->
  {* Start a new row every two products *}
  {* Begining of the opening of the row *}
  {if $smarty.foreach.products.index is even}
  <!--[if mso | IE]>
  <table role="presentation" border="0" cellpadding="0" cellspacing="0">

    <tr>
      <td
          class="" width="500px"
      >
      <table
          align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:500px;" width="500"
      >
        <tr>
          <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
      <![endif]-->

  <div style="margin: 0px auto; max-width: 500px;">
    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width: 100%;">
        <tbody>
            <tr>
              <td style="direction: ltr; font-size: 0px; padding: 15px; padding-bottom: 0; text-align: left; vertical-align: top;">

                  <!--[if mso | IE]>
                  <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                  <![endif]-->

  {/if}
  {* Ending of the opening of the row *}

                      <!-- PRODUCT BEGIN -->

                      <!--[if mso | IE]>
                    <td
                       class="" style="vertical-align:top;width:250px;"
                    >
                  <![endif]-->

                      <div class="mj-column-per-50 outlook-group-fix position-relative" style="font-size: 13px; text-align: left; direction: ltr; display: inline-block; vertical-align: top; width: 100%;">
                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                              <tbody>
                                  <tr>
                                      <td style="vertical-align: top; padding: 0 25px;">
                                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="" width="100%">
                                              <tr>
                                                  <td align="center" style="font-size: 0px; padding: 10px 25px; padding-top: 0px; padding-bottom: 0px; word-break: break-word;">
                                                      <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse: collapse; border-spacing: 0px;">
                                                          <tbody>
                                                              <tr>
                                                                  <td style="width: 115px;">
                                                                      <img alt="{$item.name}" height="auto" src="{$item.image}" style="border: 0; display: block; outline: none; text-decoration: none; height: auto; width: 100%;" width="115" />
                                                                  </td>
                                                              </tr>
                                                          </tbody>
                                                      </table>
                                                  </td>
                                              </tr>

                                              <tr>
                                                  <td align="center" style="font-size: 0px; padding: 10px 0 5px; word-break: break-word;">
                                                      <div style="font-family: Arial, Open-sans, Helvetica, sans-serif; font-size: 16px; line-height: 20px; text-align: center; color: #414a56;">
                                                          <!-- we are not using <mj-text> here, because if we do, we can't use semantic html -->

                                                          <h2 class="columns-title" style="color: #4a4a4a; font-size: 16px; font-weight: 700; line-height: 18px; text-transform: uppercase;">
                                                              <a href="{$item.link}" class="link-hack" style="text-transform: uppercase; text-decoration: none;">{$item.name}</a>
                                                          </h2>

                                                          <p style="color: #9b9b9b; font-size: 16px; font-weight: 400; line-height: 18px; word-break: break-all; word-wrap: break-all; max-width: 145px; margin-left: auto; margin-right: auto;">
                                                              {($item.description)|truncate:120|strip_tags}
                                                          </p>

                                                          <p class="columns-price" style="font-size: 16px; line-height: 18px;">
                                                              {$item.price}
                                                          </p>
                                                      </div>
                                                  </td>
                                              </tr>
                                          </table>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>

                      <!--[if mso | IE]>
                    </td>
                  <![endif]-->

                      <!-- PRODUCT ENDING -->

                      {* Begining of the closing of the row *}
  {if $smarty.foreach.products.index is odd || $smarty.foreach.products.last}
                      {* Close row after two products OR if it's the last item *}

                      <!--[if mso | IE]>
                    </tr>
                  </table>
                <![endif]-->

                </td>
              </tr>
          </tbody>
      </table>
  </div>

  <!--[if mso | IE]>
            </td>
          </tr>
        </table>

      </td>
    </tr>
  </table>
  <![endif]-->
  <!-- ROW OF PRODUCTS ENDING -->
  {/if}
  {* Ending of the closing of the row *}
{/foreach}

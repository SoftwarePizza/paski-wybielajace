# pscartabandonmentpro
This module sends email to customers each time they add products to their shopping cart but do not purchase. It reminds and encourages them to complete the order. It’s beneficial and easy to use!

-   Automatically send up to 5 personalized emails to remind your customers about the contents of their cart. This helps turn abandoned carts into sales.
-   Easily create email templates tailored to match your online store’s theme.
-   Use a free external service to make the sendings automatic
-   Target different customer profiles (active, inactive or without order) to adapt your email

Also, **you can now propose discounts directly via the email** in order to remind your clients to finalize their purchases.  
  
Abandoned Cart reminder Pro allows to easily add **discounts on a product price** or **free shipping cost** directly on the email depending on each clients cart amount.

# Change templates
Change cart view:
`/pscartabandonmentpro/views/templates/admin/ajax/cart.tpl`
Change Live Edit view:
`/pscartabandonmentpro/views/templates/admin/email/`
Change sent emails:
`/pscartabandonmentpro/mails/`

No new templates can be created easily.  It is easier to override the existing templates.

If you have to create or modify a template, you'll want to start with the source files in the `./_dev/` folder combined with the PrestaShop Emails SDK. Please, consult the [dedicated section](#PrestaShop-Emails-SDK).

# Test the reminders
Go into : `/pscartabandonmentpro/controllers/front/FrontCAPCronJob.php`
Set **$debug** to `true`

It prevents sending emails in case the module is in production. It will then be possible to debug the module in front safely.

# Statistics
The statistics do not take into account the discounts when buying. It takes the most expensive price for a given product.

# PrestaShop Emails SDK
The PrestaShop Emails SDK is a toolkit to create custom emails for PrestaShop 1.5, 1.6 and 1.7.

It allows you to use the MJML syntax to create emails and have a better compatibility between email clients.

First you'll need to install the [PrestaShop Email SDK available on github](https://github.com/PrestaShop/email-templates-sdk) in it's own folder.  
Then, you can use every folder contained in `./_dev/themes/` as the source files for the email sdk.

The doc for the sdk should be enough, but the main steps are: 
- Install the dependencies: `npm install`
- Download required languages: `gulp langs:dl`
- Development: `gulp watch`  
This will detect changes on your files and output a compiled version in `./dist/en/`
- Build: `gulp build`  
This will create a zip file in ./dist/ with the name you set in the `./src/config/settings.json` 

When building your theme, you'll end up with a `foo.tpl` file. It's the one you'll use in the admin, but also in the front-office (renamed as `foo.html`). However, you'll need to make few changes to those files: 
- Add specific classes to enable the live edit in the BO
- Adjust variable declaration if needed

The PrestaShop Emails SDK was created to work on a single theme. To work on multiple themes at once, you can use _[PR #15](https://github.com/PrestaShop/email-templates-sdk/pull/15)_. This PR allow for multi-theme, Gulp 4 and MJML 4.

:warning:	**The actual source files are not fully representative of the `.tpl` and `.html` files because of those modifications.**


# Known issues
- Empty CTA shows up
  - Outlook 2007
  - Outlook 2010
  - Outlook 2013
  - Outlook 2016
  - Outlook 2019
  - Win 10 mail
- Empty Social network shows up
  - Outlook 2007
  - Outlook 2010
  - Outlook 2013
  - Outlook 2015
  - Outlook 2019
  - Win 10 mail
- Border on reinsurance images
  - Win 10 mail

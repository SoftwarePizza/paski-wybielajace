{*
* 2012-2021 Patryk Marek PrestaDev.pl
*
* Patryk Marek PrestaDev.pl - PD Google Dynamic Remarketing Pro 1.7.x Module © All rights reserved.
*
* DISCLAIMER
*
* Do not edit, modify or copy this file.
* If you wish to customize it, contact us at info@prestadev.pl.
*
* @author    Patryk Marek <info@prestadev.pl>
* @copyright 2012-2021 Patryk Marek @ PrestaDev.pl
* @license   Do not edit, modify or copy this file, if you wish to customize it, contact us at info@prestadev.pl.
* @link      http://prestadev.pl
* @package   PD Google Dynamic Remarketing Pro 1.7.x Module
* @version   1.0.2
* @date      01-05-2021
*}

<!-- PD Google Dynamic Remarketing - new with events - EVENT > purchase -->
<script type="text/javascript" data-keepinline="true">
    console.log('Fired up event GDR: purchase');
    gtag('event', 'purchase', {
        value: {$content_value nofilter},
        items: [
            {foreach from=$content_products item=product name=products}
            {
                id: '{$product.content_ids nofilter}',
                google_business_vertical: 'retail'
            },
            {/foreach}
        ]
    });
</script>
<!-- PD Google Dynamic Remarketing - new with events - EVENT > purchase -->


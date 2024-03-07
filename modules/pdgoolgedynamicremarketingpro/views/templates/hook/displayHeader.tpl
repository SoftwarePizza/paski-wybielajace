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
* @version   1.0.1
* @date      01-05-2021
*}

{if isset($pd_google_conversion_id)}
<!-- START > PD Google Dynamic Remarketing 1.7.x Module -->
<script async data-keepinline="true" src="https://www.googletagmanager.com/gtag/js?id={$pd_google_conversion_id nofilter}"></script>

{literal}
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', '{/literal}{$pd_google_conversion_id nofilter}{literal}');
 	gtag('set', {currency: '{/literal}{$pd_google_currency nofilter}{literal}'});
	gtag('set', {country: '{/literal}{$pd_google_country nofilter}{literal}'});
</script>
{/literal}

<!-- END > PD Google Dynamic Remarketing 1.7.x Module -->
{/if}

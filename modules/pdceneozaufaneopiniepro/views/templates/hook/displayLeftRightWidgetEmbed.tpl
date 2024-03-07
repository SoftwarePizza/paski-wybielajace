{*
* 2012-2015 Patryk Marek PrestaDev.pl
*
* Patryk Marek PrestaDev.pl - PD Ceneo Zaufane Opinie Pro PrestaShop 1.5.x and 1.6.x Module © All rights reserved.
*
* DISCLAIMER
*
* Do not edit, modify or copy this file.
* If you wish to customize it, contact us at info@prestadev.pl.
*
* @author Patryk Marek PrestaDev.pl <info@prestadev.pl>
* @copyright 2012-2015 Patryk Marek PrestaDev.pl
* @version   Release: 1.4.1
*}

<div id="ceneo_widget_embed" class="block clearfix">
	<span id="__ceneo-reviews-{$ceneo_account_guid|escape:'htmlall':'UTF-8'}"></span>
</div>

<script type="text/javascript" data-keepinline="true">
	{literal}
		(function (d,t){
			var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==document.location.protocol?'https://':'http://')+'ssl.ceneo.pl/shops/rw.js?accountGuid={/literal}{$ceneo_account_guid|escape:'htmlall':'UTF-8'}{literal}';
			s.async=true;
			s.parentNode.insertBefore(g, s);
		}(document,'script'));
	{/literal}
</script>
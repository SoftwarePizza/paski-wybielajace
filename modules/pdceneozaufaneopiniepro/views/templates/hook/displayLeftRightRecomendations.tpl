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

<div class="block">
<div id="ceneo-content-injected-block" style="text-align:center">
	{l s='Recommendations provide' mod='pdceneozaufaneopiniepro'}
	<a href="{$ceneo_widget_url|escape:'htmlall':'UTF-8'}" rel="nofollow" title="{l s='Ceneo' mod='pdceneozaufaneopiniepro'}" target="_blank">{l s='Ceneo' mod='pdceneozaufaneopiniepro'}</a>
</div>

<script type="text/javascript" data-keepinline="true">
	(function(w,d,t,a,c){
		w[a]=w[a]||[];
		w[a].push({
			id:'{$ceneo_widget_id|escape:'htmlall':'UTF-8'}',
			container:'ceneo-content-injected-block'
		});
		if(!w[c]) {
			w[c]=true;
			var s=d.createElement(t),g=d.getElementsByTagName(t)[0];
			s.src="https://ssl.ceneo.pl/shops/rc.js?accountGuid={$ceneo_account_guid|escape:'htmlall':'UTF-8'}&"+parseInt(new Date().getTime()/86400,10);
			s.async=true;
			g.parentNode.insertBefore(s,g);
		}
	}(window,document,'script','CeneoRecommendationWidgetOptions','CeneoRecommendationScriptLoaded'));
</script>
</div>


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
<div id="ceneo-content-injected" style="text-align:center">
	{l s='Recommendations provide' mod='pdceneozaufaneopiniepro'}
	<a href="http://www.ceneo.pl/;7669-0v" rel="nofollow" title="{l s='Ceneo' mod='pdceneozaufaneopiniepro'}" target="_blank">{l s='Ceneo' mod='pdceneozaufaneopiniepro'}</a>
</div>

<script type="text/javascript" data-keepinline="true">
{literal}
(function(w,d,t,a,c){literal}{{/literal}{literal}w[a]=w[a]||[];
	w[a].push({{/literal}
		id:'{/literal}{$pd_ceneo_widget_id}{literal}',
		container:'ceneo-content-injected'}{/literal});
	if(!w[c]){literal}{w[c]=true;
	var s=d.createElement(t),g=d.getElementsByTagName(t)[0];
	s.src="https://ssl.ceneo.pl/shops/rc.js?accountGuid={/literal}{$ceneo_account_guid|escape:'htmlall':'UTF-8'}&{literal}"+parseInt(new Date().getTime()/86400,10);
	s.async=true;
	g.parentNode.insertBefore(s,g);}}{/literal}(window,document,'script','CeneoRecommendationWidgetOptions','CeneoRecommendationScriptLoaded'));
</script>
</div>
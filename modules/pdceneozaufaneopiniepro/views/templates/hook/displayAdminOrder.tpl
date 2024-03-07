{*
* 2012-2020 Patryk Marek PrestaDev.pl
*
* Patryk Marek PrestaDev.pl - PD Ceneo Zaufane Opinie Pro PrestaShop 1.6.x and 1.7.x Module © All rights reserved.
*
* DISCLAIMER
*
* Do not edit, modify or copy this file.
* If you wish to customize it, contact us at info@prestadev.pl.
*
*  @author    Patryk Marek PrestaDev.pl <info@prestadev.pl>
*  @copyright 2012-2020 Patryk Marek - PrestaDev.pl
*  @license   License is for use in domain / or one multistore enviroment (do not modify or reuse this code or part of it)
*  @link      http://prestadev.pl
*  @package   PD Ceneo Zaufane Opinie Pro PrestaShop 1.6.x and 1.7.x Module
*  @version   2.0.0
*  @date      24-12-2020
*}

<div class="row">
	<div class="col-lg-7">
		<div class="panel">
			<div class="panel-heading">
				<i class="icon-user"></i>
				{l s='Ceneo Trusted Reviews' mod='pdceneozaufaneopiniepro'}
			</div>
			<div class="well hidden-print">
				<label>{l s='Customer agreed to send survey:' mod='pdceneozaufaneopiniepro'}</label> 
				{if isset($data->accepted) && $data->accepted}
					{l s='Yes' mod='pdceneozaufaneopiniepro'}
				{else}
					{l s='No' mod='pdceneozaufaneopiniepro'}
				{/if}
				{if isset($data->send) && $data->send}
			        <br /><label>{l s='Datetime order send:' mod='pdceneozaufaneopiniepro'}</label> 
			        {if isset($data->date_upd)}{$data->date_upd}{/if}
				{/if}
				<br /><label>{l s='Days to send questionaire:' mod='pdceneozaufaneopiniepro'}</label> 
				{if isset($data->days_to_send)}{$data->days_to_send} {l s='Days' mod='pdceneozaufaneopiniepro'}{/if}
			</div>
		</div>
	</div>
</div>


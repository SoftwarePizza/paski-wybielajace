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

<div class="card mt-2 d-print-none">
  	<div class="card-header">
	    <div class="row">
	    	<div class="col-md-12">
		        <h3 class="card-header-title">
		        	{l s='Ceneo Trusted Reviews' mod='pdceneozaufaneopiniepro'}
		        </h3>
	    	</div>
	    </div>
	</div>
	<div class="card-body">
		<p class="mb-1">
        	<strong>{l s='Customer agreed to send survey:' mod='pdceneozaufaneopiniepro'}</strong>
            <span>
				{if isset($data->accepted) && $data->accepted}
					{l s='Yes' mod='pdceneozaufaneopiniepro'}
				{else}
					{l s='No' mod='pdceneozaufaneopiniepro'}
				{/if}
			</span>
        </p>
        {if isset($data->send) && $data->send}
			<p class="mb-1">
	        	<strong>{l s='Datetime order send:' mod='pdceneozaufaneopiniepro'}</strong> 
	        	{if isset($data->date_upd)} <span>{$data->date_upd}</span>{/if}
	        </p>
		{/if}
		<p class="mb-1">
        	<strong>{l s='Days to send questionaire:' mod='pdceneozaufaneopiniepro'}</strong>
        	{if isset($data->days_to_send)} <span>{$data->days_to_send} {l s='Days' mod='pdceneozaufaneopiniepro'}</span>{/if}
        </p>
	</div>
</div>
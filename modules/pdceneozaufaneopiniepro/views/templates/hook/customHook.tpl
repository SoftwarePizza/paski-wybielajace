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

{if !$only_checkbox}
	<div id="pdceneozaufaneopiniepro" class="{if $ps_version_17}row{/if} clearfix">
		{if $ps_version_16}
			<fieldset>
				<h3 class="page-subheading">{l s='Acceptance of participation in the Ceneo Trusted Reviews' mod='pdceneozaufaneopiniepro'}</h3>
				<p class="checkbox">
					<input type="checkbox" id="pdceneozaufaneopiniepro_accept" name="pdceneozaufaneopiniepro_accept" autocomplete="off" {if $pd_accepted}checked{/if} />
					<label for="pdceneozaufaneopiniepro_accept">
						{l s='In order to send electronically examining customer satisfaction surveys with their purchases in the store under the "Trusted Reviews" I consent to the transfer of my personal data to Ceneo Sp.z.o.o' mod='pdceneozaufaneopiniepro'}
					</label>
				</p>
			</fieldset>
		{else}
			<h3 class="h3">{l s='Acceptance of participation in the Ceneo Trusted Reviews' mod='pdceneozaufaneopiniepro'}</h3>
			<div class="float-xs-left">
				<span class="custom-checkbox">
				    <input type="checkbox" id="pdceneozaufaneopiniepro_accept" name="pdceneozaufaneopiniepro_accept" autocomplete="off" {if $pd_accepted}checked{/if} />
				    <span><i {if !$pd_accepted}style="display:none"{else}style="display:block"{/if} class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
				</span>
			</div>
			<div class="condition-label">
				<label class="js-terms" for="pdceneozaufaneopiniepro_accept">
				    {l s='In order to send electronically examining customer satisfaction surveys with their purchases in the store under the "Trusted Reviews" I consent to the transfer of my personal data to Ceneo Sp.z.o.o' mod='pdceneozaufaneopiniepro'}
				</label>
			</div>
		{/if}
	</div>
{else}
	{if $ps_version_16}
		<p class="checkbox">
			<input type="checkbox" id="pdceneozaufaneopiniepro_accept" name="pdceneozaufaneopiniepro_accept" autocomplete="off" {if $pd_accepted}checked{/if} />
			<label for="pdceneozaufaneopiniepro_accept">
				{l s='In order to send electronically examining customer satisfaction surveys with their purchases in the store under the "Trusted Reviews" I consent to the transfer of my personal data to Ceneo Sp.z.o.o' mod='pdceneozaufaneopiniepro'}
			</label>
		</p>
	{else}
		<div class="{if $ps_version_17}row{/if} clearfix">
			<div class="float-xs-left">
		        <span class="custom-checkbox">
		        	<input type="checkbox" id="pdceneozaufaneopiniepro_accept" name="pdceneozaufaneopiniepro_accept" autocomplete="off" {if $pd_accepted}checked{/if} />
		        	<span><i {if !$pd_accepted}style="display:none"{else}style="display:block"{/if} class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
		        </span>
		    </div>
		    <div class="condition-label">
		        <label class="js-terms" for="pdceneozaufaneopiniepro_accept">
		            {l s='In order to send electronically examining customer satisfaction surveys with their purchases in the store under the "Trusted Reviews" I consent to the transfer of my personal data to Ceneo Sp.z.o.o' mod='pdceneozaufaneopiniepro'}
		        </label>
		    </div>
		</div>
	{/if}
{/if}
{if $pd_word_mode == 3}
	<div id="pdceneozaufaneopiniepro_ajax_js_response"></div>
{/if}



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

<div class="bootstrap">
	<div class="page-head custom-tab">
		<div class="page-head-tabs" id="head_tabs">
			<ul class="nav">
				<li  id="reminder_tab" class="active">
					<a href="#reminder" data-toggle="tab">{l s='Reminder Dashboard' mod='pscartabandonmentpro'}</a>
				</li>
				{if !$isReady}
				<li id="cron_tab">
					<a href="#cron" data-toggle="tab">{l s='Automatic email sendings' mod='pscartabandonmentpro'}</a>
				</li>
				{/if}
				<li id="stats_tab">
					<a href="#stats" data-toggle="tab">{l s='Statistics' mod='pscartabandonmentpro'}</a>
				</li>
				<li id="help_tab">
					<a href="#help" data-toggle="tab">{l s='Help' mod='pscartabandonmentpro'}</a>
				</li>
			</ul>
		</div>
	</div>	
</div>

<div class="bootstrap" id="cartabandonmentpro_configuration">
	<!-- Module content -->
	<div id="modulecontent" class="clearfix">
		<!-- Tab panes -->
		<div class="tab-content row">
			{if $olderModuleInstalled}
				{include file="./alert_older_module.tpl"}
			{/if}
			{if !$mail_is_creatable}
				{include file="./alert_email_folder_writable.tpl"}
			{/if}
			<div class="tab-pane active" id="reminder">
				<div class="tab_cap_listing">
					{include file="./tabs/reminder_plan/listing.tpl"}
				</div>
				<div class="tab_cap_configuration">
					{include file="./tabs/reminder_plan/reminder_configuration.tpl"}
				</div>
			</div>
			{if !$isReady}
			<div class="tab-pane" id="cron">
				{include file="./tabs/cron_task/cron.tpl"}
			</div>
			{/if}
			<div class="tab-pane" id="stats"></div>
			<div class="tab-pane" id="help">
				{include file="./tabs/help/help.tpl"}
			</div>
		</div>
	</div>

	{if $showRateModule == true }
		<div id="rateThisModule">
			<p>
				<img src="{$img_path}star_img.png" alt="Shining Star">
				{l s='Enjoy this module ?' mod='pscartabandonmentpro'}
				<a target="_blank" href="https://addons.prestashop.com/{$currentLangIsoCode}/ratings.php">
					{l s='Leave a review on Addons Marketplace' mod='pscartabandonmentpro'}
				</a>
			</p>
		</div>
	{/if}
</div>

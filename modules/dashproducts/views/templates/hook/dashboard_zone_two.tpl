{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}

<section id="dashproducts" class="panel widget">
  <header class="panel-heading">
    <i class="icon-bar-chart"></i> {l s='Products and Sales' d='Modules.Dashproducts.Admin'}
    <span class="panel-heading-action">
      {if !empty($dashproducts_config_form)}
        <a class="list-toolbar-btn" href="#" onclick="toggleDashConfig('dashproducts'); return false;" title="{l s='Configure' d='Admin.Actions'}">
          <i class="process-icon-configure"></i>
        </a>
      {/if}
      <a class="list-toolbar-btn" href="#"  onclick="refreshDashboard('dashproducts'); return false;"  title="{l s='Refresh' d='Admin.Actions'}">
        <i class="process-icon-refresh"></i>
      </a>
    </span>
  </header>

  {if !empty($dashproducts_config_form)}
    <section id="dashproducts_config" class="dash_config hide">
      <header><i class="icon-wrench"></i> {l s='Configuration' d='Admin.Global'}</header>
      {$dashproducts_config_form}
    </section>
  {/if}

  <section>
    <nav>
      <ul class="nav nav-pills">
        <li class="active">
          <a href="#dash_recent_orders" data-toggle="tab">
            <i class="icon-fire"></i>
            <span class="hidden-inline-xs">{l s='Recent Orders' d='Modules.Dashproducts.Admin'}</span>
          </a>
        </li>
        <li>
          <a href="#dash_best_sellers" data-toggle="tab">
            <i class="icon-trophy"></i>
            <span class="hidden-inline-xs">{l s='Best Sellers' d='Modules.Dashproducts.Admin'}</span>
          </a>
        </li>
        <li>
          <a href="#dash_most_viewed" data-toggle="tab">
            <i class="icon-eye-open"></i>
            <span class="hidden-inline-xs">{l s='Most Viewed' d='Modules.Dashproducts.Admin'}</span>
          </a>
        </li>
        <li>
          <a href="#dash_top_search" data-toggle="tab">
            <i class="icon-search"></i>
            <span class="hidden-inline-xs">{l s='Top Searches' d='Modules.Dashproducts.Admin'}</span>
          </a>
        </li>
      </ul>
    </nav>

    <div class="tab-content panel">
      <div class="tab-pane active" id="dash_recent_orders">
        <div class="panel-heading">
          {l s='Last %d orders' sprintf=$DASHPRODUCT_NBR_SHOW_LAST_ORDER|intval d='Modules.Dashproducts.Admin'}
        </div>
        <div class="table-responsive">
          <table class="table data_table" id="table_recent_orders">
            <thead></thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
      <div class="tab-pane" id="dash_best_sellers">
        <div class="panel-heading">
          {l s='Top %d products' sprintf=$DASHPRODUCT_NBR_SHOW_BEST_SELLER|intval d='Modules.Dashproducts.Admin'}
          <span>{l s="From" d='Modules.Dashproducts.Admin'} {$date_from|escape:'htmlall':'UTF-8'} {l s="to" d='Modules.Dashproducts.Admin'} {$date_to|escape:'htmlall':'UTF-8'}</span>
        </div>
        <div class="table-responsive">
          <table class="table data_table" id="table_best_sellers">
            <thead></thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
      <div class="tab-pane" id="dash_most_viewed">
        <div class="panel-heading">
          {l s="Most Viewed" d='Modules.Dashproducts.Admin'}
          <span>{l s="From" d='Modules.Dashproducts.Admin'} {$date_from|escape:'htmlall':'UTF-8'} {l s="to" d='Modules.Dashproducts.Admin'} {$date_to|escape:'htmlall':'UTF-8'}</span>
        </div>
        <div class="table-responsive">
          <table class="table data_table" id="table_most_viewed">
            <thead></thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
      <div class="tab-pane" id="dash_top_search">
        <div class="panel-heading">
          {l s='Top %d most search terms' sprintf=$DASHPRODUCT_NBR_SHOW_TOP_SEARCH|intval d='Modules.Dashproducts.Admin'}
          <span>{l s="From" d='Modules.Dashproducts.Admin'} {$date_from|escape:'htmlall':'UTF-8'} {l s="to" d='Modules.Dashproducts.Admin'} {$date_to|escape:'htmlall':'UTF-8'}</span>
        </div>
        <div class="table-responsive">
          <table class="table data_table" id="table_top_10_most_search">
            <thead></thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>

  </section>
</section>

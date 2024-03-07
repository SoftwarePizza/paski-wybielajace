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
 <div class="breadcrumb-background-wrapper"><div class="breadcrumb-background"></div></div>
<nav data-depth="{$breadcrumb.count}" class="breadcrumb container">
  <ol>
    {block name='breadcrumb'}
      {foreach from=$breadcrumb.links item=path name=breadcrumb}
        {block name='breadcrumb_item'}
          <li>
           {if  $smarty.foreach.breadcrumb.first}
              <a href="{$path.url}"><span>Crest</span></a>
            {elseif not $smarty.foreach.breadcrumb.last}
            <a href="{$path.url}"><span>{$path.title}</span></a>
            {else}
              <span>{$path.title}</span>
            {/if}
          </li>
        {/block}
      {/foreach}
    {/block}
  </ol>
  <div class="site-title"><h1>
    {foreach from=$breadcrumb.links item=path name=breadcrumb}    
      {if $page.page_name=="ets_blog_page" && $smarty.foreach.breadcrumb.last }
      <span>Blog</span>
      {elseif str_contains($page.page_name,'module-') && $smarty.foreach.breadcrumb.last }
        <span>{$page.meta.title}</span>
      {elseif  $page.page_name=="product" && $smarty.foreach.breadcrumb.iteration+1 eq $smarty.foreach.breadcrumb.total }
        <span>{$path.title}</span>
        {break}
      {elseif $smarty.foreach.breadcrumb.last}
        <span>{$path.title}</span>
      {/if}
    {/foreach}
  </h1></div>
</nav>

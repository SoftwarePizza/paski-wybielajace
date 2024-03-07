{*
 * Copyright ETS Software Technology Co., Ltd
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 website only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses.
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future.
 *
 * @author ETS Software Technology Co., Ltd
 * @copyright  ETS Software Technology Co., Ltd
 * @license    Valid for 1 website (or project) for each purchase of license
*}
<script type="text/javascript">
    ets_blog_report_url = '{$report_url nofilter}';
    ets_blog_report_warning ="{l s='Chcesz zgłosić ten komentarz?' mod='ets_blog'}";
    ets_blog_error = "{l s='Wystąpił błąd. Spróbuj później' mod='ets_blog'}";
</script>
<div class="ets_blog_layout_{$blog_layout|escape:'html':'UTF-8'} ets-blog-wrapper-detail" itemscope itemType="http://schema.org/newsarticle">
    <div itemprop="publisher" itemtype="http://schema.org/Organization" itemscope="">
        <meta itemprop="name" content="{Configuration::get('PS_SHOP_NAME')|escape:'html':'UTF-8'}" />
        {if Configuration::get('PS_LOGO')}
            <div itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
                <meta itemprop="url" content="{$ets_blog_config.ETS_BLOG_SHOP_URI|escape:'html':'UTF-8'}img/{Configuration::get('PS_LOGO')|escape:'html':'UTF-8'}" />
                <meta itemprop="width" content="200px" />
                <meta itemprop="height" content="100px" />
            </div>
        {/if}
    </div> 
   
     <div class="ets-blog-wrapper-content">
    {if $blog_post}
        <h1 class="page-heading product-listing" itemprop="mainEntityOfPage"><span  class="title_cat" itemprop="headline">{$blog_post.title|escape:'html':'UTF-8'}</span></h1>
        <div class="post-details">
            <div class="blog-extra">
                <div class="ets-blog-latest-toolbar">
                    {if $allow_rating && $everage_rating}                      
                        <div class="blog_rating_wrapper">                            
                            {if $total_review}
                                <span title="{l s='Komentarze' mod='ets_blog'}" class="blog_rating_reviews">
                                     <span class="total_views">{$total_review|intval}</span>
                                     <span>
                                        {if $total_review != 1}
                                            {l s='Komentarze' mod='ets_blog'}
                                        {else}
                                            {l s='Komentarz' mod='ets_blog'}
                                        {/if}
                                    </span>
                                </span>
                            {/if}
                            <div title="{l s='Średnia ocen' mod='ets_blog'}" class="ets_blog_review">
                                {for $i = 1 to $everage_rating}
                                    {if $i <= $everage_rating}
                                        <div class="star star_on"></div>
                                    {else}
                                        <div class="star star_on_{($i-$everage_rating)*10|intval}"></div>
                                    {/if}
                                {/for}
                                {if Ceil($everage_rating)<5}
                                    {for $i = ceil($everage_rating)+1 to 5}
                                        <div class="star"></div>
                                    {/for}
                                {/if}
                                <span class="ets-blog-rating-value">({$everage_rating|escape:'html':'UTF-8'})</span>                                               
                            </div>
                        </div>
                    {/if}  
                    {if $show_author && isset($blog_post.employee) &&  $blog_post.employee}
                        <div class="author-block" itemprop="author" itemscope itemtype="http://schema.org/Person">
                            <span class="post-author-label">{l s='Autor: ' mod='ets_blog'}</span>
                            <a itemprop="url" href="{$blog_post.author_link|escape:'html':'UTF-8'}">
                                <span class="post-author-name" itemprop="name">
                                    {if isset($blog_post.employee.name) && $blog_post.employee.name}
                                        {ucfirst($blog_post.employee.name)|escape:'html':'UTF-8'}
                                    {else}
                                        {ucfirst($blog_post.employee.firstname)|escape:'html':'UTF-8'} {ucfirst($blog_post.employee.lastname)|escape:'html':'UTF-8'}
                                    {/if}
                                </span>
                            </a>
                        </div>
                    {/if}
                    {if $show_date}
                        {if !$date_format}{assign var='date_format' value='d.m.Y'}{/if}
                        <span class="post-date">
                            
                            <span>Dodano: {date($date_format,strtotime($blog_post.date_add))|escape:'html':'UTF-8'}</span>
                            <meta itemprop="datePublished" content="{date('Y-m-d',strtotime($blog_post.date_add))|escape:'html':'UTF-8'}" />
                            <meta itemprop="dateModified" content="{date('Y-m-d',strtotime($blog_post.date_upd))|escape:'html':'UTF-8'}" />
                        </span>
                    {/if}
                    
                    {if isset($blog_post.link_edit) && $blog_post.link_edit}
                        <a class="ets-block-post-edit" href="{$blog_post.link_edit|escape:'html':'UTF-8'}" title="{l s='Edytuj' mod='ets_blog'}"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;{l s='Edit' mod='ets_blog'}</a>
                    {/if}
                </div>        
            </div>                           
            <div class="blog_description">
                {if $blog_post.description}
                    {$blog_post.description nofilter}
                {else}
                    {$blog_post.short_description nofilter}
                {/if}
            </div>
            {if ($show_tags && $blog_post.tags) || ($show_categories && $blog_post.categories)}
            <div class="extra_tag_cat">
                {if $show_tags && $blog_post.tags}
                    <div class="ets-blog-tags">
                        {assign var='ik' value=0}
                        {assign var='totalTag' value=count($blog_post.tags)}
                        <span class="be-label">
                            {if $totalTag > 1}{l s='Tagi' mod='ets_blog'}
                            {else}{l s='Tag' mod='ets_blog'}{/if}: 
                        </span>
                        {foreach from=$blog_post.tags item='tag'}
                            {assign var='ik' value=$ik+1}                                        
                            <a href="{$tag.link|escape:'html':'UTF-8'}">{ucfirst($tag.tag)|escape:'html':'UTF-8'}</a>{if $ik < $totalTag}, {/if}
                        {/foreach}
                    </div>
                {/if}
               
            </div>
            {/if}
            {if isset($ets_blog_config.ETS_BLOG_AUTHOR_INFORMATION)&& $ets_blog_config.ETS_BLOG_AUTHOR_INFORMATION && isset($blog_post.employee.description)&& $blog_post.employee.description}
                <div class="ets-block-author ets-block-author-avata {if $blog_post.employee.avata} ets-block-author-avata{/if}">
                    {if $blog_post.employee.avata}
                        <div class="avata_img">
                            <img class="avata" src="{$link->getMediaLink("`$smarty.const._PS_ETS_BLOG_IMG_`avata/`$blog_post.employee.avata|escape:'htmlall':'UTF-8'`")}"/>
                        </div>
                        
                    {/if}
                    <div class="ets-des-and-author">
                        <div class="ets-author-name">
                            <a href="{$blog_post.author_link|escape:'html':'UTF-8'}">
                                {l s='Autor' mod='ets_blog'}: {$blog_post.employee.name|escape:'html':'UTF-8'}
                            </a>
                        </div>
                        {if isset($blog_post.employee.description)&&$blog_post.employee.description}
                            <div class="ets-author-description">
                                {$blog_post.employee.description nofilter}
                            </div>
                        {/if}
                    </div>
                </div>
            {/if}
                        
        </div>
        {else}
            <p class="warning">{l s='Brak akrtykułów' mod='ets_blog'}</p>
        {/if}
        {if $blog_post.related_posts}
            <div class="ets-blog-related-posts ets_blog_related_posts_type_{if $blog_related_posts_type}{$blog_related_posts_type|escape:'html':'UTF-8'}{else}default{/if}">
                <h4 class="title_blog">{l s='Podobne wpisy' mod='ets_blog'}</h4>
                <div class="ets-blog-related-posts-wrapper">
                    {assign var='post_row' value=3}
                    {assign var='post_count' value=1}
                    <ul class="ets-blog-related-posts-list dt-{$post_row|intval}">
                        {foreach from=$blog_post.related_posts item='rpost'}   
                        {if $post_count < 4}                                         
                            <li class="ets-blog-related-posts-list-li col-xs-12 col-sm-4 col-lg-{12/$post_row|intval} thumbnail-container">
                                {if $rpost.thumb}
                                    <a class="ets_item_img" href="{$rpost.link|escape:'html':'UTF-8'}">
                                        <img src="{$rpost.thumb|escape:'html':'UTF-8'}" alt="{$rpost.title|escape:'html':'UTF-8'}" />
                                    </a>                                                
                                {/if}
                                <a class="ets_title_block" href="{$rpost.link|escape:'html':'UTF-8'}">{$rpost.title|escape:'html':'UTF-8'}</a>
                                <div class="ets-blog-sidear-post-meta">
                                    {if $rpost.categories}
                                        {assign var='ik' value=0}
                                        {assign var='totalCat' value=count($rpost.categories)}                        
                                        <div class="ets-blog-categories">
                                            <span class="be-label">{l s='Kategorie' mod='ets_blog'}: </span>
                                            {foreach from=$rpost.categories item='cat'}
                                                {assign var='ik' value=$ik+1}                                        
                                                <a href="{$cat.link|escape:'html':'UTF-8'}">{ucfirst($cat.title)|escape:'html':'UTF-8'}</a>{if $ik < $totalCat}, {/if}
                                            {/foreach}
                                        </div>
                                    {/if}
                                </div>
                                    <div class="date"><span class="post-date-span">Dodano:{date($date_format,strtotime($rpost.date_add))|escape:'html':'UTF-8'}</span></div>
                                {if $allowComments || $show_views || $allow_like}
                                    <div class="ets-blog-latest-toolbar">                                         
                                        {if $allowComments}
                                            {if $rpost.comments_num > 0 }                                                                
                                                <span class="ets-blog-latest-toolbar-comments">{$rpost.comments_num|intval}
                                                    {if $rpost.comments_num!=1}
                                                        <span>{l s='Komentarze' mod='ets_blog'}</span>
                                                    {else}
                                                        <span>{l s='Komentarz' mod='ets_blog'}</span>
                                                    {/if}
                                                </span> 
                                            {/if}                                                                    
                                        {/if}
                                    </div>
                                {/if} 
                                {if $display_desc}
                                    {if $rpost.short_description}
                                        <div class="blog_description">{$rpost.short_description|strip_tags:'UTF-8'|truncate:120:'...'|escape:'html':'UTF-8'}</div>
                                    {elseif $rpost.description}
                                        <div class="blog_description">{$rpost.description|strip_tags:'UTF-8'|truncate:120:'...'|escape:'html':'UTF-8'}</div>
                                    {/if}
                                {/if}
                                 <a class="read_more" href="{$rpost.link|escape:'html':'UTF-8'}">{if $ets_blog_config.ETS_BLOG_TEXT_READMORE}{$ets_blog_config.ETS_BLOG_TEXT_READMORE|escape:'html':'UTF-8'}{else}{l s='Read More' mod='ets_blog'}{/if}</a>
                            </li>
                            {assign var='post_count' value=$post_count+1}

                        {/if}
                        {/foreach}                        
                    </ul>
                </div>
            </div>
        {/if}
    </div>
</div>
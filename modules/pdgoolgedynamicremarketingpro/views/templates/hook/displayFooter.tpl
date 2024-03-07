{*
* 2012-2021 Patryk Marek PrestaDev.pl
*
* Patryk Marek PrestaDev.pl - PD Google Dynamic Remarketing Pro 1.7.x Module © All rights reserved.
*
* DISCLAIMER
*
* Do not edit, modify or copy this file.
* If you wish to customize it, contact us at info@prestadev.pl.
*
* @author    Patryk Marek <info@prestadev.pl>
* @copyright 2012-2021 Patryk Marek @ PrestaDev.pl
* @license   Do not edit, modify or copy this file, if you wish to customize it, contact us at info@prestadev.pl.
* @link      http://prestadev.pl
* @package   PD Google Dynamic Remarketing Pro 1.7.x Module
* @version   1.0.2
* @date      01-05-2021
*}

{if $tagType != 'none'}
<!-- PD Google Dynamic Remarketing - new with events - EVENTS CODE FOOTER -->
<script type="text/javascript" >

	{if ($tagType === 'product')}
	
		console.log('Fired up event GDR: view_item > Product page');
		gtag('event', 'view_item', {
			value: {$content_value nofilter},
			items: [{
				id: '{$content_ids nofilter}',
				google_business_vertical: 'retail'
			}]
		});

	{else if ($tagType === 'category')}

		console.log('Fired up event GDR: view_item_list > Product list page');
		gtag('event', 'view_item_list', {
			value: '{$total_value nofilter}',
			items: [
				{foreach from=$content_products item=product name=products}
				{
					id: '{$product.content_ids nofilter}',
					google_business_vertical: 'retail',
				},
				{/foreach}
			]
		});
	
	{else if ($tagType === 'prices-drop')}

		console.log('Fired up event GDR: view_item_list > Products prices drop list page');
		gtag('event', 'view_item_list', {
			value: '{$total_value nofilter}',
			items: [
				{foreach from=$content_products item=product name=products}
				{
					id: '{$product.content_ids nofilter}',
					google_business_vertical: 'retail',
				},
				{/foreach}
			]
		});

	{else if ($tagType === 'new-products')}

		console.log('Fired up event GDR: view_item_list > New products list page');
		gtag('event', 'view_item_list', {
			value: '{$total_value nofilter}',
			items: [
				{foreach from=$content_products item=product name=products}
				{
					id: '{$product.content_ids nofilter}',
					google_business_vertical: 'retail',
				},
				{/foreach}
			]
		});

	{else if ($tagType === 'best-sales')}

		console.log('Fired up event GDR: view_item_list > Best sales list page');
		gtag('event', 'view_item_list', {
			value: '{$total_value nofilter}',
			items: [
				{foreach from=$content_products item=product name=products}
				{
					id: '{$product.content_ids nofilter}',
					google_business_vertical: 'retail',
				},
				{/foreach}
			]
		});


	{else if ($tagType === 'search')}

		console.log('Fired up event GDR: view_search_results');
		gtag('event', 'view_search_results', {
			value: '{$total_value nofilter}',
			items: [
				{foreach from=$content_products item=product name=products}
				{
					id: '{$product.content_ids nofilter}',
					google_business_vertical: 'retail',
				},
				{/foreach}
			]
		});

	{/if}

</script>
<!-- PD Google Dynamic Remarketing - new with events - EVENTS CODE FOOTER -->
{/if}
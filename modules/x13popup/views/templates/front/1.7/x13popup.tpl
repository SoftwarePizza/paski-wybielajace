<div id="x13popup-cover"></div>
<div id="x13popup-container">
	<div id="x13popup-container-inner">
		{foreach from=$popups item='popup' key='type' name='popupsLoop'}
			<div
				class="x13popup {$type}"
				id="x13popup_{$popup.cookie_popup_id}"
				style="display: none; {$popup.css}"
				data-delay="{$popup.delay}"
				data-duration="{$popup.duration}"
				data-close="{$popup.close_by}"
				data-cookie_expired="{$popup.cookie_expired}"
				data-cookie_popup_id="{$popup.cookie_popup_id}"
				data-ajax="{$ajaxUrl}"
				data-type="{$type}"
				data-content="{$popup.type}"
			>
				<div class="x13popup-close x13popup-close-btn">&times;</div>
				<div class="content">
				{if $popup.type == 'text'}
					{$popup.content nofilter}
				{elseif $popup.type == 'google-maps'}
					{$popup.content nofilter}
				{elseif $popup.type == 'youtube'}
					<iframe width="100%" height="{$popup.source_height}" src="https://www.youtube.com/embed/{$popup.youtubeId}" frameborder="0" allowfullscreen></iframe>
				{elseif $popup.type == 'facebook'}
					{literal} 
						<script data-keepinline="true">
							window.fbAsyncInit = window.fbAsyncInit || function () {
								FB.init({
											autoLogAppEvents : true,
											xfbml : true,
											version: 'v3.2'
										});
							};
							(function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s); js.id = id;
							js.src = "https://connect.facebook.net/pl_PL/sdk/xfbml.customerchat.js";
							fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));
						</script>
					{/literal}
					<div 
						class="fb-page"
						data-href="{$popup.content}"
						data-tabs="timeline"
						data-small-header="true"
						data-adapt-container-width="true"
						data-width="{$popup.source_width|replace:'px':''}"
						data-height="{$popup.source_height|replace:'px':''}"
						data-hide-cover="false"
						data-show-facepile="true"
						>
						<blockquote cite="{$popup.content}" class="fb-xfbml-parse-ignore">
							<a href="{$popup.content}">{$popup.content}</a>
						</blockquote>
					</div>
				{elseif $popup.type == 'newsletter'}
					{include file=$template_path content=$popup.content}
				{/if}
				</div>
			</div>
		{/foreach}
	</div>
</div>


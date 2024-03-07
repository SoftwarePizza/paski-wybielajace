{if $page.page_name == 'index'}
<div id="heroSection">
   <div class="content">
        <div class="container">
            <div class="content-wrapper">
                <div class="text">
                    <h1 class="title">{l s='Paski wybielające'  d='Modules.Pcherosection.Shop'}</h1>
                    <p class="effect"><strong>{l s='25x'  d='Modules.Pcherosection.Shop'}</strong> 
                    {l s='skuteczniejsze niż pasty wybielające' mod='' d='Modules.Pcherosection.Shop'}</p>
                    <p class="bottom">{l s='Widoczne efekty już po pierwszym zastosowaniu.Bezpieczne dla zębów i szkliwa. Najlepsze paski z USA.'  d='Modules.Pcherosection.Shop'}</p>
                </div>
    
                {if isset($products) && $products}
                    <div class="products heroSection">
                        {foreach from=$products item="product" name=product}
                            {if $product@iteration is odd}
                                <div class="double-wrapper{if $product@iteration gt 1} hide{/if}">
                            {/if}
    
                                {include file="catalog/_partials/miniatures/productHero.tpl" product=$product}
                                
                            {if $product@iteration is even}
                                </div>
                            {/if}
                        {/foreach}
                    </div>
                {else}
                    <ul id="categoryfeatured" class="categoryfeatured tab-pane">
                        <li class="alert alert-info">{l s='Brak produktów w sekcji Hero' mod='featuredcategory'}</li>
                    </ul>
                {/if}
            </div>
            </div>
          

    </div>
   
    <div class="front">
        <div class="img-wrapper"><img src="{$urls.theme_assets}img/hero.png"></div>
        <div class="img-wrapper mobile"><img src="{$urls.theme_assets}img/heroMobile.png"></div>
    </div>
    
</div>
{/if}
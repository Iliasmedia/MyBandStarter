<div class="containerNews">
	{foreach from=$latest item=$r}
	<div class="bigNews">
		<a href="{$siteLink}news/{$r.id}">
		<img src="{$siteLink}assets/images/{$r.image}?{$cacheCheck}" alt="" class="image"/>
		<span class="readMore">Lees meer >></span></a>
		<h2>{$r.title}</h2>
		<p class="description">{$r.shortitle}<br> <span class="date">{$r.date_created}</span></p>
	</div>
	{/foreach}
	
</div>
<div class="call-outs-container">
{foreach from=$article item=$r}
	<div class="call-out">
		<a href="{$siteLink}news/{$r.id}">
		<img src="{$siteLink}assets/images/{$r.image}?{$cacheCheck}" alt="" class="imagesmall"/>
		<span class="readMoresmall">Lees meer >></span></a>
		<h4 class="description">{$r.title}</h4>
		<p class="description">{$r.shortitle}<br><span class="date">{$r.date_created}</span></p>
	</div>
{/foreach}
	
</div>
<div class="call-outs-container">
	<div class="pagination">
	<p>Pagina <b>{$page}</b></p>
		{if $page gt 1}
			<a href="{$siteLink}home/{$page-1}">Terug</a>
		{/if}
		{if $page lt $pagenum-1}
			<a href="{$siteLink}home/{$page+1}">Verder</a>
		{/if}
		
	</div>
</div>




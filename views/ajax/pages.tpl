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
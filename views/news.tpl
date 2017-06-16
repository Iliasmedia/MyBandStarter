<div class="container">

	{foreach from=$newsinfo item=$r}
	<div class="bigNews">
		<img src="{$siteLink}assets/images/{$r.image}?{$cacheCheck}" alt="" class="image"/>
		<h2>{$r.title}</h2>
		<p class="description"><i>{$r.shortitle}</i><br><br> {$r.content} <br><span class="date">{$r.date_created}</span></p>
	</div>
	{/foreach}

</div>


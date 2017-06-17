<div class="container" style="overflow-x:auto;">
	<table class="gridtable">
		<tr>
    <th>Video</th> 
    <th>Titel</th> 
    <th>Weergaven</th>
  </tr>
  {foreach from=$topvideos item=$r}
  <tr>
    <td><iframe width="250" height="150" src="http://www.youtube.com/embed/{$r.link}" frameborder="0" allowfullscreen></iframe></td>
    <td>{$r.title}</td> 
    <td>{$r.views}</td>
  </tr>
  {/foreach}
	</table>
</div>


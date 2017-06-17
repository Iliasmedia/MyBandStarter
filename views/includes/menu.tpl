	<nav>
	<label for="toggle">&#9776;</label>
	 <input type="checkbox" id="toggle"/>
		<ul class="menu">
		  <li><a href="{$siteLink}home" {if $active eq 'home'}class="active" {/if}>Home</a></li>
		  <li><a href="{$siteLink}about" {if $active eq 'about'}class="active" {/if}>Over RiceGum</a></li>
		  <li><a href="{$siteLink}videos" {if $active eq 'topvideos'}class="active" {/if}>Meest bekeken videos</a></li>
		  <li><a href="{$siteLink}contact" {if $active eq 'contact'}class="active" {/if}>Contact</a></li>
		</ul>
	</nav>
	<main class="Site-content">

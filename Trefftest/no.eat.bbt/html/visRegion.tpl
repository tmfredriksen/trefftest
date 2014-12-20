{include file='html/header.tpl'}

<br/>
<h2 >Treff for region {$regionNavn}:</h2>
{foreach key=key from=$treffListe item=treff}

<li><a href="visTreff.php?treffId={$treff->getId()}">{$treff->getTreffnavn()}</a></li>
      
	
{/foreach}
{include file='html/footer.tpl'}
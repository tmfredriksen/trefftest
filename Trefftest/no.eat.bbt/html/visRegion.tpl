{include file='html/header.tpl'}

<br/>
<h2>Treff for region {$regionNavn}:</h2>
{foreach key=key from=$treffListe item=treff}
	<li>{$treff->getTreffnavn()}</li>
{/foreach}
{include file='html/footer.tpl'}
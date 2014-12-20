{include file='html/header.tpl'}

<br/>
<h2>Registrerte treff i Region {$regionNavn}</h2>
{foreach key=key from=$treffListe item=treff}
	{$treff->toRegionString()}
{/foreach}
{include file='html/footer.tpl'}
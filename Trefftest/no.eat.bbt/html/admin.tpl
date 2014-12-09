{include file='html/header.tpl'}

<h1>Treff til godkjenning</h1>

<div class="col">
{if ($treffliste) }
<table>
	{foreach key=key from=$treffliste item=treff}
	<tr>
		<th>
			{$treff->getTreffNavn()}
		</th>
		<th>
			<a href="visTreffAdmin.php?treffId={$treff->getId()}"><button class="btn btn-danger">Slett treff</button></a>
			<a href="visTreffAdmin.php?treffId={$treff->getId()}"><button class="btn btn-info">Vis info...</button></a>
			<a href="admin.php?godkjennTreffId={$treff->getId()}"><button class="btn btn-success">Godkjenn og publiser</button></a>
		</th>
	</tr>
	{/foreach}
</table>
{else}
	<p>Ingen elementer.</p>
{/if}
</div>

{include file='html/footer.tpl'}
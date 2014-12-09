{include file='html/header.tpl'}

<table>
	<tr>
		<th>Navn: 
		</th>
		<th>
		{$treff->getTreffNavn()}
		</th>
	</tr>
	<tr>
		<th>Sted: 
		</th>
		<th>
		{$treff->getSted()}
		</th>
	</tr>
		<tr>
		<th>Koordinater: 
		</th>
		<th>
		{$treff->getKoordinater()}
		</th>
	</tr>
	<tr>
		<th>Fra: 
		</th>
		<th>
		{$treff->getStartDato()}
		</th>
	</tr>
	<tr>
		<th>Til: 
		</th>
		<th>
		{$treff->getSluttDato()}
		</th>
	</tr>
		<tr>
		<th>P�meldingsfrist: 
		</th>
		<th>
		{$treff->getPaameldingsfrist()}
		</th>
	</tr>
	<tr>
		<th>Antall plasser: 
		</th>
		<th>
		{$treff->getPlasser()}
		</th>
	</tr>
	<tr>
		<th>Treffavgift: 
		</th>
		<th>
		{$treff->getTreffavgift()}
		</th>
	</tr>
	<tr>
		<th>Kontonr: 
		</th>
		<th>
		{$treff->getKontonr()}
		</th>
	</tr>
	<tr>
		<th>Beskrivelse: 
		</th>
		<th>
		{$treff->getBeskrivelse()}
		</th>
	</tr>
	<tr>
		<th>Antall plasser med str�m: 
		</th>
		<th>
		{$treff->getStromplasser()}
		</th>
	</tr>
	<tr>
		<th>Str�mpris pr d�gn: 
		</th>
		<th>
		{$treff->getStrompris()}
		</th>
	</tr>
</table>


<a href="admin.php?godkjennTreffId={$treff->getId()}"><button class="btn btn-success">Godkjenn og publiser</button></a>

{include file='html/footer.tpl'}
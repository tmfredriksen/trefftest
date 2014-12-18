{include file='html/header.tpl'}
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<br/><br/>
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
		<th>Påmeldingsfrist: 
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
		<th>Antall plasser med strøm: 
		</th>
		<th>
		{$treff->getStromplasser()}
		</th>
	</tr>
	<tr>
		<th>Strømpris pr døgn: 
		</th>
		<th>
		{$treff->getStrompris()}
		</th>
	</tr>
</table>


<a href="[lenke til påmelding]"><button class="btn btn-info">Til påmelding</button></a>

{include file='html/footer.tpl'}
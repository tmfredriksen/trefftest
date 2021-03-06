﻿{include file='html/header.tpl'}
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<br />
	<div>
	<a href="http://www.bobilforeningen.no">
  <img src="Content/Bobilforening_logo.png" class="img-rounded"
			alt="" style="padding-left:10%">
</a></div>
	
	<br/>	
	<div style="margin-top:-14%; padding-left: 30%;">
	<h3>Hei og Velkommen til Bobiltreff.no</h3>
	
	{if (isset($smarty.session.loggedIn))}
		{if ($smarty.session.loggedIn)}
			{if ($smarty.session.isAdmin)}
				<!-- Logget inn som admin -->
				<p>Du er logget inn som admin. Her kan man godkjenne treff opprettet
				av treffansvarlige, opprette nye treffansvarlige eller endre eksisterende
				treffansvarlige.</p>
			{else}
				<!-- Logget inn som treffansvarlig -->
				<p>Du er logget inn som treffansvarlig. Trykk på Opprett Treff for å opprette
				et nytt treff.<br/>Er det spørsmål eller problemer, kontakter du <a href="mailto:stein.gamst@gmail.com">stein.gamst@gmail.com</a></p>
			{/if}
		{/if}
	{else}
		<!-- Vanlig bruker -->
		<h3>Hvordan bruke siden?</h3>
		<p>Trykk på din Region og alle treff som er registrert vil da vises.
		<br/>Trykk deretter på det treff som dere ønsker å melde dere på og
		<br/>fyll inn de opplysninger som det spørres etter.</p>

	{/if}
</div>

{include file='html/footer.tpl'}

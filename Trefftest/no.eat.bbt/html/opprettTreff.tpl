{include file='html/header.tpl'}
{include file='html/navbar.tpl'}

<br /><br />
<div class='container'>
<div class='jumbotron'>
<div class="text-center">

<form method="post" action="opprettTreff.php" name="registerform">   
				
	<label for="treffnavn">Treffnavn</label> <br>
	<input id="treffnavn" type="text"  name="treffnavn" required /><br>

	<label for="startdato">Startdato</label><br>
	<input id="startdato" type="date" name="startdato" required /><br>
	
	<label for="sluttdato">Sluttdato</label><br>
	<input id="sluttdato" type="date" name="sluttdato" required /><br>

	<label for="sted">Sted</label><br>
	<input id="sted" type="text" name="sted" required /><br>
	
	<label for="koordinater">Koordinater</label><br>
	<input id="koordinater" type="text" name="koordinater" required /><br>
	
	<label for="plasser">Plasser</label><br>
	<input id="plasser" type="number" name="plasser" required /><br>
	
	<label for="treffavgift">Treffavgift</label><br>
	<input id="treffavgift" type="number" name="treffavgift" />  <br>
	
	<label for="kontonr">Kontonr</label><br>
	<input id="kontonr" type="number" name="kontonr" required /><br>
	
	<label for="beskrivelse">Beskrivelse</label><br>
	<input id="beskrivelse" type="text" name="beskrivelse" />  <br>
	
	<label for="paameldingsfrist">Paameldingsfrist</label><br>
	<input id="paameldingsfrist" type="text" name="paameldingsfrist" required /><br>
	
	<label for="stromplasser">Stromplasser</label><br>
	<input id="stromplasser" type="text" name="stromplasser" />  <br>
	
	<label for="strompris">"Strompris"</label><br>
	<input id="strompris" type="number" name="strompris" />  <br>


	<label></label><br>

	<input class="btn btn-success" type="submit" name="btn_opprettTreff" value="Opprett treff" />
</form>
</div>
</div>
</div>



{include file='html/footer.tpl'}



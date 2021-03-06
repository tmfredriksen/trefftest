{include file='html/header.tpl'}
{include file='html/navbar.tpl'}

<br /><br />
<div class='container'>
<div class='jumbotron'>
<div class="text-center">

<form method="post" action="opprettTreff.php" name="registerform">   
				
	<label for="treffnavn">Treffnavn</label> <br>
	<input id="treffnavn" type="text"  name="treffnavn" required /><br>

	<label for="startdato">Startdato(yyyymmdd)</label><br>
	<input id="startdato" type="date" name="startdato" required /><br>
	
	<label for="sluttdato">Sluttdato(yyyymmdd)</label><br>
	<input id="sluttdato" type="date" name="sluttdato" required /><br>

	<label for="sted">Sted</label><br>
	<input id="sted" type="text" name="sted" required /><br>
	
	<label for="regionId">Region</label><br>
	<select name="region_id" required>
    	<option value='' selected>-- Velg region --</option>
    	{foreach key=key from=$regionListe item=region}
    		<option value='{$region->getId()}'>Region {$region->getRegionnavn()}</option>
		{/foreach}
	</select>
	<label></label><br>
	
	<label for="koordinater">Koordinater</label><br>
	<input id="koordinater" type="text" name="koordinater" /><br/>
	
	<label for="plasser">Plasser</label><br>
	<input id="plasser" type="number" name="plasser" required /><br/>
	
	<label for="treffavgift">Treffavgift</label><br>
	<input id="treffavgift" type="number" name="treffavgift" /><br/>
	
	<label for="kontonr">Kontonr</label><br>
	<input id="kontonr" type="number" name="kontonr" required /><br>
	
	<label for="beskrivelse">Beskrivelse</label><br>
	<input id="beskrivelse" type="text" name="beskrivelse" /><br/>
	
	<label for="paameldingsfrist">Påmeldingsfrist(yyyymmdd)</label><br>
	<input id="paameldingsfrist" type="date" name="paameldingsfrist" required /><br>
	
	<label for="stromplasser">Strømplasser</label><br>
	<input id="stromplasser" type="text" name="stromplasser" /><br/>
	
	<label for="strompris">"Strømpris"</label><br>
	<input id="strompris" type="number" name="strompris" /><br/>


	<label></label><br>
	<!-- Script for � generere nye aktivitetsfelt (innmari bra)-->
	<p> 
  		<input type="button" value="Legg til aktivitet" onClick="addRow()" />
	</p>

<div id="aktiviteter"></div>

<!-- d�sken kor r�tt-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js">
// Kode fra http://www.infotuts.com/dynamically-add-input-fields-to-form-jquery/,
// http://blog.calendarscripts.info/dynamically-adding-input-form-fields-with-jquery/ og
// http://techstream.org/Web-Development/PHP/Dynamic-Form-Processing-with-PHP
// Bruker Google sin jQuery
</script>

<script type="text/javascript">

var rowNum = 0;

// Fikser css senere...
function addRow() {
	rowNum++;
	var row = '<p id="rowNum' + rowNum + '"><label>Navn p&aring; aktivitet</label><input type="text" name="BX_NAME[]"><label>Beskrivelse</label>'
	+ '<input type="text" class="small" name="BX_desc[]"><label>Pris</label><input type="number" class="small" name="BX_price[]">'
	+ '<input class="btn btn-danger" type="button" value="Fjern denne aktiviteten" onClick="deleteRow(' + rowNum + ');"/></p>';
	$('#aktiviteter').append(row);
	
}

function deleteRow(rowId) {
	$('#rowNum' + rowId).remove();
}
</script>

<input class="btn btn-success" type="submit" name="btn_opprettTreff" value="Opprett treff" />
</form>
</div>
</div>
</div>

{include file='html/footer.tpl'}



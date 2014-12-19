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
	<input id="koordinater" type="text" name="koordinater" /><br>
	
	<label for="plasser">Plasser</label><br>
	<input id="plasser" type="number" name="plasser" required /><br>
	
	<label for="treffavgift">Treffavgift</label><br>
	<input id="treffavgift" type="number" name="treffavgift" />  <br>
	
	<label for="kontonr">Kontonr</label><br>
	<input id="kontonr" type="number" name="kontonr" required /><br>
	
	<label for="beskrivelse">Beskrivelse</label><br>
	<input id="beskrivelse" type="text" name="beskrivelse" />  <br>
	
	<label for="paameldingsfrist">P√•meldingsfrist(yyyymmdd)</label><br>
	<input id="paameldingsfrist" type="date" name="paameldingsfrist" required /><br>
	
	<label for="stromplasser">Str√∏mplasser</label><br>
	<input id="stromplasser" type="text" name="stromplasser" />  <br>
	
	<label for="strompris">"Str√∏mpris"</label><br>
	<input id="strompris" type="number" name="strompris" />  <br>


	<label></label><br>
	<!-- Script for Â generere nye aktivitetsfelt (WIP)
	<p> 
  <input type="button" value="Legg til aktivitet" onClick="addRow('dataTable')" /> 
  <input type="button" value="Fjern denne aktiviteten" onClick="deleteRow('dataTable')" /> 
  <p>(All acions apply only to entries with check marked check boxes only.)</p>
</p>
				
<table id="dataTable" class="form" border="1">
 <tbody>
  <tr>
	<p>
	<td >
		<input type="checkbox" name="chk[]" checked="checked" />
	</td>
	<td>
	<label>Name</label>
	<input type="text" name="BX_NAME[]">
	</td>
	<td>
	<label for="BX_age">Age</label>
	<input type="text" class="small"  name="BX_age[]">
	</td>
	<td>
	<label for="BX_gender">Gender</label>
	<select id="BX_gender" name="BX_gender">
		<option>....</option>
		<option>Male</option>
		<option>Female</option>
	</select>
	</td>
	<td>
	<label for="BX_birth">Berth Pre</label>
	<select id="BX_birth" name="BX_birth">
		<option>....</option>
		<option>Window</option>
		<option>No Choice</option>
	</select>
	</td>
	</p>
  </tr>
 </tbody>
</table>

[husk Â legge til javascript]

function addRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	if(rowCount < 5){                            // limit the user from creating fields more than your limits
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var i=0; i<colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[0].cells[i].innerHTML;
		}
	}else{
		 alert("Maximum Passenger per ticket is 5");
			   
	}
}

function deleteRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	for(var i=0; i<rowCount; i++) {
		var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[0];
		if(null != chkbox && true == chkbox.checked) {
			if(rowCount <= 1) {               // limit the user from removing all the fields
				alert("Cannot Remove all the Passenger.");
				break;
			}
			table.deleteRow(i);
			rowCount--;
			i--;
		}
	}
} -->

	<input class="btn btn-success" type="submit" name="btn_opprettTreff" value="Opprett treff" />
</form>
</div>
</div>
</div>



{include file='html/footer.tpl'}



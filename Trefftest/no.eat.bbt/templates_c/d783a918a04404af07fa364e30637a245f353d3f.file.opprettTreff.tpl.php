<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-20 12:03:45
         compiled from "html\opprettTreff.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4216549336cabeece6-80114134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd783a918a04404af07fa364e30637a245f353d3f' => 
    array (
      0 => 'html\\opprettTreff.tpl',
      1 => 1419016589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4216549336cabeece6-80114134',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_549336cac0e0e2_08549972',
  'variables' => 
  array (
    'regionListe' => 0,
    'region' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549336cac0e0e2_08549972')) {function content_549336cac0e0e2_08549972($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('html/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('html/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
    	<?php  $_smarty_tpl->tpl_vars['region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['region']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['regionListe']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['region']->key => $_smarty_tpl->tpl_vars['region']->value) {
$_smarty_tpl->tpl_vars['region']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['region']->key;
?>
    		<option value='<?php echo $_smarty_tpl->tpl_vars['region']->value->getId();?>
'>Region <?php echo $_smarty_tpl->tpl_vars['region']->value->getRegionnavn();?>
</option>
		<?php } ?>
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



<?php echo $_smarty_tpl->getSubTemplate ('html/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php }} ?>

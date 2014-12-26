<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-20 21:18:37
         compiled from "html\opprettTreff.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2118654932f842c1067-31975790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e0b5d88080c8bf1535b174d8f8ad0aac5c3fe8c' => 
    array (
      0 => 'html\\opprettTreff.tpl',
      1 => 1419106682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2118654932f842c1067-31975790',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54932f8431ec72_35992903',
  'variables' => 
  array (
    'regionListe' => 0,
    'region' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54932f8431ec72_35992903')) {function content_54932f8431ec72_35992903($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('html/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
	<input id="koordinater" type="text" name="koordinater" /><br/>
	
	<label for="plasser">Plasser</label><br>
	<input id="plasser" type="number" name="plasser" required /><br/>
	
	<label for="treffavgift">Treffavgift</label><br>
	<input id="treffavgift" type="number" name="treffavgift" /><br/>
	
	<label for="kontonr">Kontonr</label><br>
	<input id="kontonr" type="number" name="kontonr" required /><br>
	
	<label for="beskrivelse">Beskrivelse</label><br>
	<input id="beskrivelse" type="text" name="beskrivelse" /><br/>
	
	<label for="paameldingsfrist">P√•meldingsfrist(yyyymmdd)</label><br>
	<input id="paameldingsfrist" type="date" name="paameldingsfrist" required /><br>
	
	<label for="stromplasser">Str√∏mplasser</label><br>
	<input id="stromplasser" type="text" name="stromplasser" /><br/>
	
	<label for="strompris">"Str√∏mpris"</label><br>
	<input id="strompris" type="number" name="strompris" /><br/>


	<label></label><br>
	<!-- Script for Â generere nye aktivitetsfelt (innmari bra)-->
	<p> 
  		<input type="button" value="Legg til aktivitet" onClick="addRow()" />
	</p>

<div id="aktiviteter"></div>

<!-- dÊsken kor rÂtt-->
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js">
// Kode fra http://www.infotuts.com/dynamically-add-input-fields-to-form-jquery/,
// http://blog.calendarscripts.info/dynamically-adding-input-form-fields-with-jquery/ og
// http://techstream.org/Web-Development/PHP/Dynamic-Form-Processing-with-PHP
// Bruker Google sin jQuery
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

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
<?php echo '</script'; ?>
>

<input class="btn btn-success" type="submit" name="btn_opprettTreff" value="Opprett treff" />
</form>
</div>
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('html/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php }} ?>

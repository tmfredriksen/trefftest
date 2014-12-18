<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-18 19:26:16
         compiled from "html/opprettTreff.tpl" */ ?>
<?php /*%%SmartyHeaderCode:937781789549329fa79fb21-27447836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94abbe08928d4fc269a4a3481a73ef15cd50ce71' => 
    array (
      0 => 'html/opprettTreff.tpl',
      1 => 1418930768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '937781789549329fa79fb21-27447836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_549329fa7d62a3_67655216',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549329fa7d62a3_67655216')) {function content_549329fa7d62a3_67655216($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('html/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('html/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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



<?php echo $_smarty_tpl->getSubTemplate ('html/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php }} ?>

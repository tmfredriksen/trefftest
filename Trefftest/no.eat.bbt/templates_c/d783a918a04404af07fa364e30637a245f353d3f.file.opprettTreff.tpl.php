<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-18 21:19:22
         compiled from "html\opprettTreff.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4216549336cabeece6-80114134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd783a918a04404af07fa364e30637a245f353d3f' => 
    array (
      0 => 'html\\opprettTreff.tpl',
      1 => 1418933830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4216549336cabeece6-80114134',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_549336cac0e0e2_08549972',
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
	<input id="paameldingsfrist" type="date" name="paameldingsfrist" required /><br>
	
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

<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-20 18:20:08
         compiled from "html\paamelding.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193995495afc85112f0-84938178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6fd7596b8addec446be825ace7f5327f29dc8fd' => 
    array (
      0 => 'html\\paamelding.tpl',
      1 => 1419095787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193995495afc85112f0-84938178',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5495afc856b087_01238249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5495afc856b087_01238249')) {function content_5495afc856b087_01238249($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('html/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('html/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<br /><br />
<div class='container'>
<div class='jumbotron'>
<div class="text-center">

<form method="post" action="paamelding.php" name="registerform">   
				
	<label for="medlemsnr">Medlemsnummer</label> <br>
	<input id="medlemsnr" type="number"  name="medlemsnr" required /><br>

	<label for="navn">Navn</label><br>
	<input id="navn" type="text" name="navn" required /><br>
	
	<label for="epost">Epost</label><br>
	<input id="epost" type="text" name="epost" required /><br>

	<label for="telefon">Telefon</label><br>
	<input id="telefon" type="number" name="telefon" required /><br>
	
	<label for="ledsager">Ledsager navn</label><br>
	<input id="ledsager" type="text" name="ledsager" required  /><br>
	
	<label for="hjemsted">Hjemsted</label><br>
	<input id="hjemsted" type="text" name="hjemsted" required /><br>
	
	<label for="antpersoner">Antall personer</label><br>
	<input id="antpersoner" type="number" name="antpersoner" />  <br>
	
	<label for="antdagstrom">Antall dager strøm</label><br>
	<input id="antdagstrom" type="number" name="antdagstrom" required /><br>

	<label></label><br>

	<input class="btn btn-success" type="submit" name="btn_paamelding" value="Registrer påmelding" />
</form>
</div>
</div>
</div>



<?php echo $_smarty_tpl->getSubTemplate ('html/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php }} ?>

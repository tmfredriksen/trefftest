<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-18 21:21:08
         compiled from "html/paamelding.tpl" */ ?>
<?php /*%%SmartyHeaderCode:374704249549342ffc59465-02224879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c21f5cf1cac206ea08499da24ae88189bb32751' => 
    array (
      0 => 'html/paamelding.tpl',
      1 => 1418937639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '374704249549342ffc59465-02224879',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_549342ffc83029_76547609',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549342ffc83029_76547609')) {function content_549342ffc83029_76547609($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('html/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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

<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-18 20:22:23
         compiled from "html/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18149349165493296f8e1146-46922744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8bb809453c52f958fd6f778ed4bfec4aec60a48' => 
    array (
      0 => 'html/register.tpl',
      1 => 1418927598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18149349165493296f8e1146-46922744',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5493296f913746_15812492',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5493296f913746_15812492')) {function content_5493296f913746_15812492($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('html/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<html>
<br /><br />
<div class='container'>
<div class='jumbotron'>
<div class="text-center">

<form method="post" action="register.php" name="registerform">   
	<label for="brukernavn">Navn</label> <br>
	<input id="brukernavn" type="text"  name="brukernavn" required /><br>

	<label for="bruker_epost">Epost</label><br>
	<input id="bruker_epost" type="email" name="bruker_epost" required /><br>
	
	<label for="bruker_tlf">Telefon</label><br>
	<input id="bruker_tlf" type="number" name="bruker_tlf" required /><br>
	
	<label for="bruker_adresse">Adresse</label><br>
	<input id="bruker_adresse" type="text" name="bruker_adresse" required /><br>
	
	<label for="bruker_postnr">Postnr</label><br>
	<input id="bruker_postnr" type="number" name="bruker_postnr" required /><br>
	
	<label for="bruker_sted">Sted</label><br>
	<input id="bruker_sted" type="text" name="bruker_sted" required /><br>
	
	<label for="user_password_new">Passord</label><br>
	<input id="user_password_new" type="password" name="user_password_new" required autocomplete="off" />  <br>

	<label for="user_password_repeat">Gjenta Passord</label><br>
	<input id="user_password_repeat" type="password" name="user_password_repeat" required autocomplete="off" />  <br>      



	<label></label><br>

	<input class="btn btn-success" type="submit" name="btn_register" value="Opprett Bruker" />
</form>
</div>
</div>
</div>
 </html>
<?php echo $_smarty_tpl->getSubTemplate ('html/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>

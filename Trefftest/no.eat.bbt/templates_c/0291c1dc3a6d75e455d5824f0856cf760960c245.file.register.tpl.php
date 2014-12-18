<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-18 17:30:42
         compiled from "html\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1592054900aad6cb054-14388976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0291c1dc3a6d75e455d5824f0856cf760960c245' => 
    array (
      0 => 'html\\register.tpl',
      1 => 1418920237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1592054900aad6cb054-14388976',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54900aad709869_60993568',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54900aad709869_60993568')) {function content_54900aad709869_60993568($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('html/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate ('html/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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

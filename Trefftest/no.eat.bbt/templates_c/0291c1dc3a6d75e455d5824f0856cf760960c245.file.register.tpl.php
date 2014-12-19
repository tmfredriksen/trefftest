<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-19 13:57:21
         compiled from "html\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1592054900aad6cb054-14388976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0291c1dc3a6d75e455d5824f0856cf760960c245' => 
    array (
      0 => 'html\\register.tpl',
      1 => 1418993837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1592054900aad6cb054-14388976',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54900aad709869_60993568',
  'variables' => 
  array (
    'melding' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54900aad709869_60993568')) {function content_54900aad709869_60993568($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('html/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<html>
<?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
function checkPasswordMatch() {
    var password = $("#user_password_new").val();
    var confirmPassword = $("#user_password_repeat").val();

    if (password != confirmPassword || confirmPassword != password)
        $("#divCheckPasswordMatch").html("Passord stemmer ikke overens med hverandre!");
    else
        $("#divCheckPasswordMatch").html("Passord stemmer!");
}
<?php echo '</script'; ?>
>
<br />
<br />

<div class='container'>
	<div class='jumbotron'>
		<div class="text-center">

			<form method="post" action="register.php" name="registerform">
				<label for="brukernavn">Navn</label> <br> <input
					id="brukernavn" type="text" name="brukernavn" required /><br>

				<label for="bruker_epost">Epost</label><br> <input
					id="bruker_epost" type="email" name="bruker_epost" required /><br>

				<label for="bruker_tlf">Telefon</label><br> <input
					id="bruker_tlf" type="number" name="bruker_tlf" required /><br>

				<label for="bruker_adresse">Adresse</label><br> <input
					id="bruker_adresse" type="text" name="bruker_adresse" required /><br>

				<label for="bruker_postnr">Postnr</label><br> <input
					id="bruker_postnr" type="number" name="bruker_postnr" required /><br>

				<label for="bruker_sted">Sted</label><br> <input
					id="bruker_sted" type="text" name="bruker_sted" required /><br>

				<label for="user_password_new">Passord</label><br> <input
					id="user_password_new" onkeyup="checkPasswordMatch();" type="password" name="user_password_new"
					required autocomplete="off" /> <br> 
				<label for="user_password_repeat">Gjenta Passord</label><br> <input
					id="user_password_repeat" type="password" onkeyup="checkPasswordMatch();"
					name="user_password_repeat" required autocomplete="off" /> <br>
				<span class="registrationFormAlert" id="divCheckPasswordMatch"></span>
				<br />
				<input
					class="btn btn-success" type="submit" name="btn_register"
					value="Opprett Bruker" />
					
			
			</form>
			<?php if ((isset($_smarty_tpl->tpl_vars['melding']->value))) {?>
			<h3><?php echo $_smarty_tpl->tpl_vars['melding']->value;?>
</h3>
			<?php }?>
		</div>
	</div>
</div>

</html>
<?php echo $_smarty_tpl->getSubTemplate ('html/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>

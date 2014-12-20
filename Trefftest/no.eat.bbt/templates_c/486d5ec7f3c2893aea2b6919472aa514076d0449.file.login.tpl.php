<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-20 12:37:06
         compiled from "html\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1540954900ab327ebc1-29222365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '486d5ec7f3c2893aea2b6919472aa514076d0449' => 
    array (
      0 => 'html\\login.tpl',
      1 => 1419075423,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1540954900ab327ebc1-29222365',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54900ab32f3ee7_78424264',
  'variables' => 
  array (
    'melding' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54900ab32f3ee7_78424264')) {function content_54900ab32f3ee7_78424264($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('html/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<br /><br />
<?php if ((isset($_smarty_tpl->tpl_vars['melding']->value))) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['melding']->value;?>
</h3>
<?php }?>
<!--Skjema for innlogging-->
<div class="container">
	<h1>Logg inn:</h1>
	<br />
	<form action="" method="post" class="text-center">
		<div class="form-group col-md-4">

			<input name="usern" placeholder="Epost" class="form-control"
				type="text" size="30" maxlength="50" />
		</div>
		<div class="form-group col-md-4">

			<input name="passwd" placeholder="Passord" class="form-control"
				type="password" size="30" maxlength="30" />
		</div>

		<input type="submit" class="btn btn-success" name="btnLogin"
			value="Logg inn" id="btnLogin" />
		</td>

	</form>
</div>
  <br/>
<?php echo $_smarty_tpl->getSubTemplate ('html/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>

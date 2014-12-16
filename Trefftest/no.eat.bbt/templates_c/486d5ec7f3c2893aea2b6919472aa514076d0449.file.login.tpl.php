<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-16 11:34:27
         compiled from "html\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1540954900ab327ebc1-29222365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '486d5ec7f3c2893aea2b6919472aa514076d0449' => 
    array (
      0 => 'html\\login.tpl',
      1 => 1418658588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1540954900ab327ebc1-29222365',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'melding' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54900ab32f3ee7_78424264',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54900ab32f3ee7_78424264')) {function content_54900ab32f3ee7_78424264($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('html/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('html/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<br />
<?php if ((isset($_smarty_tpl->tpl_vars['melding']->value))) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['melding']->value;?>
</h3>
<?php }?>
<!--Skjema for innlogging-->
<blockquote>
<h1>Logg inn:</h1>
   <form action="" method="post">
      <table border="0">
        <tr>
          <td width="150" align="left">
            E-post:</td>
          <td width="180">
            <input name="usern" type="text" size="30" maxlength="50" />
          </td>
        </tr>
        <tr>
          <td width="150" align="left">
            Passord:</td>
          <td>
            <input name="passwd" type="password" size="30" maxlength="30" />
          </td>
        </tr>
        <tr>
          <td colspan="2" align="right"><input type="submit" name="btnLogin" value="Logg inn" id="btnLogin" /></td>
        </tr>
      </table>
  </form>
  <br/>
</blockquote>
<?php echo $_smarty_tpl->getSubTemplate ('html/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-05 20:39:10
         compiled from "html\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:889548209de2ea556-69474173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '486d5ec7f3c2893aea2b6919472aa514076d0449' => 
    array (
      0 => 'html\\login.tpl',
      1 => 1417790177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '889548209de2ea556-69474173',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'melding' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548209de32eb10_24367578',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548209de32eb10_24367578')) {function content_548209de32eb10_24367578($_smarty_tpl) {?>
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
<?php }} ?>

<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-05 16:00:07
         compiled from "html\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96935481c877a9faf1-56775120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82763684e82176a8e16c30d5e76e414a96fb3bd8' => 
    array (
      0 => 'html\\login.tpl',
      1 => 1417788700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96935481c877a9faf1-56775120',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'melding' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5481c877acf752_50599137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5481c877acf752_50599137')) {function content_5481c877acf752_50599137($_smarty_tpl) {?>
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

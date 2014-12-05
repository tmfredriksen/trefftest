<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-05 20:38:34
         compiled from "html\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1413154820988bcc951-87400043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30d81b4648d095b5091327f21a76e338fe0ab4f9' => 
    array (
      0 => 'html\\index.tpl',
      1 => 1417808310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1413154820988bcc951-87400043',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54820988bfd696_99711348',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54820988bfd696_99711348')) {function content_54820988bfd696_99711348($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('html/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('html/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<p>hei! velkommen til index</p>
<hr/>
<a href="Login.php">Logg inn</a>



<?php echo $_smarty_tpl->getSubTemplate ('html/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>

<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-05 16:17:54
         compiled from "html\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:301325481c872cc81c7-17383221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b1bd6fe7363783f5790b8b42d054159cd0774d1' => 
    array (
      0 => 'html\\index.tpl',
      1 => 1417792665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301325481c872cc81c7-17383221',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5481c872cebea6_80388148',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5481c872cebea6_80388148')) {function content_5481c872cebea6_80388148($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<p>hei! velkommen til index</p>
<hr/>
<a href="Login.php">Logg inn</a>



<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>

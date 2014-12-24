<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-22 15:41:50
         compiled from "html\visRegion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2302954931dd2170b54-37708570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7f9103b2723c2ea656226a8286c44d0e651e382' => 
    array (
      0 => 'html\\visRegion.tpl',
      1 => 1419259265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2302954931dd2170b54-37708570',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54931dd223fc08_03028388',
  'variables' => 
  array (
    'regionNavn' => 0,
    'treffListe' => 0,
    'treff' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54931dd223fc08_03028388')) {function content_54931dd223fc08_03028388($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('html/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<br/>
<h2>Registrerte treff i Region <?php echo $_smarty_tpl->tpl_vars['regionNavn']->value;?>
</h2>
<?php  $_smarty_tpl->tpl_vars['treff'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['treff']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['treffListe']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['treff']->key => $_smarty_tpl->tpl_vars['treff']->value) {
$_smarty_tpl->tpl_vars['treff']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['treff']->key;
?>
	<?php echo $_smarty_tpl->tpl_vars['treff']->value->toRegionString();?>

<?php } ?>
<?php echo $_smarty_tpl->getSubTemplate ('html/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>

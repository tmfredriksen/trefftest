<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-20 16:52:36
         compiled from "html\visRegion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213054931819327017-07946377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efca128d29e45b12068131a242d4aa99768dbc60' => 
    array (
      0 => 'html\\visRegion.tpl',
      1 => 1419090076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213054931819327017-07946377',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_549318193907a6_57745244',
  'variables' => 
  array (
    'regionNavn' => 0,
    'treffListe' => 0,
    'treff' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549318193907a6_57745244')) {function content_549318193907a6_57745244($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('html/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<br/>
<h2 >Treff for region <?php echo $_smarty_tpl->tpl_vars['regionNavn']->value;?>
:</h2>
<?php  $_smarty_tpl->tpl_vars['treff'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['treff']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['treffListe']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['treff']->key => $_smarty_tpl->tpl_vars['treff']->value) {
$_smarty_tpl->tpl_vars['treff']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['treff']->key;
?>

<li><a href="visTreff.php?treffId=<?php echo $_smarty_tpl->tpl_vars['treff']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['treff']->value->getTreffnavn();?>
</a></li>
      
	
<?php } ?>
<?php echo $_smarty_tpl->getSubTemplate ('html/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>

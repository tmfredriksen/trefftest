<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-22 15:42:27
         compiled from "html\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2889554900aa7297667-97781198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9d3c940420dd3a619f7eb27e524b3c82938eab8' => 
    array (
      0 => 'html\\admin.tpl',
      1 => 1419259265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2889554900aa7297667-97781198',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54900aa732bd87_49046542',
  'variables' => 
  array (
    'treffliste' => 0,
    'treff' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54900aa732bd87_49046542')) {function content_54900aa732bd87_49046542($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('html/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<br />
<h1>Treff til godkjenning</h1>

<div class="col">
<?php if (($_smarty_tpl->tpl_vars['treffliste']->value)) {?>
<table>
	<?php  $_smarty_tpl->tpl_vars['treff'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['treff']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['treffliste']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['treff']->key => $_smarty_tpl->tpl_vars['treff']->value) {
$_smarty_tpl->tpl_vars['treff']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['treff']->key;
?>
	<tr>
		<th>
			<?php echo $_smarty_tpl->tpl_vars['treff']->value->getTreffNavn();?>

		</th>
		<th>
			<a href="visTreffAdmin.php?treffId=<?php echo $_smarty_tpl->tpl_vars['treff']->value->getId();?>
"><button class="btn btn-danger">Slett treff</button></a>
			<a href="visTreffAdmin.php?treffId=<?php echo $_smarty_tpl->tpl_vars['treff']->value->getId();?>
"><button class="btn btn-info">Vis info...</button></a>
			<a href="admin.php?godkjennTreffId=<?php echo $_smarty_tpl->tpl_vars['treff']->value->getId();?>
"><button class="btn btn-success">Godkjenn og publiser</button></a>
		</th>
	</tr>
	<?php } ?>
</table>
<?php } else { ?>
	<p>Ingen elementer.</p>
<?php }?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('html/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>

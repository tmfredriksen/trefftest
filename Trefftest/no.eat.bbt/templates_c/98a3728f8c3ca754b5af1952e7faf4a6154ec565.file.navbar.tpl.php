<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-18 19:48:27
         compiled from "html/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9774782165490935df348e9-70236831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98a3728f8c3ca754b5af1952e7faf4a6154ec565' => 
    array (
      0 => 'html/navbar.tpl',
      1 => 1418931704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9774782165490935df348e9-70236831',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5490935df38366_92068960',
  'variables' => 
  array (
    'regionListe' => 0,
    'region' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5490935df38366_92068960')) {function content_5490935df38366_92068960($_smarty_tpl) {?>
<!-- Static navbar -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="navbar navbar-default navbar-fixed-top">
	<div class="text-right"></div>
	<div class="container">
		<div class="navbar-header">

			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target=".navbar-collapse">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Bobiltreff</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Startside</a></li>
				<li><a href="om.php">Om</a></li>
				
					<?php if ((isset($_SESSION['isAdmin']))) {?>
					<?php if (($_SESSION['isAdmin'])) {?>
						<li><a href="">Registrere nye treff</a></li>
						<li><a href="admin.php">Treff til godkjenning</a></li>
						<li><a href="">Kontoinnstillinger</a></li>
						<li><a href="register.php">Opprett Bruker</a></li>
						<?php }?>
				<?php }?>

				<?php if ((isset($_SESSION['loggedIn']))) {?>
					<?php if (($_SESSION['loggedIn'])) {?>
						<li><a href="logout.php">Logg ut</a></li>
					<?php }?>
				<?php } else { ?>
					<?php  $_smarty_tpl->tpl_vars['region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['region']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['regionListe']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['region']->key => $_smarty_tpl->tpl_vars['region']->value) {
$_smarty_tpl->tpl_vars['region']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['region']->key;
?>				
					<li><a href="visRegion.php?regionId=<?php echo $_smarty_tpl->tpl_vars['region']->value->getId();?>
">Region <?php echo $_smarty_tpl->tpl_vars['region']->value->getRegionnavn();?>
</a></li>
					<?php } ?>
					<li><a href="Login.php">Logg inn</a></li>
				<?php }?>
			</ul>
		</div>
		<!--/.nav-collapse -->
	</div>
</div>
<br /><?php }} ?>

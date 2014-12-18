<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-18 19:10:53
         compiled from "html\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2819754900a972ab432-85659953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dcbb386d0e53922f7b51d40d55db79cd918b343' => 
    array (
      0 => 'html\\navbar.tpl',
      1 => 1418926218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2819754900a972ab432-85659953',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54900a972bae31_67489978',
  'variables' => 
  array (
    'regionListe' => 0,
    'region' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54900a972bae31_67489978')) {function content_54900a972bae31_67489978($_smarty_tpl) {?>
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
				<?php if ((isset($_SESSION['loggedIn']))) {?>
					<?php if (($_SESSION['loggedIn'])) {?>
						<li><a href="logout.php">Logg ut</a></li>
					<?php }?>
				<?php } else { ?>
					<li><a href="Login.php">Logg inn</a></li>
				<?php }?>
				
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

				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown">Mer <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="">Registrere nye treff</a></li>
						<li><a href="admin.php">Treff til godkjenning</a></li>
						<li class="dropdown-header">Brukere</li>
						<li><a href="">Kontoinnstillinger</a></li>
						<li><a href="register.php">Opprett Bruker</a></li>
					</ul></li>
			</ul>
		</div>
		<!--/.nav-collapse -->
	</div>
</div>
<br /><?php }} ?>

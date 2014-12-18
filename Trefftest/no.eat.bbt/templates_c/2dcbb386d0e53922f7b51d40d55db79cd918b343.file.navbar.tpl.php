<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-17 22:40:38
         compiled from "html\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2819754900a972ab432-85659953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dcbb386d0e53922f7b51d40d55db79cd918b343' => 
    array (
      0 => 'html\\navbar.tpl',
      1 => 1418841267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2819754900a972ab432-85659953',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54900a972bae31_67489978',
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
				<li><a href="Login.php">Logg inn</a></li>
				<li><a href="nord.php">Region Nord</a></li>
				<li><a href="nordland.php">Region Nordland</a></li>
				<li><a href="midt.php">Region Midt</a></li>
				<li><a href="vest.php">Region Vest</a></li>
				<li><a href="soer.php">Region Sør</a></li>
				<li><a href="oest.php">Region Øst</a></li>
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

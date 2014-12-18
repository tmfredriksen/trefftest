<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-18 18:02:02
         compiled from "html\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:297225493088a270265-98757780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0916c2ca209bd121bd46d77835ed03e439c3f535' => 
    array (
      0 => 'html\\navbar.tpl',
      1 => 1418921806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297225493088a270265-98757780',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5493088a27fc68_11026997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5493088a27fc68_11026997')) {function content_5493088a27fc68_11026997($_smarty_tpl) {?>
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

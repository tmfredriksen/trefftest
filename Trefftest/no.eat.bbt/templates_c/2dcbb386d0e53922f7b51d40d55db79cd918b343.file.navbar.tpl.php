<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-14 10:46:43
         compiled from "html\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29632548c557b78e358-77413725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dcbb386d0e53922f7b51d40d55db79cd918b343' => 
    array (
      0 => 'html\\navbar.tpl',
      1 => 1418550293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29632548c557b78e358-77413725',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548c557b7a1bd6_62192709',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548c557b7a1bd6_62192709')) {function content_548c557b7a1bd6_62192709($_smarty_tpl) {?>
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
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown">Mer <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="">Region Nord</a></li>
						<li><a href="">Region Nordland</a></li>
						<li><a href="">Region Midt</a></li>
						<li><a href="">Region Vest</a></li>
						<li><a href="">Region Sør</a></li>
						<li><a href="">Region Øst</a></li>


						<li class="dropdown-header">Rediger konto</li>
						<li><a href="edit.php">Kontoinnstillinger</a></li>
						<li><a href="password_reset.php">Resett passord</a></li>

					</ul></li>
				<li><div class="input-lg">
						<form action="search.php" method="post">
							<button type="submit" class="btn btn-primary btn-sm"
								value="search">Registrere Nye Treff</button>
					</div>
					</form></li>
			</ul>


		</div>
		<!--/.nav-collapse -->
	</div>
</div>
<br /><?php }} ?>

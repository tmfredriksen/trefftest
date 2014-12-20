<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-20 18:04:16
         compiled from "html\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:953254930889eb8a38-63724849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f046321baff696343cfbbfb56e3d6a56a4bfeafd' => 
    array (
      0 => 'html\\index.tpl',
      1 => 1419095053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '953254930889eb8a38-63724849',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5493088a1b0bb2_07409422',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5493088a1b0bb2_07409422')) {function content_5493088a1b0bb2_07409422($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('html/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<br />
	<div>
	<a href="http://www.bobilforeningen.no">
  <img src="Content/Bobilforening_logo.png" class="img-rounded"
			alt="" style="padding-left:10%">
</a></div>
	
	<br/>	
	<div style="margin-top:-14%; padding-left: 30%;">
	<h3>Hei og Velkommen til Bobiltreff.no</h3>
	
	<?php if ((isset($_SESSION['loggedIn']))) {?>
		<?php if (($_SESSION['loggedIn'])) {?>
			<?php if (($_SESSION['isAdmin'])) {?>
				<!-- Logget inn som admin -->
				<p>Du er logget inn som admin. Her kan man godkjenne treff opprettet
				av treffansvarlige, opprette nye treffansvarlige eller endre eksisterende
				treffansvarlige.</p>
			<?php } else { ?>
				<!-- Logget inn som treffansvarlig -->
				<p>Du er logget inn som treffansvarlig. Trykk på Opprett Treff for å opprette
				et nytt treff.<br/>Er det spørsmål eller problemer, kontakter du <a href="mailto:stein.gamst@gmail.com">stein.gamst@gmail.com</a></p>
			<?php }?>
		<?php }?>
	<?php } else { ?>
		<!-- Vanlig bruker -->
		<h3>Hvordan bruke siden?</h3>
		<p>Trykk på din Region og alle treff som er registrert vil da vises.
		<br/>Trykk deretter på det treff som dere ønsker å melde dere på og
		<br/>fyll inn de opplysninger som det spørres etter.</p>

	<?php }?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('html/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>

<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-26 19:53:18
         compiled from "html\visTreff.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2285554931fa06e8d98-41593487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0221dc8831464cb3b40cb166a0864b2dde1d7cfd' => 
    array (
      0 => 'html\\visTreff.tpl',
      1 => 1419619996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2285554931fa06e8d98-41593487',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54931fa07eaad9_99221323',
  'variables' => 
  array (
    'treff' => 0,
    'aktiviteter' => 0,
    'aktivitet' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54931fa07eaad9_99221323')) {function content_54931fa07eaad9_99221323($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('html/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<br/><br/>
<table class="table">
	<tr>
		<th>Navn: 
		</th>
		<th>
		<?php echo $_smarty_tpl->tpl_vars['treff']->value->getTreffNavn();?>

		</th>
	</tr>
	<tr>
		<th>Sted: 
		</th>
		<th>
		<?php echo $_smarty_tpl->tpl_vars['treff']->value->getSted();?>

		</th>
	</tr>
		<tr>
		<th>Koordinater: 
		</th>
		<th>
		<?php echo $_smarty_tpl->tpl_vars['treff']->value->getKoordinater();?>

		</th>
	</tr>
	<tr>
		<th>Fra: 
		</th>
		<th>
		<?php echo $_smarty_tpl->tpl_vars['treff']->value->getStartDato();?>

		</th>
	</tr>
	<tr>
		<th>Til: 
		</th>
		<th>
		<?php echo $_smarty_tpl->tpl_vars['treff']->value->getSluttDato();?>

		</th>
	</tr>
		<tr>
		<th>Påmeldingsfrist: 
		</th>
		<th>
		<?php echo $_smarty_tpl->tpl_vars['treff']->value->getPaameldingsfrist();?>

		</th>
	</tr>
	<tr>
		<th>Antall plasser: 
		</th>
		<th>
		<?php echo $_smarty_tpl->tpl_vars['treff']->value->getPlasser();?>

		</th>
	</tr>
	<tr>
		<th>Treffavgift: 
		</th>
		<th>
		<?php echo $_smarty_tpl->tpl_vars['treff']->value->getTreffavgift();?>

		</th>
	</tr>
	<tr>
		<th>Kontonr: 
		</th>
		<th>
		<?php echo $_smarty_tpl->tpl_vars['treff']->value->getKontonr();?>

		</th>
	</tr>
	<tr>
		<th>Beskrivelse: 
		</th>
		<th>
		<?php echo $_smarty_tpl->tpl_vars['treff']->value->getBeskrivelse();?>

		</th>
	</tr>
	<tr>
		<th>Antall plasser med strøm: 
		</th>
		<th>
		<?php echo $_smarty_tpl->tpl_vars['treff']->value->getStromplasser();?>

		</th>
	</tr>
	<tr>
		<th>Strømpris pr døgn: 
		</th>
		<th>
		<?php echo $_smarty_tpl->tpl_vars['treff']->value->getStrompris();?>

		</th>
	</tr>
</table>

<?php if (($_smarty_tpl->tpl_vars['aktiviteter']->value)) {?>
	<h2>Aktiviteter:</h2>
	<?php  $_smarty_tpl->tpl_vars['aktivitet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aktivitet']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aktiviteter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aktivitet']->key => $_smarty_tpl->tpl_vars['aktivitet']->value) {
$_smarty_tpl->tpl_vars['aktivitet']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['aktivitet']->key;
?>
		<h4><?php echo $_smarty_tpl->tpl_vars['aktivitet']->value->getNavn();?>
</h4>
		<p>
		<br/>
		<?php echo $_smarty_tpl->tpl_vars['aktivitet']->value->getBeskrivelse();?>

		<br/>
		Pris: <?php echo $_smarty_tpl->tpl_vars['aktivitet']->value->getPris();?>

		</p>
		<hr/>
	<?php } ?>
<?php }?>


<a href="paamelding.php?treffID=<?php echo $_smarty_tpl->tpl_vars['treff']->value->getId();?>
"><button class="btn btn-info">Til påmelding</button></a>

<?php echo $_smarty_tpl->getSubTemplate ('html/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-18 21:17:32
         compiled from "html\visTreff.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32915493365c15a7b7-92298664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5898697b4feef0ee7423930908bbfe157bd66c4' => 
    array (
      0 => 'html\\visTreff.tpl',
      1 => 1418929561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32915493365c15a7b7-92298664',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'treff' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5493365c2065d1_96259576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5493365c2065d1_96259576')) {function content_5493365c2065d1_96259576($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('html/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<br/><br/>
<table>
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


<a href="[lenke til påmelding]"><button class="btn btn-info">Til påmelding</button></a>

<?php echo $_smarty_tpl->getSubTemplate ('html/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>

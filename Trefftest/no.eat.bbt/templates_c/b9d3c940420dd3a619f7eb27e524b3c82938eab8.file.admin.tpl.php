<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-05 20:44:24
         compiled from "html\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18754548209828110f1-97819057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9d3c940420dd3a619f7eb27e524b3c82938eab8' => 
    array (
      0 => 'html\\admin.tpl',
      1 => 1417808404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18754548209828110f1-97819057',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54820982953546_29723422',
  'variables' => 
  array (
    'treffliste' => 0,
    'treff' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54820982953546_29723422')) {function content_54820982953546_29723422($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
<?php  $_smarty_tpl->tpl_vars['treff'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['treff']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['treffliste']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['treff']->key => $_smarty_tpl->tpl_vars['treff']->value) {
$_smarty_tpl->tpl_vars['treff']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['treff']->key;
?>
	
        <li><?php echo $_smarty_tpl->tpl_vars['treff']->value['Treffnavn'];?>
</li>   
        <hr/>
<?php } ?>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   
  </head>
  <body>
    <h1>Hello, world!</h1>

   
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }} ?>

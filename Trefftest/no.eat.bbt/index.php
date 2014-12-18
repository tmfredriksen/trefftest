<?php
date_default_timezone_set ( 'Europe/Oslo' );
require_once ('libs/Smarty.class.php');

include_once ("navbar.php");

$smarty = new Smarty ();
$smarty->display ( 'html/index.tpl' );

?> 
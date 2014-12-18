<?php

include_once ('Classes/Bruker.class.php');
include_once ('libs/Smarty.class.php');
include_once ('init.php');
include_once ('Repository/databasehelper.class.php');
include_once ('Repository/HashHelper.php');

include_once ("navbar.php");

$smarty = new Smarty;


$treffId = $_GET["treffId"];
$databasehelper = new databasehelper();
	
$treff = $databasehelper->getTreff($treffId);
	
$smarty->assign('treff', $treff);
$smarty->display('html/visTreff.tpl');

?>


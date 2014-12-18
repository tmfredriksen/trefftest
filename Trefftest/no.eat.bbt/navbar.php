<?php
include_once ('libs/Smarty.class.php');
include_once ('init.php');
include_once ('Repository/databasehelper.class.php');
$smarty = new Smarty ();

$databasehelper = new DatabaseHelper ();
$regioner = $databasehelper->getRegioner ();

$smarty->assign("regionListe", $regioner);
$smarty->display("html/navbar.tpl");


?>
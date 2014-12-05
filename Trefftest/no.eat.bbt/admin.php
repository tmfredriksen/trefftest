<?php

include_once ('Classes/Bruker.class.php');
include_once ('libs/Smarty.class.php');
include_once ('init.php');
include_once ('Repository/databasehelper.class.php');
include_once ('Repository/HashHelper.php');

$smarty = new Smarty;

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'])
{
	if(isset($_SESSION["user"]) && $_SESSION['user']->verify()) {
		if($_SESSION['isAdmin']) 
		{
			
			$databasehelper = new databasehelper();
			
			$treffliste = $databasehelper->getTreffForGodkjenning();
			
			$smarty->assign('treffliste', $treffliste);
			$smarty->display('html/admin.tpl');
		}
		else {
			
		}
	}
}
?>


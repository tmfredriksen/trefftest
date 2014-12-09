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
			if (isset($_GET["treffId"])) {
				$treffId = $_GET["treffId"];
				$databasehelper = new databasehelper();
					
				$treff = $databasehelper->getTreff($treffId);
					
				$smarty->assign('treff', $treff);
				$smarty->display('html/visTreffAdmin.tpl');
			}

		}
		else {
			header("location: admin.php");
		}
	}
}
?>


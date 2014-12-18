<?php

include_once ('Classes/Bruker.class.php');
include_once ('libs/Smarty.class.php');
include_once ('init.php');
include_once ('Repository/databasehelper.class.php');
include_once ('Repository/HashHelper.php');

include_once ("navbar.php");

$smarty = new Smarty;

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'])
{
	if(isset($_SESSION["user"]) && $_SESSION['user']->verify()) {
		if($_SESSION['isAdmin']) 
		{
			
			$databasehelper = new databasehelper();
			
			if (isset($_GET["godkjennTreffId"])) {
				$treffId = $_GET["godkjennTreffId"];
				
				$databasehelper->godkjennTreff($treffId);

				header("location: admin.php");
				
			}
			else{
				$treffliste = $databasehelper->getTreffForGodkjenning();
					
				$smarty->assign('treffliste', $treffliste);
				$smarty->display('html/admin.tpl');
			}
			
		}
		else {
			header("location: index.php");
		}
	}
	else {
		header("location: index.php");
	}
}
else {
	header("location: Login.php");
}
?>
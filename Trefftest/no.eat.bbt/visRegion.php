<?php
include_once ('libs/Smarty.class.php');
include_once ("navbar.php");
include_once ('Repository/databasehelper.class.php');
include_once ('Classes/Region.class.php');

$smarty = new Smarty();

 	if(isset($_GET["regionId"])) {
 		
 		$regionId = strip_tags($_GET["regionId"]);
 		
 		$databasehelper = new DatabaseHelper ();
 		$valgtRegion = $databasehelper->getRegion($regionId);
 		if (isset($valgtRegion)) {
 			$treffListe = $databasehelper->getTreffForRegion($regionId);
 				
 			$smarty->assign("treffListe", $treffListe);
 			$smarty->assign("regionNavn", $valgtRegion->getRegionnavn());
 			$smarty->display('html/visRegion.tpl');
 		}
 		else {
 			header("location: index.php");
 		}

 	}

?>
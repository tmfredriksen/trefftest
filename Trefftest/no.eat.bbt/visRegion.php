<?php
include_once ('libs/Smarty.class.php');
include_once ("navbar.php");

$smarty = new Smarty();

 	if(isset($_GET["regionId"])) {
 		
 		
 		
 		$smarty->display('html/visRegion.tpl');
 	}

?>
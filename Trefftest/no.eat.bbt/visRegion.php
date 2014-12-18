<?php
include_once ('libs/Smarty.class.php');

$smarty = new Smarty();

 	if(isset($_GET["regionId"])) {
 		
 		
 		
 		$smarty->display('html/visRegion.tpl');
 	}

?>
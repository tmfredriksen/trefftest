<?php
include_once ('libs/Smarty.class.php');

$smarty = new Smarty();

 	if(isset($_GET[])) {
 		
 		$smarty->display('html/nord.tpl');
 	}
 	else if(isset($_GET[])) {
 		$smarty->display('html/nordland.tpl');
 			
 	}
 	else if(isset($_GET[])) {
 		$smarty->display('html/midt.tpl');
 			
 	}
 	else if(isset($_GET[])) {
 		$smarty->display('html/vest.tpl');
 			
 	}
 	else if(isset($_GET[])) {
 		$smarty->display('html/soer.tpl');
 			
 	}
 	else if(isset($_GET[])) {
 		$smarty->display('html/oest.tpl');
 			
 	}
 	else {
 		
 	}
?>
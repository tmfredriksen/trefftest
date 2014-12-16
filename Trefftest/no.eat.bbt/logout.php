<?php 
include_once('libs/Smarty.class.php');
include_once('init.php');

//Logger brukeren ut
session_destroy();
$smarty = new Smarty;
$smarty->assign('melding','Du er n&aring; logget ut');
header("location: index.php"); 
?>
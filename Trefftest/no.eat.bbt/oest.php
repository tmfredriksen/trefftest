<?php
date_default_timezone_set ( 'Europe/Oslo' );
require_once ('libs/Smarty.class.php');

$smarty = new Smarty ();
$smarty->display ( 'html/oest.tpl' );



?>
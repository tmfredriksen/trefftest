<?php
date_default_timezone_set ( 'Europe/Oslo' );
include_once ('Classes/Bruker.class.php');
require_once ('libs/Smarty.class.php');
include_once ('init.php');
include_once ('Repository/databasehelper.class.php');
include_once ('Repository/HashHelper.php');

$smarty = new Smarty ();

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'])
{
	if(isset($_SESSION["user"]) && $_SESSION['user']->verify()) {
		
		if($_SESSION['isAdmin'])
		{
			$smarty->display ( 'html/register.tpl' );
			$databasehelper = new databasehelper();
			$Navn = strip_tags($_GET["brukernavn"]);
			$Epost = strip_tags($_GET["bruker_epost"]);
			$Telefon = strip_tags($_GET["bruker_tlf"]);
			$PassordGet = strip_tags($_GET["user_password_repeat"]);
			$isAdmin = 0;
			$salt = generateSalt();
			$Passord = $salt . $PassordGet;
			$databasehelper->opprettBruker($Navn, $Epost, $Telefon, $Passord, $Salt, $isAdmin);
		}
		else {
			$smarty->assign('melding', "Du må være admin");
			header("location: index.php");
		}
	}
	else {
		header("location: index.php");
	}
}
else {
	header("location: index.php");
}

?>
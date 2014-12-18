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
			
			if (isset ( $_POST ['btn_register'] ))
			 {
				$Navn = strip_tags($_POST["brukernavn"]);
				$Epost = strip_tags($_POST["bruker_epost"]);
				$Telefon = strip_tags($_POST["bruker_tlf"]);
				$PassordGet = strip_tags($_POST["user_password_repeat"]);
				$Adresse = strip_tags($_POST["bruker_adresse"]);
				$Postnr = strip_tags($_POST["bruker_postnr"]);
				$Sted = strip_tags($_POST["bruker_sted"]);
				$isAdmin = 0;
				$Salt = generateSalt();
				$Passord = ($PassordGet . $Salt);
				$databasehelper = new databasehelper();			
				$databasehelper->opprettBruker($Navn, $Epost, $Telefon, $Adresse, $Postnr, $Sted, $Passord, $Salt, $isAdmin);
				$smarty->assign('melding', 'Bruker opprettet');
			}
		}
		else {
			$smarty->assign('melding', 'Du må være admin');
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
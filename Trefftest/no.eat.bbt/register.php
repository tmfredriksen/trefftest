<?php
date_default_timezone_set ( 'Europe/Oslo' );
include_once ('Classes/Bruker.class.php');
require_once ('libs/Smarty.class.php');
include_once ('init.php');
include_once ('Repository/databasehelper.class.php');
include_once ('Repository/HashHelper.php');
include_once ("navbar.php");
include_once ("Classes/SendEpost.php");

$smarty = new Smarty ();

if (isset ( $_SESSION ['loggedIn'] ) && $_SESSION ['loggedIn']) {
	if (isset ( $_SESSION ["user"] ) && $_SESSION ['user']->verify ()) {
		
		if ($_SESSION ['isAdmin']) {
			$smarty->display ( 'html/register.tpl' );
			
			if (isset ( $_POST ['btn_register'] )) {
				$Navn = strip_tags ( $_POST ["brukernavn"] );
				$Epost = strip_tags ( $_POST ["bruker_epost"] );
				$Telefon = strip_tags ( $_POST ["bruker_tlf"] );
				$PassordGet = strip_tags ( $_POST ["user_password_repeat"] );
				$Adresse = strip_tags ( $_POST ["bruker_adresse"] );
				$Postnr = strip_tags ( $_POST ["bruker_postnr"] );
				$Sted = strip_tags ( $_POST ["bruker_sted"] );
				$isAdmin = 0;
				$Salt = generateSalt ();
				$Passord = checkHash ( $PassordGet, $Salt );
				$databasehelper = new databasehelper ();
				$databasehelper->opprettBruker($Navn, $Epost, $Telefon, $Adresse, $Postnr, $Sted, $Passord, $Salt, $isAdmin);
				
				$subject = 'Konto for bobiltreff.no';
				$message = 'Her har du din konto for å registrere treff.
						    Bruker: ' . $Epost . " \r\n " . 'Passord: ' . $PassordGet;
				$sendepost = mail_utf8($Epost, "Stein Cato Gamst", "stein.gamst@gmail.com", $subject, $message);
				$smarty->assign ( 'melding', 'Bruker opprettet' );
				echo "<script type='text/javascript'>alert('Bruker opprettet! $sendepost ')</script>";
				
			}
		} else {
			$smarty->assign ( 'melding', 'Du må være admin' );
			header ( "location: index.php" );
		}
	} else {
		header ( "location: index.php" );
	}
} else {
	header ( "location: index.php" );
}

?>
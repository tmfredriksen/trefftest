<?php
include_once ('libs/Smarty.class.php');
include_once ('Classes/Bruker.class.php');
include_once ('Classes/Aktivitet.class.php');
include_once ('init.php');
include_once ('Repository/databasehelper.class.php');
include_once ('Repository/HashHelper.php');

$smarty = new Smarty;

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'])
{	
				$databasehelper = new databasehelper();
				$regioner = $databasehelper->getRegioner();
				
				$smarty->assign("regionListe", $regioner);
				
				$smarty->display('html/opprettTreff.tpl');
				
				
				if (isset ( $_POST ['btn_opprettTreff'] ))
				{	
					$Treffnavn = strip_tags($_POST["treffnavn"]);
					$Startdato = strip_tags($_POST["startdato"]);
					$Sluttdato = strip_tags($_POST["sluttdato"]);
					$Sted = strip_tags($_POST["sted"]);
					$Koordinater = strip_tags($_POST["koordinater"]);
					$Plasser = strip_tags($_POST["plasser"]);
					$Treffavgift = strip_tags($_POST["treffavgift"]);	
					$Kontonr = strip_tags($_POST["kontonr"]);
					$Beskrivelse = strip_tags($_POST["beskrivelse"]);
					$Paameldingsfrist = strip_tags($_POST["paameldingsfrist"]);
					$Stromplasser = strip_tags($_POST["stromplasser"]);
					$Strompris = strip_tags($_POST["strompris"]);
					$isOk = 0;
					$RegionID = strip_tags($_POST["region_id"]);
					$BrukerID = $_SESSION['user']->getId();		 
					
					// Henter id til opprettet treff
					$treffId = $databasehelper->opprettTreff($Treffnavn, $Startdato, $Sluttdato, $Sted, $Koordinater, $Plasser, $Treffavgift, $Kontonr, $Beskrivelse, $Paameldingsfrist, $Stromplasser, $Strompris, $isOk, $RegionID, $BrukerID);						
					$smarty->assign('melding', 'Treff opprettet');
					// debug
					// Genialt eksempel:
					// http://techstream.org/Web-Development/PHP/Dynamic-Form-Processing-with-PHP
					if (isset($_POST['BX_NAME'])) {
						$BX_NAME = $_POST['BX_NAME'];        // array
						$BX_desc = $_POST['BX_desc'];	   // array
						$BX_price = $_POST['BX_price'];    // array
						
						foreach($BX_NAME as $a => $b){
							$databasehelper->opprettAktivitet($treffId, $BX_NAME[$a], $BX_desc[$a], $BX_price[$a]);
						}
					}
					
				}
				
}
else {
	header("location: index.php");
		
	
}
?>


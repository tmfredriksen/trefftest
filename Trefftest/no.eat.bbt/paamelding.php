<?php
include_once ('libs/Smarty.class.php');
include_once ("navbar.php");
include_once ('Repository/databasehelper.class.php');
include_once ('Classes/Treff.class.php');

$smarty = new Smarty();

 //	if(isset($_GET["treffID"])) 
 //	{
 		
 	
$databasehelper = new databasehelper();			
				
$smarty->display('html/paamelding.tpl');
				
				if (isset ( $_POST ['btn_paamelding'] ))
				{	
					$Medlemsnr = strip_tags($_POST["medlemsnr"]);
					$Navn = strip_tags($_POST["navn"]);
					$Epost = strip_tags($_POST["epost"]);
					$Telefon = strip_tags($_POST["telefon"]);
					$Ledsager = strip_tags($_POST["ledsager"]);
					$Hjemsted = strip_tags($_POST["hjemsted"]);
					$Antpersoner = strip_tags($_POST["antpersoner"]);	
					$Antdagerstrom = strip_tags($_POST["antdagerstrom"]);
					
					$isOK = 0;
					$treffID = $_GET["treffID"];
					
					$databasehelper->nyPaamelding($Medlemsnr, $Navn, $Epost, $Telefon, $Ledsager, $Hjemsted, $Antpersoner, $Antdagerstrom, $TreffID);
					$smarty->assign('melding', 'Treff opprettet');
				}
				
//}
		else {
			header("location: index.php");
		
 	}

?>
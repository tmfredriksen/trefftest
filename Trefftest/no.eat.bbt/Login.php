<?php
// Koden for login-siden
include_once ('libs/Smarty.class.php');
include_once ('Classes/Bruker.class.php');
include_once ('init.php');
include_once ('Repository/DatabaseHelper.class.php');
include_once ('Repository/HashHelper.php');

// http://stackoverflow.com/questions/60174/how-can-i-prevent-sql-injection-in-php?rq=1

$smarty = new Smarty ();
// $smarty->assign('melding','');
// Sjekker om brukeren allerede er logget inn
if (! (isset ( $_SESSION ['loggedIn'] ) && $_SESSION ['loggedIn'])) {
	
	if (isset ( $_POST ['btnLogin'] )) {
		if ((isset ( $_POST ['usern'] ) ? $_POST ['usern'] : '') && (isset ( $_POST ['passwd'] ) ? $_POST ['passwd'] : '')) {
			$usern = strip_tags ( $_POST ['usern'] );
			$passwd = strip_tags ( $_POST ['passwd'] ); // Fjener evt. tagger
			                                            // Logger inn ved hjelp av loginhelper
			
			$databasehelper = new databasehelper ( "bobiltreff.no.mysql", "bobiltreff_no", "hWm3yBSw", "bobiltreff_no" );
			$user = $databasehelper->getUser ( $usern );
			
			// Sjekker om kontoen er aktivert
			// Sjekker om det ble oppgitt korrekt brukernavn og passord
			if (strcmp ( $user->getPassord (), checkHash ( $passwd, $user->getSalt () ) ) == 0) {
				// Lagrer brukeren i sesjonen
				$_SESSION['user'] = $user;
				//Setter sesjonsbrukernavn til fullt navn fra databasen for smarty
				$_SESSION['username'] = strip_tags($user->getNavn());
				$_SESSION['loggedIn'] = true;
				$_SESSION['isAdmin'] = $user->getIsAdmin();
				header("location: index.php");
			} else {
				$this->smarty->assign ( 'melding', 'Feil brukernavn eller passord!' );

			}
		} else {
			$smarty->assign ( 'melding', 'Alle felt må være utfylt' );
		}
	}
	$smarty->display ( '../html/login.tpl' );
} else {
	$smarty->assign ( 'melding', 'Du er allerede logget inn!' );
	$smarty->display ( '../html/logout.tpl' );
}
?>
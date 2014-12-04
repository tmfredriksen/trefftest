<?php
date_default_timezone_set ( 'Europe/Oslo' );

include_once ('../Classes/Bruker.class.php');
include_once ('HashHelper.php');
class databasehelper {
	
	private $db;
	
	function __construct($host, $username, $password, $dbname) {
		$this->db = new mysqli ( $host, $username, $password, $dbname );
		
		if ($this->db->connect_error) {
			die ( 'Connect Error (' . $this->db->connect_errno . ') ' . $this->db->connect_error );
		}
	}
	
	public function getUser($epost) {
		$stmt = $this->db->prepare ( "SELECT Navn, Telefon, Passord, Salt, isAdmin FROM Bruker WHERE Epost=?" );
		$brukerid = $this->db->real_escape_string ( $epost ); // Vasker input
		$stmt->bind_param ( 's', $brukerid );
		
		$stmt->bind_result ( $dbnavn, $dbtelefon, $dbpassord, $dbsalt, $dbadmin );
		$stmt->execute ();
		
		// Hvis denne feiler finnes ikke brukerid'en i tabellen
		if ($stmt->fetch ()) {
			
			$user = new Bruker ( $dbnavn, $brukerid, $dbtelefon, $dbpassord, $dbsalt, $dbadmin );
			
		} else {
			$this->smarty->assign ( 'melding', 'Ukjent brukernavn!' );
			return null;
		}
	}
}
?>
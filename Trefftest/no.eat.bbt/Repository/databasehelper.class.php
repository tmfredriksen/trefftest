<?php

include_once ('../no.eat.bbt/Classes/Bruker.class.php');
include_once ('HashHelper.php');
class databasehelper {
	
	private $host;
	private $username;
	private $password;
	private $dbname;
	
	function __construct($host, $username, $password, $dbname) {
	    $this->host = $host;
	    $this->username = $username;
	    $this->password = $password;
	    $this->dbname = $dbname;

	}
	
	public function getUser($epost) {
	    
	    
	    $db = new mysqli ( $this->host, $this->username, $this->password, $this->dbname );
		if ($db->connect_error) {
			die ( 'Connect Error (' . $db->connect_errno . ') ' . $db->connect_error );
	
		}

		$stmt = $db->prepare ( "SELECT Navn, Telefon, Passord, Salt, isAdmin FROM Bruker WHERE Epost=?" );
		$brukerid = $db->real_escape_string ( $epost ); // Vasker input
		$stmt->bind_param ( 's', $brukerid );
		
		$stmt->bind_result ( $dbnavn, $dbtelefon, $dbpassord, $dbsalt, $dbadmin );
		$stmt->execute ();
		
		// Hvis denne feiler finnes ikke brukerid'en i tabellen
		if ($stmt->fetch ()) {

			$user = new Bruker ( $dbnavn, $brukerid, $dbtelefon, $dbpassord, $dbsalt, $dbadmin );
			return $user;
			
		} else {

			return null;
		}
	}
}
?>
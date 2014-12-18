<?php

include_once ('../no.eat.bbt/Classes/Bruker.class.php');
include_once ('../no.eat.bbt/Classes/Treff.class.php');
include_once ('../no.eat.bbt/Classes/Region.class.php');
include_once ('HashHelper.php');
class databasehelper {
	
	private $host = "Kark.hin.no";
	private $username = "tordm";
	private $password = "tordm123";
	private $dbname = "TMKF_DB1";
	
	function __construct() {
		
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
	
	public function getTreffForGodkjenning() {
		// dis is hav vi do eet
		// http://php.net/manual/en/mysqli-stmt.fetch.php
		$db = new mysqli ( $this->host, $this->username, $this->password, $this->dbname );
		if ($db->connect_error) {
			die ( 'Connect Error (' . $db->connect_errno . ') ' . $db->connect_error );
		
		}
		
		$query = "SELECT * FROM Treff WHERE isOk = 0";
		
		// Oppretter tomt array
		$result = [];
		
		if ($stmt = $db->prepare($query)) {
			$stmt->execute();
			$stmt->bind_result($id, $Treffnavn, $Startdato, $Sluttdato, $Sted, $Koordinater, $Plasser, $Treffavgift, $Kontonr, $Beskrivelse, $Paameldingsfrist, $Stromplasser, $Strompris, $isOk, $RegionID, $BrukerID);
			
			while ($stmt->fetch()) {
				$treff = new Treff($Treffnavn, $Startdato, $Sluttdato, $Sted, $Koordinater, $Plasser, $Treffavgift, $Kontonr, $Beskrivelse, $Paameldingsfrist, $Stromplasser, $Strompris, $isOk, $RegionID, $BrukerID);
				$treff->setId($id);
				array_push($result, $treff);
			}
			
		}
		
		return $result;
	}
	
	public function getTreff($TreffId) {
	    
	    $db = new mysqli ( $this->host, $this->username, $this->password, $this->dbname );
		if ($db->connect_error) {
			die ( 'Connect Error (' . $db->connect_errno . ') ' . $db->connect_error );
	
		}

		$stmt = $db->prepare ( "SELECT * FROM Treff WHERE ID=?" );
		$treffid = $db->real_escape_string ( $TreffId ); // Vasker input
		$stmt->bind_param ( 'i', $treffid );
		
		$stmt->bind_result($id, $Treffnavn, $Startdato, $Sluttdato, $Sted, $Koordinater, $Plasser, $Treffavgift, $Kontonr, $Beskrivelse, $Paameldingsfrist, $Stromplasser, $Strompris, $isOk, $RegionID, $BrukerID);
		$stmt->execute ();
		
		// Hvis denne feiler finnes ikke treff-id'en i tabellen
		if ($stmt->fetch ()) {
			
			$treff = new Treff($Treffnavn, $Startdato, $Sluttdato, $Sted, $Koordinater, $Plasser, $Treffavgift, $Kontonr, $Beskrivelse, $Paameldingsfrist, $Stromplasser, $Strompris, $isOk, $RegionID, $BrukerID);
			$treff->setId($id);
			
			return $treff;
			
		} else {

			return null;
		}
	}
	
	public function godkjennTreff($id) {
		
	    $db = new mysqli ( $this->host, $this->username, $this->password, $this->dbname );
		if ($db->connect_error) {
			die ( 'Connect Error (' . $db->connect_errno . ') ' . $db->connect_error );
	
		}
		
		$ida = $db->real_escape_string($id);
		
		$stmt = $db->prepare( "UPDATE Treff SET isOk=1 WHERE id=?" );
		$stmt->bind_param ( 'i', $ida);
		
		$stmt->execute ();
		
		$db->close();
	}

	public function opprettBruker($Navn, $Epost, $Telefon, $Adresse, $Postnr, $Sted, $Passord, $Salt, $isAdmin) {
		
		$db = new mysqli ( $this->host, $this->username, $this->password, $this->dbname );
		if ($db->connect_error) {
			die ( 'Connect Error (' . $db->connect_errno . ') ' . $db->connect_error );
		
		}
		
		
		$stmt = $db->prepare("INSERT INTO Bruker (Navn, Epost, Telefon, Adresse, Postnr, Sted, Passord, Salt, isAdmin)
		VALUES(?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param('ssisisssi', $Navn, $Epost, $Telefon, $Adresse, $Postnr, $Sted, $Passord, $Salt, $isAdmin);
		
		$stmt->execute();
		$db->close();
		
	}
	
	public function opprettTreff($Treffnavn, $Startdato, $Sluttdato, $Sted, $Koordinater, $Plasser, $Treffavgift,
			$Kontonr, $Beskrivelse, $Paameldingsfrist, $Stromplasser, $Strompris, $isOk, $RegionID, $BrukerID) {
	
		$db = new mysqli ( $this->host, $this->username, $this->password, $this->dbname );
		if ($db->connect_error) {
			die ( 'Connect Error (' . $db->connect_errno . ') ' . $db->connect_error );
	
		}
	
	
		$stmt = $db->prepare("INSERT INTO Treff (Treffnavn, Startdato, Sluttdato, Sted, Koordinater, Plasser, Treffavgift,
				Kontonr, Beskrivelse, Paameldingsfrist, Stromplasser, Strompris, isOk, RegionID, BrukerID)
		VALUES('sssssiiissiiii', ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param($Treffnavn, $Startdato, $Sluttdato, $Sted, $Koordinater, $Plasser, $Treffavgift,
			$Kontonr, $Beskrivelse, $Paameldingsfrist, $Stromplasser, $Strompris, $isOk, $RegionID, $BrukerID) ;
	
		$stmt->execute();
		$db->close();
	
	}
	
	public function getRegioner() {
		$db = new mysqli ( $this->host, $this->username, $this->password, $this->dbname );
		if ($db->connect_error) {
			die ( 'Connect Error (' . $db->connect_errno . ') ' . $db->connect_error );
		
		}
		
		$query = "SELECT * FROM Region";
		
		// Oppretter tomt array
		$result = [];
		
		if ($stmt = $db->prepare($query)) {
			$stmt->execute();
			$stmt->bind_result($id, $Regionnavn);
				
			while ($stmt->fetch()) {
				$region = new Region($id, $Regionnavn);
				array_push($result, $region);
			}
				
		}
		
		return $result;
	}
	
	public function getTreffForRegion($id) {
		$db = new mysqli ( $this->host, $this->username, $this->password, $this->dbname );
		if ($db->connect_error) {
			die ( 'Connect Error (' . $db->connect_errno . ') ' . $db->connect_error );
		
		}
		
		$stmt = $db->prepare ( "SELECT * FROM Treff WHERE RegionId = ?" );
		$regionId = $db->real_escape_string ( $id ); // Vasker input
		$stmt->bind_param ( 'i', $regionId );
		// Oppretter tomt array
		$result = [];

		$stmt->execute();
		$stmt->bind_result($id, $Treffnavn, $Startdato, $Sluttdato, $Sted, $Koordinater, $Plasser, $Treffavgift, $Kontonr, $Beskrivelse, $Paameldingsfrist, $Stromplasser, $Strompris, $isOk, $RegionID, $BrukerID);
			
		while ($stmt->fetch()) {
			$treff = new Treff($Treffnavn, $Startdato, $Sluttdato, $Sted, $Koordinater, $Plasser, $Treffavgift, $Kontonr, $Beskrivelse, $Paameldingsfrist, $Stromplasser, $Strompris, $isOk, $RegionID, $BrukerID);
			$treff->setId($id);
			array_push($result, $treff);
		}

		
		return $result;
	}
	
	public function getRegion($id) {
		$db = new mysqli ( $this->host, $this->username, $this->password, $this->dbname );
		if ($db->connect_error) {
			die ( 'Connect Error (' . $db->connect_errno . ') ' . $db->connect_error );
		
		}
		
		$stmt = $db->prepare ( "SELECT * FROM Region WHERE ID=?" );
		$regionId = $db->real_escape_string ( $id ); // Vasker input
		$stmt->bind_param ( 'i', $regionId );
		
		$stmt->bind_result($id, $regionNavn);
		$stmt->execute ();
		
		// Hvis denne feiler finnes ikke region-id'en i tabellen
		if ($stmt->fetch ()) {
				
			$region = new Region($id, $regionNavn);
				
			return $region;
				
		} else {
		
			return null;
		}
	}
}
?>

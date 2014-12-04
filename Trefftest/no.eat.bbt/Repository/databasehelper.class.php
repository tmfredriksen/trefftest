<?php
date_default_timezone_set ( 'Europe/Oslo' );
class databasehelper {
	protected $db;
	function __construct($strDSN, $strUser, $strPassword) {
		try {
			$this->db = new PDO ( $strDSN, $strUser, $strPassword );
		} catch ( PDOException $e ) {
			// throw new Exception($e->getMessage(), $e->getCode);
			printf ( $e->getMessage () );
		}
	}
	function QueryDatabase($str_prepQuery, $arr_placeholders) {
		$dirty = array ();
		$stmt = $this->db->prepare ( $str_prepQuery );
		if (! $stmt->execute ( $arr_placeholders )) {
			$arr_error = $stmt->errorInfo ();
			print_r ( $arr_error );
			throw new Exception ( "Det skjedde en feil under spørring mot databasen.<br /> Feilmelding: " . @$arr_error [2] );
			return;
		}
		$index = 0;
		while ( $row = $stmt->fetch ( PDO::FETCH_ASSOC ) ) {
			$dirty [$index] = $row;
			$index ++;
		}
		return $dirty;
	}
	function QueryDb($str_Query) {
		$dirty = array ();
		try {
			$stmt = $this->db->query ( $str_Query );
			while ( $row = $stmt->fetch ( PDO::FETCH_ASSOC ) ) {
				$dirty [$index] = $row;
				$index ++;
			}
			$dbh = null;
		} catch ( PDOException $e ) {
			print "Error!: " . $e->getMessage () . "<br/>";
			die ();
		}
		
		return $dirty;
	}
}
?>
<?php
class Treff {
	private $Id;
	private $Treffnavn;
	private $Startdato;
	private $Sluttdato;
	private $Sted;
	private $Koordinater;
	private $Plasser;
	private $Treffavgift;
	private $Kontonr;
	private $Beskrivelse;
	private $Paameldingsfrist;
	private $Stromplasser;
	private $Strompris;
	private $isOk;
	private $RegionID;
	private $BrukerID;
	
	function __construct($Treffnavn, $Startdato, $Sluttdato, $Sted, $Koordinater, $Plasser, $Treffavgift, $Kontonr, $Beskrivelse, $Paameldingsfrist, $Stromplasser, $Strompris, $isOk, $RegionID, $BrukerID) {
		$this->Treffnavn = $Treffnavn;
		$this->Startdato = $Startdato;
		$this->Sluttdato = $Sluttdato;
		$this->Sted = $Sted;
		$this->Koordinater = $Koordinater;
		$this->Plasser = $Plasser;
		$this->Treffavgift = $Treffavgift;
		$this->Kontonr = $Kontonr;
		$this->Beskrivelse = $Beskrivelse;
		$this->Paameldingsfrist = $Paameldingsfrist;
		$this->Stromplasser = $Stromplasser;
		$this->Strompris = $Strompris;
		$this->isOk = $isOk;
		$this->RegionID = $RegionID;
		$this->BrukerID = $BrukerID;
	}
	
	public function getId() {
		return $this->Id;
	}
	public function setId($value) {
		$this->Id = $value;
	}
	
	public function getTreffnavn() {
		return $this->Treffnavn;
	}
	public function setTreffnavn($value) {
		$this->Treffnavn = $value;
	}
	public function getStartdato() {
		return $this->Startdato;
	}
	public function setStartdato($value) {
		$this->Startdato = $value;
	}
	public function getSluttdato() {
		return $this->Sluttdato;
	}
	public function setSluttdato($value) {
		$this->Sluttdato = $value;
	}
	public function getSted() {
		return $this->Sted;
	}
	public function setSted($value) {
		$this->Sted = $value;
	}
	public function getKoordinater() {
		return $this->Koordinater;
	}
	public function setKoordinater($value) {
		$this->Koordinater = $value;
	}
	public function getPlasser() {
		return $this->Plasser;
	}
	public function setPlasser($value) {
		$this->Plasser = $value;
	}
	public function getTreffavgift() {
		return $this->Treffavgift;
	}
	public function setTreffavgift($value) {
		$this->Treffavgift = $value;
	}
	public function getKontonr() {
		return $this->Kontonr;
	}
	public function setKontonr($value) {
		$this->Kontonr = $value;
	}
	public function getBeskrivelse() {
		return $this->Beskrivelse;
	}
	public function setBeskrivelse($value) {
		$this->Beskrivelse = $value;
	}
	public function getPaameldingsfrist() {
		return $this->Paameldingsfrist;
	}
	public function setPaameldingsfrist($value) {
		$this->Paameldingsfrist = $value;
	}
	public function getStromplasser() {
		return $this->Stromplasser;
	}
	public function setStromplasser($value) {
		$this->Stromplasser = $value;
	}
	public function getStrompris() {
		return $this->Strompris;
	}
	public function setStrompris($value) {
		$this->Strompris = $value;
	}
	public function getisOk() {
		return $this->isOk;
	}
	public function setisOk($value) {
		$this->isOk = $value;
	}
	public function getRegionID() {
		return $this->RegionID;
	}
	public function setRegionID($value) {
		$this->RegionID = $value;
	}
	public function getBrukerID() {
		return $this->BrukerID;
	}
	public function setBrukerID($value) {
		$this->BrukerID = $value;
	}
	
	public function toString() {
		return "Navn: " . $this->Treffnavn . " | Sted: " . $this->Sted . " | Fra: " . $this->Startdato
		. " | Til: " . $this->Sluttdato . " | Antall plasser: " . $this->Plasser . " | Treffavgift: kr"
		. $this->Treffavgift . " til konto: " . $this->Kontonr . " | Påmeldingsfrist: "
		. $this->Paameldingsfrist . " | Antall strømplasser: " . $this->Stromplasser
		. " | Pris per døgn: " . $this->Strompris;
	}
	
	// Bruk i regionvisning
	public function toRegionString() {
		return "<h2>" . $this->Treffnavn . ", " . $this->Sted . "</h2>"
		. "<p>" . $this->Startdato . " - " . $this->Sluttdato . "<br/>" 
		. "Treffavgift kr" . $this->Treffavgift . " pr person<br/>" 
		. "Påmeldingsfrist: " . $this->Paameldingsfrist . "<br/><a href='visTreff.php?treffId=" 
		. $this->Id . "'>Trykk for mer info og påmelding</a></p>";
	}
}
?>
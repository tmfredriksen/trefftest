<?php
class Treff {
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
	private $isOk;
	private $RegionID;
	private $BrukerID;
	
	function __construct($Treffnavn, $Startdato, $Sluttdato, $Sted, $Koordinater, $Plasser, $Treffavgift, $Kontonr, $Beskrivelse, $Paameldingsfrist, $Stromplasser, $isOk, $RegionID, $BrukerID) {
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
		$this->isOk = $isOk;
		$this->RegionID = $RegionID;
		$this->BrukerID = $BrukerID;
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
}
?>
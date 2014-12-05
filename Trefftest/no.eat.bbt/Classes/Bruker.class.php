<?php
class Bruker {
	private $Navn;
	private $Epost;
	private $Passord;
	private $Salt;
	private $Telefon;
	private $isAdmin;
	function __construct($Navn, $Epost, $Telefon, $Passord, $Salt, $isAdmin) {
		$this->Navn = $Navn;
		$this->Epost = $Epost;
		$this->Telefon = $Telefon;
		$this->Passord = $Passord;
		$this->Salt = $Salt;
		$this->isAdmin = $isAdmin;
	}
	public function getNavn() {
		return $this->Navn;
	}
	public function setNavn($Navn) {
		$this->Navn = $Navn;
	}
	public function getEpost() {
		return $this->Epost;
	}
	public function setEpost($Epost) {
		$this->Epost = $Epost;
	}
	public function getTelefon() {
		return 	$this->Telefon;
	}
	public function setTelefon($Telefon) {
		$this->Telefon = $Telefon;
	}
	public function getPassord() {
		return $this->Passord;
	}
	public function setPassord() {
		$this->Passord = $Passord;
	}
	public function getSalt() {
		return $this->Salt;
	}
	public function setSalt($Salt) {
		$this->Salt = $Salt;
	}
	public function getIsAdmin() {
		return $this->isAdmin;
	}
}
<?php
class Aktivitet {
	private $Navn;
	private $Beskrivelse;
	private $Pris;
	private $TreffId;

	public function __construct($Navn, $Beskrivelse, $Pris, $TreffId){
		$this->Navn = $Navn;
		$this->Beskrivelse = $Beskrivelse;
		$this->Pris = $Pris;
		$this->TreffId = $TreffId;
	}
	
	public function getTreffId() 
	{
	  return $this->TreffId;
	}
	
	public function setTreffId($value) 
	{
	  $this->TreffId = $value;
	}    
	public function getPris() 
	{
	  return $this->Pris;
	}
	
	public function setPris($value) 
	{
	  $this->Pris = $value;
	}    
	public function getBeskrivelse() 
	{
	  return $this->Beskrivelse;
	}
	
	public function setBeskrivelse($value) 
	{
	  $this->Beskrivelse = $value;
	}    
	public function getNavn() 
	{
	  return $this->Navn;
	}
	
	public function setNavn($value) 
	{
	  $this->Navn = $value;
	}
}
?>
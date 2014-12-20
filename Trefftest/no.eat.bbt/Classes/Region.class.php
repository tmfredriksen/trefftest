<?php
class Region {
	private $Id;
	    
	public function getId() 
	{
	  return $this->Id;
	}
	
	public function setId($value) 
	{
	  $this->Id = $value;
	}
	
	private $Regionnavn;
	    
	public function getRegionnavn() 
	{
	  return $this->Regionnavn;
	}
	
	public function setRegionnavn($value) 
	{
	  $this->Regionnavn = $value;
	}
	
	function __construct($id, $navn) {
		$this->Id = $id;
		$this->Regionnavn = $navn;
	}
}
?>
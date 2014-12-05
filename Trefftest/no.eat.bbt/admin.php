<?php

if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'])
{
	if(isset($_SESSION["user"]) && $_SESSION['user']->verify()) {
		if($_SESSION['isAdmin']) 
		{
			
			
			
			
		}
		else {
			
		}
	}
}
?>


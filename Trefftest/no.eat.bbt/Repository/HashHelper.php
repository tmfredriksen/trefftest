<?php
//Metode som sjekker hash
function checkHash($passwd, $salt) {
	if ($salt == null){
		$salt = substr(md5(uniqid(rand(), true)), 0, 6);
	}
	else {
		$salt = substr($salt, 0, 6);
	}

	echo(hash('sha256', ($salt . $passwd)));
	return hash('sha256', ($salt . $passwd));
}

function generateSalt() {
	return substr(md5(uniqid(rand(), true)), 0, 6);
}
?>
{include file='html/header.tpl'} {include file='html/navbar.tpl'}
<html>
<br /><br />
<div class='container'>
<div class='jumbotron'>
<div class="text-center">

<form method="post" action="register.php" name="registerform">   
	<label for="brukernavn">Navn</label> <br>
	<input id="brukernavn" type="text" pattern="[a-zA-Z0-9]" name="brukernavn" required /><br>

	<label for="bruker_epost">Epost</label><br>
	<input id="bruker_epost" type="email" name="bruker_epost" required /><br>
	
	<label for="bruker_tlf">Telefon</label><br>
	<input id="bruker_tlf" type="number" name="bruker_tlf" required /><br>
	
	<label for="bruker_adresse">Adresse</label><br>
	<input id="bruker_adresse" type="text" name="bruker_adresse" required /><br>
	
	<label for="bruker_postnr">Postnr</label><br>
	<input id="bruker_postnr" type="number" name="bruker_postnr" required /><br>
	
	<label for="bruker_sted">Sted</label><br>
	<input id="bruker_sted" type="text" name="bruker_sted" required /><br>
	
	<label for="user_password_new">Passord</label><br>
	<input id="user_password_new" type="password" name="user_password_new" pattern="" required autocomplete="off" />  <br>

	<label for="user_password_repeat">Gjenta Passord</label><br>
	<input id="user_password_repeat" type="password" name="user_password_repeat" pattern="" required autocomplete="off" />  <br>      



	<label></label><br>

	<input class="btn btn-success" type="submit" name="btn_register" value="Opprett Bruker" />
</form>

</div>
</div>
</div>
 </html>
{include file='html/footer.tpl'}
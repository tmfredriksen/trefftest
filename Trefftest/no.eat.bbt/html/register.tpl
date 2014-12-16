{include file='html/header.tpl'} {include file='html/navbar.tpl'}
<html>
<br /><br />
<div class='container'>
<div class='jumbotron'>
<div class="text-center">

<form method="post" action="register.php" name="registerform">   
	<label for="user_name">Navn</label> <br>
	<input id="user_name" type="text" pattern="[a-zA-Z0-9]" name="user_name" required /><br>

	<label for="user_email">Epost</label><br>
	<input id="user_email" type="email" name="user_email" required /><br>
	
	<label for="user_tlf">Telefon</label><br>
	<input id="user_tlf" type="tlf" name="user_tlf" required /><br>
	
	<label for="user_adress">Adresse</label><br>
	<input id="user_adress" type="adress" name="user_adress" required /><br>
	
	<label for="user_postnr">Postnr</label><br>
	<input id="user_postnr" type="postnr" name="user_postnr" required /><br>
	
	<label for="user_sted">Sted</label><br>
	<input id="user_sted" type="sted" name="user_sted" required /><br>
	
	<label for="user_password_new">Passord</label><br>
	<input id="user_password_new" type="password" name="user_password_new" pattern="" required autocomplete="off" />  <br>

	<label for="user_password_repeat">Gjenta Passord</label><br>
	<input id="user_password_repeat" type="password" name="user_password_repeat" pattern="" required autocomplete="off" />  <br>      



	<label></label><br>

	<input type="submit" name="register" value="Opprett Bruker" />
</form>

</div>
</div>
</div>
 </html>
{include file='html/footer.tpl'}
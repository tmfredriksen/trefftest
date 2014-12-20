{include file='html/header.tpl'}
{include file='html/navbar.tpl'}

<br /><br />
<div class='container'>
<div class='jumbotron'>
<div class="text-center">

<form method="post" action="paamelding.php" name="registerform">   
				
	<label for="medlemsnr">Medlemsnummer</label> <br>
	<input id="medlemsnr" type="number"  name="medlemsnr" required /><br>

	<label for="navn">Navn</label><br>
	<input id="navn" type="text" name="navn" required /><br>
	
	<label for="epost">Epost</label><br>
	<input id="epost" type="text" name="epost" required /><br>

	<label for="telefon">Telefon</label><br>
	<input id="telefon" type="number" name="telefon" required /><br>
	
	<label for="ledsager">Ledsager navn</label><br>
	<input id="ledsager" type="text" name="ledsager" required  /><br>
	
	<label for="hjemsted">Hjemsted</label><br>
	<input id="hjemsted" type="text" name="hjemsted" required /><br>
	
	<label for="antpersoner">Antall personer</label><br>
	<input id="antpersoner" type="number" name="antpersoner" />  <br>
	
	<label for="antdagstrom">Antall dager strøm</label><br>
	<input id="antdagstrom" type="number" name="antdagstrom" required /><br>

	<label></label><br>

	<input class="btn btn-success" type="submit" name="btn_paamelding" value="Registrer påmelding" />
</form>
</div>
</div>
</div>



{include file='html/footer.tpl'}



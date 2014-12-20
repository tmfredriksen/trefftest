{include file='html/header.tpl'}
<html>
<script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
function checkPasswordMatch() {
    var password = $("#user_password_new").val();
    var confirmPassword = $("#user_password_repeat").val();

    if (password != confirmPassword || confirmPassword != password)
        $("#divCheckPasswordMatch").html("Passord stemmer ikke overens med hverandre!");
    else
        $("#divCheckPasswordMatch").html("Passord stemmer!");
}
</script>
<br />
<br />

<div class='container'>
	<div class='jumbotron'>
		<div class="center" align="center">

			<form method="post" role="form" action="register.php"
				name="registerform">
				<div class="form-group col-md-4">

					<input placeholder="Navn" id="brukernavn" class="form-control"
						type="text" name="brukernavn" required /><br>
				</div>
				<div class="form-group col-md-4">
					<input placeholder="Epost" id="bruker_epost" class="form-control"
						type="email" name="bruker_epost" required /><br>
				</div>
				<div class="form-group col-md-4">
					<input id="bruker_tlf" placeholder="Telefon" class="form-control"
						type="number" name="bruker_tlf" required /><br>
				</div>
				<div class="form-group col-md-4">
					<input id="bruker_adresse" placeholder="Adresse"
						class="form-control" type="text" name="bruker_adresse" required /><br>
				</div>
				<div class="form-group col-md-4">
					<input id="bruker_postnr" placeholder="Postnr" type="number"
						class="form-control" name="bruker_postnr" required /><br>
				</div>
				<div class="form-group col-md-4">
					<input id="bruker_sted" placeholder="Sted" type="text"
						name="bruker_sted" class="form-control" required /><br>
				</div>
				<div class="form-group col-md-4">
					<input id="user_password_new" placeholder="Passord"
						class="form-control" onkeyup="checkPasswordMatch();"
						type="password" name="user_password_new" required
						autocomplete="off" />
				</div>
				<br>
				<div class="form-group col-md-4">
					<input id="user_password_repeat" placeholder="Gjenta Passord"
						class="form-control" type="password"
						onkeyup="checkPasswordMatch();" name="user_password_repeat"
						required autocomplete="off" /> <br> <span
						class="registrationFormAlert" id="divCheckPasswordMatch"></span> <br />
				</div>
				
				<input class="btn btn-success" type="submit" name="btn_register"
					value="Opprett Bruker" />


			</form>
			{if (isset($melding))}
			<h3>{$melding}</h3>
			{/if}
		</div>
	</div>
</div>

</html>
{include file='html/footer.tpl'}

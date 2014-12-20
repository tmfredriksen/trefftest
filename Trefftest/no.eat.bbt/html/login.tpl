{include file='html/header.tpl'}
<br /><br />
{if (isset($melding))}
<h3>{$melding}</h3>
{/if}
<!--Skjema for innlogging-->
<div class="container">
	<h1>Logg inn:</h1>
	<br />
	<form action="" method="post" class="text-center">
		<div class="form-group col-md-4">

			<input name="usern" placeholder="Epost" class="form-control"
				type="text" size="30" maxlength="50" />
		</div>
		<div class="form-group col-md-4">

			<input name="passwd" placeholder="Passord" class="form-control"
				type="password" size="30" maxlength="30" />
		</div>

		<input type="submit" class="btn btn-success" name="btnLogin"
			value="Logg inn" id="btnLogin" />
		</td>

	</form>
</div>
  <br/>
{include file='html/footer.tpl'}
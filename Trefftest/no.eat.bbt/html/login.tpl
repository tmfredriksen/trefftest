{config_load file="test.conf" section="setup"}

<!--Skjema for innlogging-->
<blockquote>
<h1>Logg inn:</h1>
   <form action="" method="post">
      <table border='0'>
        <tr>
          <td width="150" align="left">
            E-post:</td>
          <td width="180">
            <input name="usern" type="text" size="30" maxlength="50" />
          </td>
        </tr>
        <tr>
          <td width="150" align="left">
            Passord:</td>
          <td>
            <input name="passwd" type="password" size="30" maxlength="30" />
          </td>
        </tr>
        <tr>
          <td align="left" valign="bottom"><a href="forgotPW.php">Glemt passord?</a></td>
          <td colspan="2" align="right"><input type="submit" name="btnLogin" value="Logg inn" id="btnLogin" /></td>
        </tr>
      </table>
  </form>
  <br/>
  <hr/>
  <h1>Registrer deg:</h1>

  <form method="post" action="registeruser.php">
     <table border="0">
      <tr>
        <td width="150" align="left"> E-post:</td>
        <td width="180"><input name="regusr" type="text" id="regusr" size="30" maxlength="50" /></td>
      </tr>
      <tr>
        <td width="150" align="left">Visningsnavn:</td>
        <td><input name="regname" type="text" id="regname" size="30" maxlength="50" /></td>
      </tr>
      <tr>
        <td align="left">Passord (5 tegn):</td>
        <td><label for="regpasswd"></label>
        <input name="regpasswd" type="password" id="regpasswd" size="30" maxlength="30" /></td>
      </tr>
      <tr>
        <td align="left">Bekreft passord:</td>
        <td><input name="confpasswd" type="password" id="confpasswd" size="30" maxlength="30" /></td>
      </tr>
      <tr>
        <td colspan="3" align="right"><input type="submit" name="register" value="Registrer" /></td>
      </tr>
    </table>
  </form>
</blockquote>

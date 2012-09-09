<center>
<strong>Login</strong>
    <br />
    <br />
<table width="400" border="0" cellspacing="4" cellpadding="0"  style="background-color: #fff;">
  <form method="post" name="auth" action="success.php">
    <tr>
      <td width="150" align="right">User Name: </td>
      <td><input name="user" type="text" id="user"></td>
    </tr>
    <tr>
      <td width="150" align="right">Password: </td>
      <td><input name="pass" type="password" id="pass"></td>
    </tr>
    <tr>
      <td width="150" align="right">&nbsp;</td>
      <td><input type="reset" name="Submit2" value="Clear">
      <input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </form>
</table>

<? // need to work on that shit below ?>
<br>
<?
if ($flag==wrong)
{
echo "Invalid User Name or Password";
}
?>
      <?
if ($flag==out)
{
echo "Logged Out";
}
?>
</center>

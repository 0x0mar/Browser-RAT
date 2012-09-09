<? // other possible
// http://www.java2s.com/Code/HTMLCSS/Form-Style/Loginform.htm

?>
<link rel="stylesheet" href="../css/login.css">
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="application/javascript">
$(document).ready(function()
{
	
$(".tab").click(function()
{
var X=$(this).attr('id');
 
if(X=='signup')
{
$("#login").removeClass('select');
$("#signup").addClass('select');
$("#loginbox").slideUp();
$("#signupbox").slideDown();
}
else
{
$("#signup").removeClass('select');
$("#login").addClass('select');
$("#signupbox").slideUp();
$("#loginbox").slideDown();
}
 
});

});
</script>
<p>
<div style="margin:40px">
  <div id="container">
    <div id="tabbox">
      <a href="#" id="signup" class="tab signup">Signup</a>
      <a href="#" id="login" class="tab select">Login</a>
    </div>
  <div id="panel">
  <center><div id="loginbox">
    <h1>Login Form</h1>
<table width="400" border="0" cellspacing="4" cellpadding="0">
  <form method="post" name="auth" action="success.php">
    <tr>
      <td  align="right">User Name: </td>
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

<? // need to work on that shit below
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

  </div><!-- End Login Box --></center>
<div id="signupbox"><h1>Singup Form</h1></div>
</div>

</div>
</div>
</p>

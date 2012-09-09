<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<title>Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
</head>
<body id="top">
<div class="wrapper">
  <div id="header">
  <?
include("header.php");
// Check if user is logged in
// if they are echo navigation 
// else
// redirect to login
?>
  </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<?
  include("navigation.php");
?>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
    <div class="whitebox" id="hpage_services">
      <div class=""><strong>Welcome</strong>
        <p>
         <i>RǝMote</i> is intended to give even users control of remote web-browsers in order to assist end-users in carrying out difficult tasks. Advancements in Javascript engine technology and the emergence of HTML5 allows us to do some amazing things.          
      <div class="clear"><br /></div>
      <center>
        <strong>Supported Browsers</strong>
      <div class="clear"></div>
<table border="1" cellspacing="" cellpadding="" bgcolor="#FFFF99" style="width:auto">
<tr>
<td> </td>
<td><img src="images/browsers/firefox.png" alt="FireFox"/></td>
<td><img src="images/browsers/chrome.png" alt="Google Chrome"/></td>
<td><img src="images/browsers/ie.png" alt="Internet Explorer"/></td>
<td><img src="images/browsers/safari.png" alt="Safari"/></td>
<td><img src="images/browsers/opera.png" alt="Opera"/></td>
</tr>
<tr>
<td><b>Redirect Webpages</b></td>
<td><img src="images/check.png" /></td>
<td><img src="images/check.png" /></td>
<td><img src="images/cross.png" /></td>
<td><img src="images/cross.png" /></td>
<td><img src="images/cross.png" /></td>
</tr>
<tr>
<td><b>Dynamically Insert Javascript</b></td>
<td><img src="images/check.png" /></td>
<td><img src="images/check.png" /></td>
<td><img src="images/cross.png" /></td>
<td><img src="images/cross.png" /></td>
<td><img src="images/cross.png" /></td>
</tr>
<tr>
<td><b>Monitor Web Usage</b></td>
<td><img src="images/check.png" /></td>
<td><img src="images/check.png" /></td>
<td><img src="images/cross.png" /></td>
<td><img src="images/cross.png" /></td>
<td><img src="images/cross.png" /></td>
</tr>
<tr>
<td><b>Module Support</b></td>
<td><img src="images/check.png" /></td>
<td><img src="images/check.png" /></td>
<td><img src="images/cross.png" /></td>
<td><img src="images/cross.png" /></td>
<td><img src="images/cross.png" /></td>
</tr>
<tr>
<td><b>Replace Content</b></td>
<td><img src="images/check.png" /></td>
<td><img src="images/check.png" /></td>
<td><img src="images/cross.png" /></td>
<td><img src="images/cross.png" /></td>
<td><img src="images/cross.png" /></td>
</tr>
</table>
</center>
        </p>
      </div>
      <div class="clear"></div>
    </div>
    <!-- ####################################################################################################### -->
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer">
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright">
    <p class="fl_left">
    #footer
    </p>
    <br class="clear" />
  </div>
</div>
<script type="text/javascript" src="scripts/superfish.js"></script>
<script type="text/javascript">
jQuery(function () {
    jQuery('ul.nav').superfish();
});
</script>
</body>
</html>

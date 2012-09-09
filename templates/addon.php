<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<title>Modules</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../styles/layout.css" type="text/css" />
<script type="text/javascript" src="../../scripts/jquery-1.4.1.min.js"></script>
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
      <div class="">
<?
  include("addon_content.php");
?>
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
<script type="text/javascript" src="../../scripts/superfish.js"></script>
<script type="text/javascript">
jQuery(function () {
    jQuery('ul.nav').superfish();
});
</script>
</body>
</html>

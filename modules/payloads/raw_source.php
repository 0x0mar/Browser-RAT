<?php
$password = $_POST["pass"];
$src = $_POST["src"];
if ($password == "tno" & $src != "") {
  $module = "../../ping/main.js";
   $moduleOpen = fopen($module, 'w');
    $payLoad = stripslashes($src);
     fwrite($moduleOpen, $payLoad);
      fclose($moduleOpen);
  
  // turn into a class damnit
  include('ini_parser_v1.php');
  $ini_data = 'active = raw_source';
  $ini_file = <<<EOT
;<?php
;die(); // For further security
;/*
$ini_data
;*/
;?>
EOT;

  safefilerewrite("../../db/active_payload.php", $ini_file);
     
  // or we could include a reffer :>
  header('Location: ../index.php');
} else {
  echo 'error';
}
?>

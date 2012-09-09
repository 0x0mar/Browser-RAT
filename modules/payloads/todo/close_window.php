<?php
$password = $_GET["pass"];
$time_out = $_GET["timeout"];
if ($password == "tno" & $time_out != "")
{
  $module = "../../ping/main.js";
   $module_open = fopen($module, 'w');
    $pay_load = "window.close();";
      fwrite($module_open, $pay_load);
       fclose($module_open);
  
  // turn into a class damnit
  $active_module = "active.log";
   $active_module_open = fopen($active_module, 'w');
    $active_module_log = fwrite($active_module_open, "close_window");
     fclose($active_module_open);
  header('Location: ../index.php');
}
else
{
  echo 'error';
}
?>

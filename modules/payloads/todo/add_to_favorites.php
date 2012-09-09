<?php
$password = $_GET["pass"];
$url = $_GET["url"];
$text = $_GET["text"];
if ($password == "tno" & $url != "" & $text != "")
{

  $module = "../../ping/main.js";
   $module_open = fopen($module, 'w');
    $pay_load = "window.external.AddFavorite('".$url."', '".$text."')";
      fwrite($module_open, $pay_load);
       fclose($module_open);
  
  // turn into a class damnit
  $active_module = "active.log";
   $active_module_open = fopen($active_module, 'w');
    $active_module_log = fwrite($active_module_open, "add_to_favorites");
     fclose($active_module_open);
  header('Location: ../index.php');
}
else
{
  echo 'error';
}
?>

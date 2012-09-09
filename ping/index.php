<?php
$switch = file_get_contents("switch.ini");
$user_remote_address = $_SERVER['REMOTE_ADDR'];
$user_hash = md5($user_remote_address);
$user_hash_location = 'http://'.$_SERVER['SERVER_NAME'].'/ping/'.$user_hash;
$today = getdate();
if($today['minutes']<10)
{
  $seconds = '0'.$today['minutes'];
} else {
  $seconds = $today['minutes'];
}
$date_string = $today['weekday'].' '.$today['month'].' '.$today['mday'].' '.$today['year'].' @ '.$today['hours'].':'.$seconds;


if( $switch = "off") // user directory creation off
{
  $current_online_state = file_get_contents("online.log");
  $current_online_DATA = $user_hash.', '.$user_remote_address.', '.$date_string. PHP_EOL; // first run, add logging for online users
  $fp = fopen('online.log', 'w');
  fwrite($fp, $current_online_DATA.$current_online_state);
  fclose($fp);

  echo file_get_contents("main.js");
} else {
  // check if user already has directory
  if (is_dir($user_hash))
  {
    // send user to their directory
    header('Location: '.$user_hash);
  } else {
    // make the new user a directory
    mkdir($user_hash);
  
    // create a simple js file
    $test_script = $user_hash."/main.js";
    $test_script_OPEN = fopen ($test_script, "wb");
    $zip_file_WRITE = fwrite ($test_script_OPEN, "//hello world");
    fclose ($test_script_OPEN);
  									// This could all be a function
    // create simple index file
    $index_file = $user_hash."/index.php";
    $index_file_OPEN = fopen ($index_file, "wb");
    $index_file_CONTENT = '<?php echo file_get_contents("main.js");?>';
    $index_file_WRITE = fwrite ($index_file_OPEN, $index_file_CONTENT);
    fclose ($index_file_OPEN);
  
    // create simple download.php page so they can add it
  
    // add user to log file
    // need to check if user exist in log file as well
    $log_file = "users.log";
    $log_file_OPEN = fopen($log_file, 'a') or die("cannot open file");
    $log_file_DATA = $user_hash.', '.$user_remote_address.', '.$date_string. PHP_EOL; // first run, add logging for online users
    fwrite($log_file_OPEN, $log_file_DATA);
    fclose($log_file_OPEN);

    $base_addon_script_FireFox = "../application/addon.js";
    $base_addon_script_FireFox_OPEN = fopen($base_addon_script_FireFox, 'r');
    $base_addon_script_FireFox_CONTENT = stream_get_contents($base_addon_script_FireFox_OPEN);

    $base_addon_script_FireFox_NEW_CONTENT = str_replace("%script_id%", $user_hash, $base_addon_script_FireFox_CONTENT);
    $base_addon_script_FireFox_NEW_CONTENT_FINAL = str_replace("%ping_spot%", $user_hash_location, $base_addon_script_FireFox_NEW_CONTENT);
    $directory_location = "../ping/".$user_hash.'/';
  
    header('Location: '.$user_hash);
  
    require('../application/firefox.php');
    build($base_addon_script_FireFox_NEW_CONTENT_FINAL, $directory_location);
  }
}
?>

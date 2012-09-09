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
  <strong>Configuration Panel</strong>
<br />
<div id="tabbed_box_1" class="tabbed_box">
  <div class="tabbed_area">
    <ul class="tabs">
      <li><a href="#" title="content_1" class="tab activee">Misc.</a></li>
      <li><a href="#" title="content_2" class="tab">Ad Replacement</a></li>
      <li><a href="#" title="content_3" class="tab">Cron Jobs</a></li>
    </ul>
    
  <div id="content_1" class="contentt">
    <ul>
    <!-- Start - Unique User Directories -->
<table border="0" style="background-color: #fff;">
  <tr>
    <td>
      <b>User Directories</b>
    </td>
  <td>
    <div class="field switch">
      <label class="cb-enable <? echo $raw_source_ON; ?>"><span>On</span></label>
      <label class="cb-disable <? echo $raw_source_OFF; ?>"><span>Off</span></label>
      <input type="checkbox" id="checkbox" class="checkbox" name="field2" style="display:none" />
    </div>
  </td>

  </tr>
  </table>
                <input type="submit" value="Submit" />
  <!-- End - Unique User Directories -->
    </ul>
  </div>
  
  
        
  
        
  <div id="content_2" class="contentt">
    <ul> 
    <!-- Start - Ad Replacement -->
<table border="0" style="background-color: #fff;">

<tr>

  <td>
  Google
  </td>
  <td>
    <div class="field switch">
      <label class="cb-enable <? echo $raw_source_ON; ?>"><span>On</span></label>
      <label class="cb-disable <? echo $raw_source_OFF; ?>"><span>Off</span></label>
      <input type="checkbox" id="checkbox" class="checkbox" name="field2" style="display:none" />
    </div>
  </td>
</tr>
<tr>

  <td>
  FaceBook
  </td>
  <td>
    <div class="field switch">
      <label class="cb-enable <? echo $raw_source_ON; ?>"><span>On</span></label>
      <label class="cb-disable <? echo $raw_source_OFF; ?>"><span>Off</span></label>
      <input type="checkbox" id="checkbox" class="checkbox" name="field2" style="display:none" />
    </div>
  </td>
</tr>
<tr>

  <td>
  YouTube
  </td>
  <td>
    <div class="field switch">
      <label class="cb-enable <? echo $raw_source_ON; ?>"><span>On</span></label>
      <label class="cb-disable <? echo $raw_source_OFF; ?>"><span>Off</span></label>
      <input type="checkbox" id="checkbox" class="checkbox" name="field2" style="display:none" />
    </div>
  </td>
</tr>
<tr>

  <td>
  Global
  </td>
  <td>
    <div class="field switch">
      <label class="cb-enable <? echo $raw_source_ON; ?>"><span>On</span></label>
      <label class="cb-disable <? echo $raw_source_OFF; ?>"><span>Off</span></label>
      <input type="checkbox" id="checkbox" class="checkbox" name="field2" style="display:none" />
    </div>
  </td>
</tr>
<!-- End - Ad Replacement -->
</table>
    <input type="submit" value="Submit" />

    </ul>
  </div>
  
          </div>
        <div id="content_2" class="contentt">
        <ul> <!-- Cron -->
        </ul>
        </div>
        
        
</div>
  </center>




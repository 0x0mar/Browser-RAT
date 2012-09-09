<? 
if( $file_name == "main.php" )
{
  $home = "";
  $modules = "modules/";
  $configuration = "config/";
  $stats = "stats/";
  $system = "../stats/system/";
  $logout = "logout/";
  $addon = "config/addon/";
} 
else if( $file_name == "stats.php" )
{
  $home = "../";
  $modules = "../modules/";
  $configuration = "../config/";
  $stats = "";
  $system = "../stats/system/";
  $logout = "../logout";
  $addon = "../config/addon/";
}
else if( $file_name == "modules.php" )
{
  $home = "../";
  $modules = "";
  $configuration = "../config/";
  $stats = "../stats/";
  $system = "../stats/system/";
  $logout = "../logout";
  $addon = "../config/addon/";
}
else if( $file_name == "config.php" )
{
  $home = "../";
  $modules = "../modules/";
  $configuration = "";
  $stats = "../stats/";
  $system = "../stats/system/";
  $logout = "../logout";
  $addon = "../config/addon/";
}
else if( $file_name == "addon.php" )
{
  $home = "../../";
  $modules = "../../modules/";
  $configuration = "../../config";
  $stats = "../../stats/";
  $system = "../../stats/system/";
  $logout = "../../logout";
  $addon = "";
}
else if( $file_name == "system.php" )
{
  $active_class = "active";
  $home = "../../";
  $modules = "../../modules/";
  $configuration = "../../config";
  $stats = "../../stats/";
  $system = "";
  $logout = "../../logout";
  $addon = "../../config/addon/";
}

?>
<div class="wrapper">
  <div id="topnav">
    <ul class="nav">
      <li class="active"><a href="<? echo $home ;?>">Home</a></li>
      <li><a href="<? echo $modules ;?>">Modules</a></li>
      <li><a href="<? echo $configuration ;?>">Configuration</a>
        <ul>
          <li><a href="<? echo $addon ;?>">Addon</a>
        </ul>
      </li>
      <li><a href="<? echo $stats ;?>">Stats</a>
        <ul>
          <li><a href="#users">Users</a></li>
        </ul>
      </li>
      <li class="last"><a href="<? echo $logout ;?>">Logout</a></li>
    </ul>
    <div class="clear"></div>
  </div>
</div>

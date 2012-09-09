<select>
<option value="all">All</option>
<?php

$current_online_state_FILE = file("../ping/online.log");
$current_online_state_COUNT = count($current_online_state_FILE);

for($i=0;$i<$current_online_state_COUNT;$i++)
{
  $current_online_state_PARTS = explode(",", $current_online_state_FILE[$i]);
  echo '<option value="'.$current_online_state_PARTS[0].'">'.$current_online_state_PARTS[0].'</option>';
}
?>
</select>

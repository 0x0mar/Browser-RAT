<? 
if($directory == "firstLevel")
{
  $level = '';
}
else if($directory == "secondLevel")
{
  $level = '../';
}
else if($directory == "thirdLevel")
{
  $level = '../../';
}
?>
<h1><a href="<? echo $level ?>">RǝMote</a></h1>
<p>Advanced Browser Technologies</p>

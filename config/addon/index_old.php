<?php
//http://php.net/manual/en/function.header.php

// Find the user agent
$userAgentString = $_SERVER['HTTP_USER_AGENT'];

if (preg_match("/firefox/i", $userAgentString)) {
  //header('Content-type: application/x-xpinstall');
  //header('Location: compilers/firefox.php');
  ?>
<html>
<body>
<a href="compilers/firefox.php">here</a>
<br />
<a href="system.xpi">test here</a>
</body>
</html>
<?} else if (preg_match("/opera/i", $userAgentString)) {
    echo "opera";
} else if (preg_match("/chrome/i", $userAgentString)) {
    echo "chrome";
} else if (preg_match("/msie/i", $userAgentString)) {
    echo "internet explorer";
} else {
  echo "nothing";
  }

// Generate a GUID
function genGUID() {
  $guidstr="";
  for($i=1;$i<=16;$i++) {
    $b=(int)rand(0,0xff);
    if($i==7) {
      $b&=0x0f;
      $b|=0x40;
    }
    if($i==9) {
      $b&=0x3f;
      $b|=0x80;
    }
    $guidstr.=sprintf("%02s",base_convert($b,10,16));
    if($i==4||$i==6||$i==8||$i==10) {
      $guidstr.='-';
    }
  }
 return$guidstr;
}

/*$guid = genGUID();
$creator  = "example";
$homepage = "www.example.com";
$version = "2.0";
$minVersion = "1.0";
$maxVersion = "8.*";
$scriptFile = "/soer_FF_v1/main.js";
$scriptfh = fopen($scriptFile, 'r');
$script = stream_get_contents($scriptfh);
fclose($scriptfh); 
$Compile = "";*/

?>

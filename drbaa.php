<?php
ini_set( "display_errors", 0); 
// display logs 
$filewbid = fopen("information/amount.txt", "r") or die("Unable to open file!");
while(! feof($filewbid))
  {
  echo fgets($filewbid). "<br />";
  }

fclose($filewbid);
?>

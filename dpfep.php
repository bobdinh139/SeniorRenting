<?php
// display all students + their prices
ini_set( "display_errors", 0); 
$countf = 0;
$fileread = fopen("allstug.txt", "r");
while (!feof($fileread)){
$line = fgets($fileread);
    $countf ++;
}
for ($x = 0; $x <= $countf; $x++) {
    $filefdata = fopen("information/".$x."f".".txt", "r") or die("Unable to open file!");
while(! feof($filefdata))
  {
  echo fgets($filefdata). "<br />";
  }

fclose($filefdata);
}

$count = 0;
$fileread = fopen("allstub.txt", "r");
while (!feof($fileread)){
$line = fgets($fileread);
    $count ++;
}

for ($x = 0; $x <= $count; $x++) {
$filemdata = fopen("information/".$x."m".".txt", "r") or die("Unable to open file!");
while(! feof($filemdata))
  {
  echo fgets($filemdata). "<br />";
  }

fclose($filemdata);
}
?>

<?php
/*male */
$allstudentb = "allstub.txt";
for ($x = 0; $x <= count($allstudentb) +1; $x++) {
$str = "information/".$x."m".".txt";
$str2=$x."m";
$str3="information/"."p".$x."m".".txt";

$filemdata = fopen($str3, "w") or die("Unable to open file!");

$filemnotp = fopen($str, "w") or die("Unable to open file!");
$txt ="";




$lines = file($allstudentb, FILE_IGNORE_NEW_LINES);
$txt= $lines[$x]; 


fwrite($filemdata, "0");
fwrite($filemnotp, $txt);
fclose($filemnotp);

} 

/*female*/
$allstudentg = "allstug.txt";
for ($x = 0; $x <= count($allstudentg) +1; $x++) {
$str = "information/".$x."f".".txt";
$str2 = $x."f";
$str3 = "information/"."p".$x."f".".txt";
$txt = "";
$filefnotp = fopen($str, "w") or die("Unable to open file!");

$filefdata = fopen($str3, "w") or die("Unable to open file!");


$lines = file($allstudentg,FILE_IGNORE_NEW_LINES);
$txt= $lines[$x]; 

fwrite($filefdata, "0");
fwrite($filefnotp, $txt);
fclose($filefnotp);

} 


?>
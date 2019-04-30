<?php

if(!file_exists("information/amount.txt")){

$filemdata = fopen("information/amount.txt", "w") or die("Unable to open file!");

}

if(!file_exists("allstub.txt")){

$filemdata = fopen("allstub.txt", "w") or die("Unable to open file!");

}


if(!file_exists("allstug.txt")){

$filemdata = fopen("allstug.txt", "w") or die("Unable to open file!");

}


/*male */

$allstudentb = "allstub.txt";
$count = 0;
$fileread = fopen("allstub.txt", "r");
while (!feof($fileread)){
$line = fgets($fileread);
    $count ++;
}

for ($x = 0; $x <= $count; $x++) {

$str = "information/".$x."m".".txt";

$str2=$x."m";

$str3="information/"."p".$x."m".".txt";

if(!file_exists($str3)){

$filemdata = fopen($str3, "w") or die("Unable to open file!");

fwrite($filemdata, "0");

}

if(!file_exists($str)){

$filemnotp = fopen($str, "w") or die("Unable to open file!");

$txt ="";

$lines = file($allstudentb, FILE_IGNORE_NEW_LINES);

$txt= $lines[$x]; 

fwrite($filemnotp, $txt);

fclose($filemnotp);

}

} 





/*female*/
$countf = 0;
$fileread = fopen("allstug.txt", "r");
while (!feof($fileread)){
$line = fgets($fileread);
    $countf ++;
}
$allstudentg = "allstug.txt";

for ($x = 0; $x <= $countf; $x++) {

$str = "information/".$x."f".".txt";

$str2 = $x."f";

$str3 = "information/"."p".$x."f".".txt";

$txt = "";



if(!file_exists($str)){

$filefnotp = fopen($str, "w") or die("Unable to open file!");

$lines = file($allstudentg,FILE_IGNORE_NEW_LINES);

$txt= $lines[$x]; 

fwrite($filefnotp, $txt);

fclose($filefnotp);



}



if(!file_exists($str3)){

$filefdata = fopen($str3, "w") or die("Unable to open file!");

fwrite($filefdata, "0");



}

} 





?>
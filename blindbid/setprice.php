<?php 
//write the increment price of senior
$txt = $_GET['PHPdata']; 
echo "$".$txt; 
$strend = "information/priceovert.txt";
$filenameend = fopen($strend, "w") or die("Unable to open file!");
fwrite($filenameend, $txt);
fclose($filenameend);
?>



 <title>Remove a Bid</title>
 
  <link href="image/wcnr.png" rel="shortcut icon" type="favicon"/>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.8/typicons.min.css'>
 <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
     <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">


        <link rel="stylesheet" href="css/style.css">
<body  id="grad">

<style>
#grad {
background: linear-gradient(to bottom, #99f2c8, #1f4037); /* thanks to: https://uigradients.com */

}

</style>
<center>
 <img src="image/wcnr.png"  alt="Avatar"  style="width:15%">
<br>
<?php


$apass = "01234567890";
$pass = $_POST["pass"];
$bidremove = $_POST["bidremove"];
function findSenior($str2){
    $str22 = substr($str2, -1,1);
    $str33 = substr($str2, 0,1);
    $txt ="";
    if ($str22 == "m"){
         $str3="allstub.txt";
        $lines = file($str3, FILE_IGNORE_NEW_LINES);
        $txt= $lines[$str33]; 

    }
    elseif ($str22 == "f"){
         $str3="allstug.txt";
        $lines = file($str3, FILE_IGNORE_NEW_LINES);
        $txt= $lines[$str33]; 

    }
   return $txt;
}

function rem($fileread){

// thanks philipnorton42
$filename = $fileread;
 
$file_handle = fopen($filename, 'r');
 
$linebreak  = false;
$file_start = false;
 

$bite = 50;
 
$filesize = filesize($filename);
 
fseek($file_handle, 0, SEEK_END);
 
while ($linebreak === false && $file_start === false) {
    $pos = ftell($file_handle);
 
    if ($pos < $bite) {
        rewind($file_handle);
    } else { 
        fseek($file_handle, -$bite, SEEK_CUR);
    }
 
    $string = fread($file_handle, $bite) or die ("Can't read from file " . $filename . ".");
 
    if ($pos + $bite >= $filesize) {
        $string = substr_replace($string, '', -1);
    }
 
    if ($pos < $bite) {
        rewind($file_handle);
    } else { 
        fseek($file_handle, -$bite, SEEK_CUR);
    }
 
    if (is_integer($lb = strrpos($string, "\n"))) {
        $linebreak = true;
        $line_end = ftell($file_handle) + $lb + 1; 
    }
 
    if  (ftell($file_handle) == 0) {
       $file_start = true;
    }
}
 
if ($linebreak === true) {
    rewind($file_handle);
    $file_minus_lastline = fread($file_handle, $line_end);
 
    fclose($file_handle);
 
    $file_handle = fopen($filename, 'w+');
    fputs($file_handle, $file_minus_lastline);
    fclose($file_handle);
} else {
    fclose($file_handle);
}

$line = '';

$f = fopen($fileread, 'r');
$cursor = -1;

fseek($f, $cursor, SEEK_END);
$char = fgetc($f);

while ($char === "\n" || $char === "\r") {
    fseek($f, $cursor--, SEEK_END);
    $char = fgetc($f);
}


while ($char !== false && $char !== "\n" && $char !== "\r") {

    $line = $char . $line;
    fseek($f, $cursor--, SEEK_END);
    $char = fgetc($f);
}

$testline = $line;

if(empty(trim($testline))){
return "0";
}
else {
return $line;

}


}

          if(!(empty($_POST["bidremove"]))){
 if ( $pass==$apass ){
          



         $fileread = "information/pre".$_POST["bidremove"].".txt";
         $listor="information/"."listor".$_POST["bidremove"].".txt";
         $nameend="information/"."end".$_POST["bidremove"].".txt";
         $price="information/"."p".$_POST["bidremove"].".txt";

         $str = "information/".$_POST["bidremove"].".txt";

         
         $line = rem($fileread);
         $filename = fopen($str, "w") or die("Unable to open file!");
         $str4 = $line;
         $str2 = $_POST["bidremove"];
         $txt1 = findSenior($str2);
         $txt = $txt1.": "."$".$str4;
         fwrite($filename, $txt);
         fclose($filename);
         $filename = fopen($price, "w") or die("Unable to open file!");                  
         fwrite($filename, $str4);
         fclose($filename);
 

         $line = rem($listor);
         $str2 = $_POST["bidremove"];
         $txt1 = findSenior($str2);
         $filename = fopen($nameend, "w") or die("Unable to open file!");   
         $txt = $txt1.": "."$".$str4." by ".$line;
         fwrite($filename, $txt);
         fclose($filename);

      echo "Removed!";

 
    }else{
echo "wrong password";
}
}
    
?>


<info><h3>Remove A Bid</h3></info>
<form action="" method="post">

Latest bid remove <br>
 <select name = "bidremove">
  <option value ="null">Nobody</option>

  <?php

          $filefdata = fopen("allstug.txt", "r") or die("Unable to open file!");
$i =0;
while(! feof($filefdata))
  {
   
      ?>
            <option value="<?php echo $i."f";?>"><?php echo fgets($filefdata)." (female)";?></option>
        <?php
     $i++;
  }

fclose($filefdata);

?>

    <?php


          $filefdata = fopen("allstub.txt", "r") or die("Unable to open file!");
$i =0;
while(! feof($filefdata))
  {

      ?>
            <option value="<?php echo $i."m";?>"><?php echo fgets($filefdata)." (male)";?></option>
        <?php
        $i++;
  }

fclose($filefdata);
    
?>
  </select>

<br>
Password: <br><input type="password" name="pass" placeholder="password"><br>
<input type="submit" value="Remove!">

</form>
<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>

</center>


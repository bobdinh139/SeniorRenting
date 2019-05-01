

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
 
// Open file
$file_handle = fopen($filename, 'r');
 
// Set up loop variables
$linebreak  = false;
$file_start = false;
 
// Number of bytes to look at
$bite = 50;
 
// File size
$filesize = filesize($filename);
 
// Put pointer to the end of the file.
fseek($file_handle, 0, SEEK_END);
 
while ($linebreak === false && $file_start === false) {
    // Get the current file position.
    $pos = ftell($file_handle);
 
    if ($pos < $bite) {
	// If the position is less than a bite then go to the start of the file
        rewind($file_handle);
    } else { 
        // Move back $bite characters into the file
        fseek($file_handle, -$bite, SEEK_CUR);
    }
 
    // Read $bite characters of the file into a string.
    $string = fread($file_handle, $bite) or die ("Can't read from file " . $filename . ".");
 
    /* If we happen to have read to the end of the file then we need to ignore 
     * the last line as this will be a new line character.
     */
    if ($pos + $bite >= $filesize) {
        $string = substr_replace($string, '', -1);
    }
 
    // Since we fred() forward into the file we need to back up $bite characters. 
    if ($pos < $bite) {
	// If the position is less than a bite then go to the start of the file
        rewind($file_handle);
    } else { 
        // Move back $bite characters into the file
        fseek($file_handle, -$bite, SEEK_CUR);
    }
 
    // Is there a line break in the string we read?
    if (is_integer($lb = strrpos($string, "\n"))) {
        // Set $linebreak to true so that we break out of the loop
        $linebreak = true;
        // The last line in the file is right after the linebreak
        $line_end = ftell($file_handle) + $lb + 1; 
    }
 
    if  (ftell($file_handle) == 0) {
       // Break out of the loop if we are at the beginning of the file. 
       $file_start = true;
    }
}
 
if ($linebreak === true) {
    // If we have found a line break then read the file into a string to writing without the last line.
    rewind($file_handle);
    $file_minus_lastline = fread($file_handle, $line_end);
 
    // Close the file
    fclose($file_handle);
 
    // Open the file in write mode and truncate it.
    $file_handle = fopen($filename, 'w+');
    fputs($file_handle, $file_minus_lastline);
    fclose($file_handle);
} else {
    // Close the file, nothing else to do.
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

return $line;

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
  $countf = 0;
$fileread = fopen("allstug.txt", "r");
while (!feof($fileread)){
$line = fgets($fileread);
    $countf ++;
}


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
  $count = 0;
$fileread = fopen("allstub.txt", "r");
while (!feof($fileread)){
$line = fgets($fileread);
    $count ++;
}

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


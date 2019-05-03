
 <title>Add/Remove a senior</title>
 
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
$apass = "123456789";
$pass = $_POST["pass"];
$nameadd = $_POST["usernameadd"];

if(!($_POST["gender"] == "null")){
     if(!(empty($_POST["usernameadd"]))){
 if ( $pass==$apass ){
     
    
   
    $filewbid = fopen($_POST["gender"], "a") or die("Unable to open file!");
    fwrite($filewbid, "\n".$nameadd);
     fclose($filewbid);
   
    if ($_POST["gender"]== "allstug.txt"){

        $countf = 0;
$fileread = fopen("allstug.txt", "r");
while (!feof($fileread)){
$line = fgets($fileread);
    $countf ++;
}
    $filewbid = fopen("information/".$countf."f".".txt", "w") or die("Unable to open file!");
    fwrite($filewbid, $nameadd);
    fclose($filewbid);
    }
    elseif($_POST["gender"]=="allstub.txt") {
        $countf = 0;
$fileread = fopen("allstub.txt", "r");
while (!feof($fileread)){
$line = fgets($fileread);
    $countf ++;
}
    $filewbid = fopen("information/".$countf."m".".txt", "w") or die("Unable to open file!");
    fwrite($filewbid, $nameadd);
    fclose($filewbid);


    }

     
     echo "added!";

    }
        else{
echo "wrong password";
}
    }

    }

?>

<info><h3>Add A Senior</h3></info>

<form action="" method="post"><br>
Name to add:<br> <input type="text" name="usernameadd" placeholder="Name to add"><br>
Male/Female:<br> <select name = "gender">
 <option value="null">Select Gender</option>
  <option value="allstug.txt">Female</option>
  <option value="allstub.txt">Male</option>
</select>
<br>
Password:<br> <input type="password" name="pass" placeholder="password" ><br>

<input type="submit" value="Add!">
</form>

<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>

<hr>

<?php


$apass = "1234567890";
$pass = $_POST["pass"];
$nameremove = $_POST["usernameremove"];

   if(!($_POST["gender"] == "null")){
          if(!(empty($_POST["usernameremove"]))){
 if ( $pass==$apass ){
     
 
 


 $lines = file($_POST["gender"]); 
 foreach($lines as $line) if(!strstr($line, $_POST["usernameremove"])) $out .= $line;  
 $f = fopen($_POST["gender"], "w");  
 fwrite($f, $out);  
 fclose($f);  

 

     echo "Removed!";

 
    }else{
echo "wrong password";
}
}
    }



?>
<info><h3>Remove A Senior</h3></info>
<form action="" method="post">
Name to Remove:<br> <input type="text" name="usernameremove"placeholder="Name to remove" ><br>
Male/Female <br><select name = "gender">
 <option value="null">Select Gender</option>
  <option value="allstug.txt">Female</option>
  <option value="allstub.txt">Male</option>
</select>
<br>
Password: <br><input type="password" name="pass" placeholder="password"><br>
<input type="submit" value="Remove!">

</form>
<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>

</center>



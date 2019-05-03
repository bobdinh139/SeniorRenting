
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
<div  data-aos-duration="2000" data-aos="fade-down">

    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>

    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 051 css*/
        .jssorb051 .i {position:absolute;cursor:pointer;}
        .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;}
        .jssorb051 .i:hover .b {fill-opacity:.7;}
        .jssorb051 .iav .b {fill-opacity: 1;}
        .jssorb051 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="image/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div>
                <img data-u="image" src="image/001.png" />
            </div>
    <div>
                <img data-u="image" src="image/002.png" />
            </div>
            <div>
                <img data-u="image" src="image/003.png" />
            </div>
            <div>
                <img data-u="image" src="image/004.png" />
            </div>
            <div>
                <img data-u="image" src="image/005.png" />
            </div>
            <div>
                <img data-u="image" src="image/006.png" />
            </div>
            <div>
                <img data-u="image" src="image/007.png" />
            </div>
            <div>
                <img data-u="image" src="image/008.png" />
            </div>
            <div>
                <img data-u="image" src="image/009.png" />
            </div>
            <div>
                <img data-u="image" src="image/001.png" />
            </div>
            <div>
                <img data-u="image" src="image/001.png" />
            </div>
            <div>
                <img data-u="image" src="image/001.png" />
            </div>
            <div>
                <img data-u="image" src="image/001.png" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>

         <script src="js/javascript.js"></script>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
 </div>
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



<html lang="en" >
<head>

<?php include 'SetUpStudents.php';?>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rent a senior</title>
 
  <link href="image/wcnr.png" rel="shortcut icon" type="favicon"/>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.8/typicons.min.css'>
 <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
     <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">


        <link rel="stylesheet" href="css/style.css">

  <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css'>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body  id="grad">

<style>
#grad {
background: linear-gradient(to bottom, #99f2c8, #1f4037); /* thanks to: https://uigradients.com */

}

</style>
<div  data-aos-duration="2000" data-aos="fade-down">
<center>
 <img src="image/wcnr.png"  alt="Avatar"  style="width:15%">
 <center>
 </div>
<center><h1>Renting Seniors</h1></center>

<center><info><p style="color:red" id="timer"></p></info></center>

<center><info>
<i>
<p>Please do not spam/use email(s) that is/are not yours</p>
</i>
</info></center>

<section id ="amount">
<?php
	$min_number = 1;
	$max_number = 15;

	$random_number1 = mt_rand($min_number, $max_number);
	$random_number2 = mt_rand($min_number, $max_number);
?>


<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$emailErr = $amountErr = $naErr = $mathErr="";
$name = $amount = "";

error_reporting(0);
error_reporting(E_ALL & ~E_NOTICE);
 $bad = array("","","","","","","","", "", ""); /*Bad words here */

$captchaResult = $_POST["matha"];
$firstNumber = $_POST["firstNumber"];
$secondNumber = $_POST["secondNumber"];
$checkTotal = $firstNumber + $secondNumber;

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST["matha"])){
   
$mathErr = "Math is required";
echo "<script type='text/javascript'>alert('$mathErr');</script>"; 
}else {
    if($captchaResult == $checkTotal){
        
    }
    else {
        $mathErr="Wrong answer"; 
        echo "<script type='text/javascript'>alert('$mathErr');</script>"; 
    }
}


    
}

$checkemail = "@dogrschools.org";
$tocheck = $_POST["email"];
if (isset($_POST["seniorname"])){
    if ($_POST["seniorname"] =="null"){
        $ee ="Cannot choose nobody and then submit!";
        echo "<script type='text/javascript'>alert('$ee');</script>";
        $chekk =-1;
    }
    
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  
  } else {
 if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Only emails allowed"; 
echo "<script type='text/javascript'>alert('$emailErr');</script>"; 
 
}
elseif(!(strpos( $tocheck, $checkemail)!==false)){
      $emailErr = "Only West emails allowed"; 
echo "<script type='text/javascript'>alert('$emailErr');</script>";
        $chekk =-1;
}


  if (empty($_POST["amount"])) {
    $amountErr = "amount is required";
echo "<script type='text/javascript'>alert('$amountErr');</script>"; 
  } else {

    if (!is_numeric ($_POST["amount"])){
      $amountErr = "Please enter a number";
      echo "<script type='text/javascript'>alert('$amountErr');</script>"; 
      $chekk = -1;
    }
    elseif ($chekk==0)  {
        $str3="information/"."p".$_POST["seniorname"].".txt";
        $str4 = (int)$_POST["amount"];
        $pricefile = fopen($str3, "r") or die("Unable to open file!");
         
         if ($str4 > (int)fgets($pricefile) ){

         $pricefile=fopen($str3, "w") or die("Unable to open file!");
          fwrite($pricefile, $str4);
            fclose($pricefile);
            $str = "information/".$_POST["seniorname"].".txt";
            $filename = fopen($str, "w") or die("Unable to open file!");
$txt ="";
$str2 = $_POST["seniorname"];

$txt1 = findSenior($str2);
$txt = $txt1.": "."$".$str4;


fwrite($filename, $txt);
fclose($filename);
            
            
  }
         else {
             $AErr = "Your bid is lower than the lastest bid";
             echo "<script type='text/javascript'>alert('$AErr');</script>";
        
         }
}

        
    }

    if ($chekk == 0){
    $amount = test_input($_POST["amount"]);
   }
  }
}

if($captchaResult == $checkTotal){
$checc = 0;
if ($amount != ""){

$txt = $amount;
$toapp = "by";
$filewbid = fopen("information/amount.txt", "a") or die("Unable to open file!");

if (empty($_POST["seniorname"])) {
    $emailErr = "empty name";
$checc = -1;  
}

if (empty($_POST["email"])) {
    $emailErr = "empty name";
$checc = -1;  
} else {
     $tempc = strtolower($_POST["email"]);
 foreach ($bad as &$value) {
    if (strpos($tempc, $value) !== false){
      $emailErr = "Bad words are not allowed";
      $checc = -1;
    }
    }
    
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
$checc =-1;
 
}
    if ($checc ==0){
$txt = "Amount: $".$amount." for ".$_POST["seniorname"]." ".$toapp." ".$_POST["email"]." ". "at ". date("m/d/Y");
fwrite($filewbid, $txt);
fwrite($filewbid, "\n");
}
}


if ($checc == -1){
    echo "<script type='text/javascript'>alert('$emailErr');</script>"; 
}
if ($checc == 0){



require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

$str2=$_POST["seniorname"];
$txt ="";

$txt = findSenior($str2);

$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is deprecated
$mail->SMTPAuth = true;
$mail->Username = 'Youremail'; // email
$mail->Password = 'yourpasswd'; // password
$mail->setFrom('your email', 'nullflows smart fridge'); // From email and name
$mail->addAddress($_POST["email"], 'User'); // to email and name
$mail->Subject = 'Verify bidding';
$mail->msgHTML("Did you bid on ".$txt." for $".$amount."?"." Email me if you did/didn't"); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
$mail->AltBody = 'HTML messaging not supported'; // If html emails is not supported by the receiver, show this body
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
$mess = "";
if(!$mail->send()){
    $mess = "Mailer Error: " . $mail->ErrorInfo;
}else{
    $mess =  "Message sent!";
}


$message = "Sent! Check your email to verify ".$mess;

echo "<script type='text/javascript'>alert('$message');</script>";
fclose($filewbid);
} 
}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<center><info><h3>Bid here</h3></info></center>
<button class="collapsible" data-aos="fade-right"></button>

<div class="content">
<center>

<h4>Buy here</h4>

<form method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Amount:<br>
  <input type="text" name="amount" placeholder="Amount" value="<?php echo $amount;?>">
  <span class="error"> <?php echo $amountErr;?></span> 
  <br>
  Your senior's name:<br>
  <select name = "seniorname">
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
 Your email:<br>
  <input type="text" name="email" placeholder="Your email" value="<?php echo $name;?>">
  <span class="error"> <?php echo $emailErr;?></span> </input>
  <br><?php echo $random_number1 . ' + ' . $random_number2 . ' = '."?"; ?><br>
  <input name="firstNumber" type="hidden" value="<?php echo $random_number1; ?>" />
  <input name="secondNumber" type="hidden" value="<?php echo $random_number2; ?>" />
  <input type="text" name="matha" placeholder="prove that you are human" value="">
  <span class="error"> <?php echo $mathErr;?></span> </input>
  <br></br>
  <input type="submit" value="SEND!">
</form> 
</center>


</div>

</section>
<section id="qaa">
   <center><info><h3>Details about lastest bids</h3></info></center>

<button class="collapsible" data-aos="fade-right"></button>
<div class="content">
<center><h4>Recent Bid + amount</h4></center>

<?php
ini_set( "display_errors", 0); 
$filewbid = fopen("information/amount.txt", "r") or die("Unable to open file!");
while(! feof($filewbid))
  {
  echo fgets($filewbid). "<br />";
  }

fclose($filewbid);
?>
</div>
</section>


<section id="pfep">
  <center><info> <h3>Price for each person</h3></info></center>

<button class="collapsible" data-aos="fade-right"></button>
<div class="content">
<center><h4>Price for each person</h4></center>

<?php
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
</div>
</section>

<p></p>

<center> 
<hr>
<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
<refer><h2>About/Benefits</h2>
<p> Seniors’ secret names are used for anonymity purposes</p>
<p>Update real-time</p>
<p>Bidding history, but no seniors' names revealed (only a person who bids)</p>
<p>User can see how many times they have left until senior bidding expired</p>
<p>User can see who wins which senior</p>
<p>User will receive an email confirmation</p>
<p>User can request features, create PR(s) and report issues  <a href="https://github.com/bobdinh139/SeniorRenting"> here</a></p>
</center>
<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
<hr>

<center><refer><h2>This website is made possible by:</h2></refer></center>
<center><refer><p> Designing/developing <a href="https://iwillpllugmyself/nullflows"> @nullflows</a></p>
<p>plugin: AOS</p>
<p>Mailing: PHPMailer</p>
<p>Timer support for Safari: momentjs</p>

<p>UIGradient</p>
<p>W3Schools</p>
</refer></center>
<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
<hr>
<refer>
<cre>
<center>@bobdinh139</center>
</cre>
</refer>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js'></script>


<script src ='js/javascript.js'></script>

<!–– thanks to https://michalsnik.github.io/aos/  ––>
<script src='https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js'></script>
	  <script>AOS.init({
  duration: 1200,
})</script>

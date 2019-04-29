<html lang="en" >
<head>


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
<p id = "timer"></p>

 <script>
 var countDownDate = new Date("Apr 28, 2021 24:00:00").getTime();

var x = setInterval(function() {

  var now = new Date().getTime();
    
  var distance = countDownDate - now;
    
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  if (distance > 0) {
    clearInterval(x);
     document.location = "index.php";
  }
}, 1000);
 
 </script>
<center><h1>Renting Seniors</h1></center>



<center><info>
<i>
<p>Sessions Expired</p>
</i>
</info></center>

<center><info><h3>Names revealed</h3></info></center>
<center>
  <select name = "seniorname">
  <option value ="null">Click here to see all the secret names</option>


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
            <option value="<?php echo $i."f";?>"><?php echo $i."f: ".fgets($filefdata)." (female)";?></option>
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
            <option value="<?php echo $i."m";?>"><?php echo $i."m: ".fgets($filefdata)." (male)";?></option>
        <?php
        $i++;
  }

fclose($filefdata);
    
?>



  
  </select>
</center>
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
<refer><h2>Read more</h2>
<p> Seniors’ secret names are used for anonymity purposes</p>
<p> You can create PR(s)</p>
<p> Source code will be opened partially for security/anonymity reasons</p></refer>
</center>
<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
<hr>

<center><refer><h2>This website is made possible by:</h2></refer></center>
<center><refer><p> Designing/developing <a href="https://linkwebs.linkst"> @nullflows</a></p>
<p>plugin: AOS</p>
<p>Mailing: PHPMailer</p>
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


## Description 

Little project to make senior bidding activity better!

Here are some reasons why it is better than google form:

## Benefits/Features

+ Updates in real-time

+ Show bidding history, but no names revealed (only bidder's email and senior's code name)

+ User can see how much time they have left until the bid expires

+ User can see who wins which senior

+ User will receive an email confirmation 

+ User can report bidder(s)

+ Add/Remove seniors easily through website during the registration process

+ Provided with admin tool to remove bid(s) with ease if the bid(s) is/are not legit 

+ The website can be modified to fit with different purposes (exp: from real-time bidding to blind bidding)

+ User can request features, create PR(s) and report issues

+ Fully Open-source

+ Receives updates frequently 

# How-to

SET-UP

1. Go to ```/allsenoirname.php``` and add/remove seniors (default password is ```123456789```  and ```1234567890``` for for adding senior(s) and removing senior(s)).

2. Add bad words to the list at ```index.php``` and ```report.php``` (prevent user from entering bad words). 

3. Add images for the slide-show at ```/image/``` (width: 980px; height: 380px)

3. Add your email + password to send email and enable less secure apps in Gmail [here](https://support.google.com/accounts/answer/6010255?hl=en)

4. If the bid(s) is/are not legit, go to ``` /RemoveABidd.php ``` to remove lastest bid (default password is ```01234567890``` ) 

## Drawback(s)?

+ ~~User can fake emails~~
**fix:**
use ~~mail()~~ PHPMailer [here](https://github.com/PHPMailer/PHPMailer) function to verify bidding process. 

+ Still needs a moderator

## TO-DO

+ Test in wider range

+ ~~countdown timer~~

+ ~~Change secret names to actual name when sending an email~~

+ ~~Use file to list all names~~

+ ~~fix~~ ~~improve drawback(s)~~

+ ~~Create Admin tools(?)~~

+ ~~Add more images at the top of the website (w/ images of west students shuffle through)~~

## NOTES

Passwords in ```allsenoirname.php ``` and ``` RemoveABidd.php ``` are not encrypted for the sake of simplicity.

Verification link is _NOT_ gonna be developed, and it was removed from to-do list. Therefore, The website only sends you an email,
and you have to reply back if there is anything wrong.

You should refresh the website frequently to check for any new bids/updates as it is written in php 

## Credits

+ Designing/Developing: [@nullflows](https://github.com/nullflows)

+ Animation: [AOS](https://michalsnik.github.io/aos/) 

+ Mailing: [PHPMailer](https://github.com/PHPMailer/PHPMailer) 

+ Timer support for Safari: [momentjs](https://momentjs.com/)

+ Gradient-button: [gradienbuttons](https://gradientbuttons.colorion.co/)

+ Background: [UIGradients](https://uigradients.com/#Terminal)

+ Slide-show: [Jssor](https://www.jssor.com/)

+ Some functions: [W3schools](https://www.w3schools.com/)

#### Demo 

[here](https://rentingseniorbynull.000webhostapp.com/)

#### License

GNU Lesser General Public License v2.1




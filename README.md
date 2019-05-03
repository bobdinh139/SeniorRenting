## Description 

_for bidders,_

Feeling lost and confused about what is going on because google form not update in real-time?  

Or tired of asking how much time you have left until the bid expires, and/or tired of asking who wins.

_for moderators,_

Maybe you find yourself looking through the whole list of bidders just to find the winner for _every_ senior.

> Then, this website is the solution for that frustration. Here are some features that _I_ added to the website:

## Benefits/Features

+ Update in real-time

+ Show bidding history, but no names revealed (only bidder's email and senior's code name)

+ Users can see how much time they have left until the bid expires

+ Users can see who wins which senior

+ Users will receive an email confirmation 

+ Users can report bidder(s)

+ Add/Remove seniors easily through website during the registration process

+ Provided with admin tool to remove bid(s) with ease if the bid(s) is/are not legit 

+ Users can request features, create PR(s) and report issues

+ Fully Open-source

+ Receives updates frequently 

# How - to

SET-UP

1. **Remember** to go to ```/allsenoirname.php``` and add senior (default password is ```123456789``` for adding senior(s) and ```1234567890``` for deleting senior(s)).

2. Add bad words to the list (prevent user from entering bad words). 

3. Add images for slide-show at ```/image/``` (image size: width: 980px; height: 380px)

3. Add your email + password to send email and enable less secure apps in Gmail [here](https://support.google.com/accounts/answer/6010255?hl=en)

4. Moderating, if the bid(s) is/are not legit, go to ``` /RemoveABidd.php ``` to remove lastest bid (default password is ```01234567890``` ) 

## Drawback(s)?

+ ~~User can fake emails~~
**fix:**
use ~~mail()~~ PHPMailer [here](https://github.com/PHPMailer/PHPMailer) function to verify bidding process. 

+ Still needs a moderator

## TO - DO

+ ~~countdown timer~~

+ verification link

+ ~~Change secret names to actual name when sending an email~~

+ ~~Use file to list all names~~

+ ~~fix~~ ~~improve drawback(s)~~

+ ~~Create Admin tools(?)~~

+ ~~Add more images at the top of the website (w/ images of west students shuffle through)~~

## NOTES

Passwords in ```allsenoirname.php ``` and ``` RemoveABidd.php ``` are not encrypted for the sake of simplicity.

## Credits

Designing/Developing: [@nullflows](https://github.com/nullflows)

Animation: [AOS](https://michalsnik.github.io/aos/) 

Mailing: [PHPMailer](https://github.com/PHPMailer/PHPMailer) 

Timer support for Safari: [momentjs](https://momentjs.com/)

Gradient-button: [gradienbuttons](https://gradientbuttons.colorion.co/)

Background: [UIGradients](https://uigradients.com/#Terminal)

Slide-show: [Jssor](https://www.jssor.com/)

Some functions: [W3schools](https://www.w3schools.com/)


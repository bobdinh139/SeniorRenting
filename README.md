## Description 

Little project to make senior bidding activity better!

Here are some reasons why it is better than google form:

## Benefits/Features

+ Support blind-bidding

+ Updates in real-time

+ Show bidding history in real-time bidding, but no names revealed (only bidder's email and senior's code name)

+ User can see how much time they have left until the bid expires

+ User can see who wins which senior (real-time bidding)

+ User will receive an email confirmation 

+ User can report bidder(s) (real-time bidding)

+ Add/Remove seniors easily through website during the registration process

+ Provided with admin tool to remove bid(s) with ease if the bid(s) is/are not legit 

+ The website can be modified to fit with different purposes (exp: from real-time bidding to blind bidding)

+ Beautiful UI

+ User can request features, create PR(s) and report issues

+ Fully Open-source

+ Receives updates frequently 

# How-to

SET-UP

1. Decide whether you want to use real-time bidding or blind-bidding, if you use blind bidding, copy all the files from ```/blindbid/``` to root

2. Go to ```/addsenoirname.php``` and add/remove seniors (default password is ```123456789```  and ```1234567890``` for for adding senior(s) and removing senior(s)).

3. Add bad words to the list at ```index.php``` and ```report.php``` (prevent user from entering bad words). 

4. Add images for the slide-show at ```/image/``` (width: 980px; height: 380px)

5. Add your email + password to send email and enable less secure apps in Gmail [here](https://support.google.com/accounts/answer/6010255?hl=en)

6. If the bid(s) is/are not legit, go to ``` /RemoveABidd.php ``` to remove lastest bid (default password is ```01234567890``` ) 

## Drawback(s)?

+ ~~User can fake emails~~
**fix:**
use ~~mail()~~ PHPMailer [here](https://github.com/PHPMailer/PHPMailer) function to verify bidding process. 

+ Still needs a moderator

## TO-DO

- [x] Fix the the price counting algorithm in blind-bidding

- [ ] Test in wider range

- [x] countdown timer

- [x] Change secret names to actual name when sending an email

- [x] Use file to list all names

- [x] Create Admin tools(?)

- [x] Add more images at the top of the website (w/ images of west students shuffle through)

## NOTES

Passwords in ```addsenoirname.php ``` and ``` RemoveABidd.php ``` are not encrypted for the sake of simplicity.

Verification link is _NOT_ gonna be developed, and it was removed from to-do list. Therefore, The website only sends you an email,
and you have to reply back if there is anything wrong.

In the blind-bidding, you will not be able to see the current price of each senior. In addition, the minimum price for every senior will be
raised over time. This does not neccessary mean it is the price of that senior; the actual price can be higher/lower. 

You should refresh the website frequently to check for any new bids/updates as it is written in php 

## This website is brought to you by

+ Designing/Developing: [@nullflows](https://github.com/nullflows)

+ Animation: [AOS](https://michalsnik.github.io/aos/) 

+ Mailing: [PHPMailer](https://github.com/PHPMailer/PHPMailer) 

+ Timer support for Safari: [momentjs](https://momentjs.com/)

+ Gradient-button: [gradienbuttons](https://gradientbuttons.colorion.co/)

+ Background: [UIGradients](https://uigradients.com/#Terminal)

+ Slide-show: [Jssor](https://www.jssor.com/)

+ Some functions: [W3schools](https://www.w3schools.com/)

#### Demo 

real-time bidding [here](https://rentingseniorbynull.000webhostapp.com/)

blind-bidding [here](https://seniorrentingblind.000webhostapp.com)

#### License

GNU Lesser General Public License v2.1




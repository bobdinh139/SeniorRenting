<img src="image/wcnr.png?raw=true" align="right" width="300">

## Description 

Little project to make senior bidding activity better!

[Here](#Features) are some reasons why it is better than google form (traditional way).

[Set-up guide](#How-to)

Read more about the project (to-do list, changelog, etc) at [wiki](https://github.com/bobdinh139/SeniorRenting/wiki).

## NOTES

Passwords in ```addsenoirname.php ``` and ``` RemoveABidd.php ``` are not encrypted for the sake of simplicity.

Verification link is _NOT_ gonna be developed, and it was removed from to-do list. Therefore, The website only sends you an email,
and you have to reply back if there is anything wrong.

In the blind-bidding, you will not be able to see the current price of each senior. In addition, the minimum price for every senior will be
raised over time. This does not neccessary mean it is the current price of that senior; the actual price can be higher/lower. 

You should refresh the website frequently to check for any new bids/updates as it is written in php.

## Demo 

> Click the link to go to the website

[real-time bidding](https://seniorrealtimebid.000webhostapp.com/)

Desktop view:

![1](https://github.com/bobdinh139/HostImage/blob/master/1.gif?raw=true)

mobile view: (iPhone 5s/SE)

![3](https://github.com/bobdinh139/HostImage/blob/master/3.gif?raw=true)

[blind-bidding](https://seniorrentingblind.000webhostapp.com)

Desktop view:

![2](https://github.com/bobdinh139/HostImage/blob/master/2.gif?raw=true)

mobile view: (iPhone 5s/SE)

![4](https://github.com/bobdinh139/HostImage/blob/master/4.gif?raw=true)

#### License

[GNU Lesser General Public License v2.1](LICENSE)

## Features

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

+ No browser left behind

+ Your privacy matters

+ User can request features, create PR(s) and report issues here and on the website

+ Fully Open-source

+ Receives updates frequently 

## How-to

SET-UP

1. Decide whether you want to use real-time bidding or blind-bidding, if you use blind bidding, copy all the files from ```/blindbid/``` and paste all of them to root

2. Go to ```/addsenoirname.php``` and add/remove seniors (default password is ```123456789```  and ```1234567890``` for for adding senior(s) and removing senior(s)).

3. Add bad words to the list at ```index.php``` and ```report.php``` (prevent user from entering bad words). 

4. Add images for the slide-show at ```/image/``` (width: 980px; height: 380px)

5. Add your email + password in PHPMailer in ```index.php``` and ```report.php``` to send email, and enable [less secure apps in Gmail](https://support.google.com/accounts/answer/6010255?hl=en) in order to setup PHPMailer

6. If the bid(s) is/are not legit, go to ``` /RemoveABidd.php ``` to remove lastest bid (default password is ```01234567890``` ) 


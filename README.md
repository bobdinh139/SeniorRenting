
# How - to

SET-UP

1. **Remember** to go to _/allsenoirname.php_ and add senior (default password is ```123456789``` for adding senior and ```1234567890``` for deleting senior).

2. Add bad words to the list (prevent user from entering bad words). 

3. Add your email + password to send email and enable less secure apps in Gmail [here](https://support.google.com/accounts/answer/6010255?hl=en)

## Benefits?

+ Add/Remove seniors easily through website 

+ Update real-time

+ Bidding history, but no seniors' names revealed (only a person who bids and senior's secret name)

+ User can see how many times they have left until senior bidding expired 

+ User can see who wins which senior

+ User will receive an email confirmation 

+ User can request features, create PR(s) and report issues

+ Fully Open-source

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

+ Create Admin tools(?)

+ Add more images at the top of the website (w/ images of west students shuffle through)

## NOTES

Password in _allsenoirname.php_ is not encrypted for the sake of simplicity.

## Credits

Designing/Developing: [@nullflows](https://github.com/nullflows)

Animation: [AOS](https://michalsnik.github.io/aos/) 

Mailing: [PHPMailer](https://github.com/PHPMailer/PHPMailer) 

Timer support for Safari: [momentjs](https://momentjs.com/)

Background: [UIGradients](https://uigradients.com/#Terminal)

Some functions: [W3schools](https://www.w3schools.com/)


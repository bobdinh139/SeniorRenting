
# How - to

SET-UP

1. Add students to the list (@<option> _index.php_ , _allstub.txt_ and _allstug.txt_).

2. Add bad words to the list. 

3. **Remember** to create and add students to _allstub.txt_ (for males) and _allstug.txt_ (for females) file at root.

4. **Remember** to place _/mail/_ at root

5. Add your email + password to send email and enable less secure apps in Gmail [here](https://support.google.com/accounts/answer/6010255?hl=en)

## Benefits?

+ Update real-time

+ Bidding history, but no seniors' names revealed (only a person who bids)

+ User can see how many times they have left until senior bidding expired 

+ User can see who wins which senior

+ User will receive an email confirmation 

## Drawback(s)?

+ ~~User can fake emails~~

**Temporary fix:**
use ~~mail()~~ PHPMailer [here](https://github.com/PHPMailer/PHPMailer) function to verify bidding process. 

+ Still needs a moderator

## TO - DO

+ ~~countdown timer~~

+ verification link

+ ~~Change secret names to actual name when sending an email~~

+ ~~Use file to list all names~~

+ ~~fix~~ improve drawback(s)

## NOTES

the link provided above does not have mail() functioned (free hosting lol) and they block mail services.

Therefore, use [this link](https://rentingseniorbynull.000webhostapp.com/) if you want to test out ~~mail()~~ PHPMailer

mail() branch (deprecated) uses mail() instead of PHPMailer. 

mail() does not always work, but it is eaiser to setup.


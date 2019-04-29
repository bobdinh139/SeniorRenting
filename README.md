
# How - to

SET-UP

1. put ``` <?php include 'SetUpStudents.php';?> ``` at the top (**head**) of _index.php_ .

2. After executing the first time, remove ``` <?php include 'SetUpStudents.php';?> ``` from _index.php_ .

3. Add bad words to the list. 

4. Add students to the list (@<option> _index.php_ , _allstub.txt_ and _allstug.txt_).

5. Add Credits (if needed).

6. **Remember** to create _amount.txt_ _allstub.txt_ and _allstug.txt_ file at /information/.

7. **Remember** to place _/mail/_ at root

8. **Remember** to place _allstub.txt_ (all male students) and _allstug.txt_ (all female students) at root

9. Add your email + password to send email and enable less secure apps in Gmail [here](https://support.google.com/accounts/answer/6010255?hl=en)

## Benefits?

+ Update real-time

+ Bidding history, but no seniors' names revealed (only a person who bids)

+ User can see how many times they have left until senior bidding expired 

+ User can see who wins which senior

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


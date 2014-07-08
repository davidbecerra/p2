# Project 2
## CS S-15

By David Becerra

##Live URL
162.243.247.81/p2

##Description
Generates a password composed of random english words (1-9 words). Other options include capitalizing the first character, adding a number at the end, adding a special character at the end.

##Details for instructor
Type a number from 1-9 to indicate the number of words to have in the password. I had each word separated by a hyphen so it was clear which english words were being used. I also check that the input is a valid number within the desired range. If a decimal is provided between 1-9, then I truncate the decimal and output the correct number of words. If a number is desired in the password, I only choose a number from 0 to 100. There really isn't any particular reason why this is the case. I also did not setup a domain because it required a $10 payment (according to the Digital Ocean setup notes provided). I may decide later, however, to setup domains for subsequent projects.

##Outside code
* rtrim : http://www.php.net/manual/en/function.rtrim.php
* count : http://www.php.net/manual/en/function.count.php
* forms, required forms, form validation : http://www.w3schools.com
* dictionary of words: for text-> https://d1b10bmlvqabco.cloudfront.net/attach/ht1cmoh734q7lz/hwtu32ltlu3kx/hx6nwrvbr9fu/wordlist.txt    source -> http://www.englishclub.com/vocabulary/common-words-5000.htm
* xkcd password comic : http://xkcd.com/936/
CamelBoard
==========
* SCROLL DOWN *
CamelBoard ~ The MySQL-less messageboard software.

*Welcome To CamelBoard MessageBoard software!

<a class="coinbase-button" data-code="f6318a7083d08aee766a53b1d757a87e" data-button-style="donation_small" href="https://coinbase.com/checkouts/f6318a7083d08aee766a53b1d757a87e">Donate Bitcoins</a><script src="https://coinbase.com/assets/button.js" type="text/javascript"></script>

<h5>or Donate BitCoins to this address if you are feeling generous:1BButVypoERBMb27hAMmWFK8Jf2XVMDSX1</h5>

<a href="/WinterVein/CamelBoard/archive/v1.0.zip" class="minibutton sidebar-button" aria-label="Download WinterVein/CamelBoard as a zip file" title="Download WinterVein/CamelBoard as a zip file" rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
                
Created and Written from scratch by: WinterVein
credits to: 
- WinterVein, for creating CamelBoard), 
- Steve Dawson, for writing the password protection PHP script(you can find him at 

http://www.stevedawson.com/)
- The BootStrap Team(Mdo, Fat, and the rest of their contributers) for writing
 the BootStrap CSS framework that is utilized by CamelBoard 
(you can find them at http://getbootstrap.com/)

NOTE: 
- Admin blog posts(BlogPoster.php) can involve html, php, css, and javascript (this is so that you can style your posts).
- Things posted to the messageboard (respondwrite.html) do not allow use of code(this is for saftey reasons). 

FILES:
bootstrap-3.1.1-dist (CSS framework folder)
BlogPoster.php
homeNS.png
homeS.png
logo.png
process.png
replies.html
replypostlist.html
respondwrite.html
respscript.php


IMPORTANT:
*FOLLOW THE README IN ORDER TO CONFIGURE YOUR MessageBoard!

README:

<h5>1(VERY VERY IMPORTANT!!!!). First you need to set your blog password so that only YOU
can write to the blog. 


-To do this you must Open BlogPoster.php in a text editor
and change '$password ="CHANGEME";' To '$password = "your new password here";'
THEN, 
open proccess.php and look again for where it says: '$password = "CHANGEME";' To '$password = "your new password here";'</h5>
(there is mandatory two step authentication to prevent LFI attacks)

2(optional but useful to know)you can delete posts! 

-To do this, open up replypostlist.html(if you want to delete a comment) or 
blogpostlist.html(if you want to delete a post). and then simply search for the title(or reply
id) of the post you want to delete, and then highlight that div from the start of the div to 

the end of the div and press the backspace key on your keyboard.

3(optional).You can change the site logo!

-To do this you can simply replace logo.png with your own file(but rename your file to 

"logo.png")

4(optional). change where it says Welcome to CamelBoard Comments! to your own message.

-To do this, open up replies.html and/or index.html and scroll down to line 52(50 for 

index.html) where it says: Welcome to CamelBoard comments/home!  Then just simply 

replace that with your Own Message.

5(optional). Change the title of the page.
- To do this simply open up replies.html and/or index.html and change the text between
the <title> tags at the top of the page

6(optional). MODIFY ANYTHING YOU WANT! including but not limited to:css style, php scripts,
background color, and more!

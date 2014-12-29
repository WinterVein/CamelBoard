<?php
#######################################################################
#				PHP Simple Captcha Script
#	Script Url: http://toolspot.org/php-simple-captcha.php
#	Author: Sunny Verma
#	Website: http://toolspot.org
#	License: GPL 2.0, @see http://www.gnu.org/licenses/gpl-2.0.html
########################################################################
session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
?>
<!DOCTYPE html>
<html>
<head>

<title>CamelBoard</title> 
<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.1.1-dist/css/bootstrap.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body bgcolor="#33CC33">
<div class="container">
<div class="row">

</div>
</div>
<style type="text/css">
  
.large {
    color: #1F1F1F;
    font-family:arial;
    font-size: 4pt;
    width:50%;
}
.chanbody { background:#CCFF66;}
body { background:#DBFF94;}
.tabbody { background:#CCFFCC;}
.link {
    color: #1F1F1F;
    font-family:arial;
    font-size: 4pt;
    width:30%;
} 
.mainmenu {
           width: 8%;
           height: 7%;
           border-style:inset;
           border-width:5px;
 }
 .content {
           border-style:none;
           border-width:0px;
       }
</style>
<center><h1>CamelBoard</h1>

<p><div class="tabbody">
<header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
  <div class="container">
  
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
         
        <li>
          <a href=""></a>
        </li>
       
        
     <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="" class="navbar-brand">CamelBoard</a>
    </div>
    <li>
          <a href="index.html">Blog</a>
        </li>
    
        <li>
          <a href="replies.html">MessageBoard</a>
        </li>
    <li>
          
        </li>
     <li>
          
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://wintervein.github.io/CamelBoard/" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Expo');">The CamelBoard Project</a></li>
        <li><a href="config.php" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Blog');">Admin Panel</a></li>
      </ul>
    </nav>
  </div>
</header></div>
</center>
<p>
<center>
<div class="large">
<br>
<br>
<br>
<pre class="chanbody">
<script language="javascript" type="text/javascript">
function limitText(limitField, limitCount, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	} else {
		limitCount.value = limitNum - limitField.value.length;
	}
}


</script>
    <form action='respscript.php' method='GET' id="newpost">
	<font size="2">
        replyid(copy and paste replyid of the comment you want to reply to): <input type='text' name='replyto' id='replyto'/>
		SUB-replyid(copy and paste replyid of the sub-comment you want to reply to): <input type='text' name='srt' id='srt'/>
        title(maxlength:50): <input type='text' name='title' onKeyDown="limitText(this.form.title,this.form.countdown,50);" 
onKeyUp="limitText(this.form.title,this.form.countdown,50);" maxlength="50"/>
		username(maxlength:20): <input type='text' name='uname' onKeyDown="limitText(this.form.uname,this.form.countdown,20);" 
onKeyUp="limitText(this.form.uname,this.form.countdown,20);" maxlength="20"/>
		Image(use full path and if the image is on the web include the http:// prefix) : <input type='text' name='img'/>
		comment(maxlength:1000) :<P> <textarea name='comment' rows="5" cols="50" form="newpost" onKeyDown="limitText(this.form.comment,this.form.countdown,1000);" 
onKeyUp="limitText(this.form.comment,this.form.countdown,1000);"></textarea>
		
        <input type='submit' value='SUBMIT'/>
    </form></div>
<iframe class="content" height="600" width="100%" src="replypostlist.php">
</pre>
<?php
}
else
{
die("Wrong Code Entered");
}
?>
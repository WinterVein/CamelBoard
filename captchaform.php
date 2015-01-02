
<!DOCTYPE html>
<html>
<head>
<title><?php
require("sitename.php");
print $sitename;
?></title>
<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.1.1-dist/css/bootstrap.css" />
</head>
<script>
function getUrl(){
var hashParams = window.location.hash.substr(1).split('&'); // substr(1) to remove the `#`
for(var i = 0; i < hashParams.length; i++){
    var p = hashParams[i].split('=');
    document.getElementById(p[0]).value = decodeURIComponent(p[1]);;
}}</script>
<Body onload="getUrl()">
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

<center><h1><?php
print $sitename;
?></h1>

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
<<<<<<< HEAD
      <a href="index.php" class="navbar-brand"><?php
print $sitename;
?></a>
    </div>
    <li>
=======

      <a href="index.php" class="navbar-brand"><?php
print $sitename;
?></a>
    </div>
    <li>

      <a href="" class="navbar-brand"><?php
print $sitename;
?></a>
    </div>
		<li>
>>>>>>> origin/master
          <a href="index.php">Blog</a>
        </li>
    
        <li>
          <a href="replies.php">MessageBoard</a>
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
<br>
<br>
<br>
<center>
<div class="large" width="100%" >
<pre class="chanbody"> <form action="validate.php" method="post">
Complete Captcha To Enter Comment
<input name="captcha" type="text">
<img src="captcha.php" /><br>
<input name="submit" type="submit" value="Submit">
</form>
</center>

</body>
</html> 
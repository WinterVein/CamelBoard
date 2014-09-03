<?php
/************************************************************************/
/* PHP Simple PasswordProtect v1.0                                      */
/* ===========================                                          */
/*                                                                      */
/*   Written by Steve Dawson - http://www.stevedawson.com               */
/*   Freelance Web Developer - PHP, MySQL, HTML programming             */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* but please leave this header intact, thanks                          */
/************************************************************************/
##########################################################################
$password = "CHANGEME";  //(CaSe-SeNsItIvE!) CHANGE THIS TO WHATEVER YOU WANT OR ELSE YOU WILL BE HACKED!!!
##########################################################################
?>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap-3.1.1-dist/css/bootstrap.css" />
</head>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Simple Password Protect - PHP PasswordProtect</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
P { FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana, Tahoma, Arial}
TD { FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana, Tahoma, Arial}
-->
</style>
</head>
<body>
<?php 
  print "<h2 align=\"center\">Restricted Area!</h2>";
// If password is valid let the user get access
if (isset($_POST["password"]) && ($_POST["password"]=="$password")) {
?>
<!-- START OF HIDDEN HTML - PLACE YOUR CONTENT HERE -->

  <html>
<head><title>CamelBlog Writer</title>
<link rel="stylesheet" type="text/css" href="bootstrap-3.1.1-dist/css/bootstrap.css" />
</head>
<body>

    <form action='process.php' method='GET' id="newpost">
        Title: <input type='text' name='title'/>
        <br/>
		Image(use full path and if the image is on the web include the http:// prefix) : <input type='text' name='img'/>
        <br/>
		
		comment : <textarea name='comment' form="newpost"></textarea>
        <br/>
        <input type='submit' value='SUBMIT'/>
    </form>
	
	<iframe src="blogpostlist.html">
</body>
</html>

<!-- END OF HIDDEN HTML -->
<?php 

}

else
{
// Wrong password or no password entered display this message
if (isset($_POST['password']) || $password == "") {
  print "<p align=\"center\"><font color=\"red\"><b>Incorrect Password</b><br>Please enter the correct password</font></p>";}
  print "<form method=\"post\"><p align=\"center\">Please enter your password for access<br>";
  print "<input name=\"password\" type=\"password\" size=\"25\" maxlength=\"10\"><input value=\"Login\" type=\"submit\"></p></form>";
}
  print "<br><br><p align=\"center\"></a></p>";
?>
<BR>
</body>
</html>

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
require("pass.php");
require("author.php");
$password = $passwerd;
##########################################################################
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<head>
<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.1.1-dist/css/bootstrap.css" />
</head>
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
$title = htmlentities($_GET['title']);
require("timezone.php"); // You can Change this to your timezone if you want find list of timezones here:http://php.net/manual/en/timezones.php
$date = date('Y_m_d-H.i.s');
$meta = "<P><div id=\"" . $title . $date ."\"><pre class=\"chanbody\">";
$metae = "</div></pre></P>";
$img = $_GET['img'];
$comment = $_GET['comment'];

$file_handle = fopen("blogposts/" . $title . $date . ".php", "c+");
$file_contents = $meta . "Title:<font size=\"3\">" . $title . "</font><P>     " . "Date:" . $date . "<br/>Author:" . $author . "<P>postid:" . $title . $date ."<P><img src=\"" . $img . "\"><P>" . "<P> comment:<P>" . $comment . $metae . "\n";

fwrite($file_handle, $file_contents);
fclose($file_handle);
$file_handle = fopen("blogpostlist.php", "c+");

$file_contents = "\n
<?php 
error_reporting(0);
\$file_handle = fopen(\"blogposts/" . $title . $date . ".php\", \"r+\");
\$content = file_get_contents(\"blogposts/". $title . $date . ".php\");
print \$content;
fclose(\$file_handle);
?>\n</div></pre></p>". file_get_contents("blogpostlist.php");
fwrite($file_handle, $file_contents);
fclose($file_handle);

print "Done! :) <a href=\"index.html\">click here to go back to home</a><P><a href=\"blogpostlist.html\">click here to go back to site home</a><P><a href=\"config.php\">click here to view content list</a>";

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

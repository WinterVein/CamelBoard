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
$password = $passwerd;
##########################################################################
print "<h2 align=\"center\">Restricted Area!</h2>";
// If password is valid let the user get access
if (isset($_POST["password"]) && ($_POST["password"]=="$password")) {
$filename = "replypostlist.html"; 
$linenumn = $_GET['linenum'];
$linenum = $linenum-1;
    $file_content = file($filename); 
    $x = count($file_content); 
    $fp = fopen($filename, "w+");  
    $file_content[$linenum] = "[Deleted Comment]"; 
    $y = 0; 
if($linenum >= ($x-3))
	{
	echo "you cannot delete that line";
	}
	if($linenum <= 0)
	{
	echo "you cannot delete that line";
	}
	
else
    {
    while($y < $x) 
    { 
	
	
    fwrite($fp, $file_content[$y]); 
    $y++; 
	
    } 
	}
    fclose($fp); 
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
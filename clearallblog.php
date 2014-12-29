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
// Specify the target directory and add forward slash
$dir = "blogposts/"; 
// Open the directory
$dirHandle = opendir($dir); 
// Loop over all of the files in the folder
while ($file = readdir($dirHandle)) { 
    // If $file is NOT a directory remove it
    if(!is_dir($file)) { 
        unlink ("$dir"."$file"); // unlink() deletes the files
    }
}
// Close the directory
closedir($dirHandle); 
$file_handle = fopen("blogpostlist.php", "w+");
$file_contents = "<?
//DONT TOUCH ANYTHING BELOW THIS LINE!!!!!!!!!!!!!!!!
// THAT INCLUDES THE HTML!!!!!!
?>
<head>
<title>replypostlist</title>
<link rel=\"stylesheet\" type=\"text/css\" href=\"assets/bootstrap-3.1.1-dist/css/bootstrap.css\" />
</head></pre></pre></div></div></pre>
<style type=\"text/css\">
  
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
";
fwrite($file_handle, $file_contents);
fclose($file_handle);
echo "success! <a href=\"config.php\">go back to control panel</a>";

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
<head>
<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.1.1-dist/css/bootstrap.css" />
</head>
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
<?php 
require("pass.php");
$password = $passwerd;  //(CaSe-SeNsItIvE!) CHANGE THIS TO WHATEVER YOU WANT OR ELSE YOU WILL BE HACKED!!!
 print "<h2 align=\"center\">Restricted Area!</h2>";
// If password is valid let the user get access
 echo "default password is \"CHANGEME\" enter it here if you are changing your password for the first time <P> otherwise, just enter your password";
if (isset($_POST["password"]) && ($_POST["password"]=="$password")) {
 print "<h2 align=\"center\">Restricted Area!</h2>";
// If password is valid let the user get access

$sitename = $_GET['sitename'];


$meta = "<?php \n \$sitename=\"";
$metae = "\";\n?>";

$file_handle = fopen("sitename.php", "w+");
//$old_content = file_get_contents("blogpostlist.html");
$file_contents = $meta . $sitename . $metae;

fwrite($file_handle, $file_contents);
fclose($file_handle);
print "Done,your discussion board name is " . $sitename;
echo "<a href=\"config.php\">click here to go back to control panel</a>";

//unlink(__FILE__)
}

else
{
// Wrong password or no password entered display this message
if (isset($_POST['password']) || $password == "") {
  print "<p align=\"center\"><font color=\"red\"><b>Incorrect Password</b><br>Please enter the correct password</font></p>";}
  print "<form method=\"post\"><p align=\"center\">Please enter your password for access<br>";
<<<<<<< HEAD
  print "<input name=\"password\" type=\"password\" size=\"25\" ><input value=\"Login\" type=\"submit\"></p></form>";
=======
  print "<input name=\"password\" type=\"password\" size=\"25\" maxlength=\"10\"><input value=\"Login\" type=\"submit\"></p></form>";
>>>>>>> origin/master
}
  print "<br><br><p align=\"center\"></a></p>";
?>
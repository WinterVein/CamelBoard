<head>
<link rel="stylesheet" type="text/css" href="bootstrap-3.1.1-dist/css/bootstrap.css" />
</head>
<?php 
require("pass.php");
$password = $passwerd;  //(CaSe-SeNsItIvE!) CHANGE THIS TO WHATEVER YOU WANT OR ELSE YOU WILL BE HACKED!!!
 print "<h2 align=\"center\">Restricted Area!</h2>";
// If password is valid let the user get access
 echo "default password is \"CHANGEME\" enter it here if you are changing your password for the first time <P> otherwise, just enter your password";
if (isset($_POST["password"]) && ($_POST["password"]=="$password")) {
 print "<h2 align=\"center\">Restricted Area!</h2>";
// If password is valid let the user get access

$auth = $_GET['author'];


$meta = "<?php \n \$author=\"";
$metae = "\";\n?>";

$file_handle = fopen("author.php", "w+");
//$old_content = file_get_contents("blogpostlist.html");
$file_contents = $meta . $auth . $metae;

fwrite($file_handle, $file_contents);
fclose($file_handle);
print "Done,your name is" . $author;
echo "<a href=\"config.php\">click here to go back to control panel</a>";

//unlink(__FILE__)
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
<head>
<link rel="stylesheet" type="text/css" href="bootstrap-3.1.1-dist/css/bootstrap.css" />
</head>
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
$password = $passwerd;  //(CaSe-SeNsItIvE!) CHANGE THIS TO WHATEVER YOU WANT OR ELSE YOU WILL BE HACKED!!!

##########################################################################
?>
<html>
<head><title>CamelBoard config</title>
<link rel="stylesheet" type="text/css" href="bootstrap-3.1.1-dist/css/bootstrap.css" />
</head>
<body>
<?php
  print "<h2 align=\"center\">Restricted Area! CONTROL PANEL</h2>";
// If password is valid let the user get access
 echo "default password is \"CHANGEME\" this will be changed during the setup process";
if (isset($_POST["password"]) && ($_POST["password"]=="$password")) {
?>


    <form action='setuppass.php' method='GET' id="newpost">
	<script type="text/JavaScript">
function valid(f) {
!(/^[A-z&#209;&#241;0-9]*$/i).test(f.value)?f.value = f.value.replace(/[^A-z&#209;&#241;0-9]/ig,''):null;
} 
</script>
<h4> PASSWORD CONFIGURATION:</h4>
       your password for posting stuff to blog and administration (NO SPECIAL CHARACTERS,ALL SPECIAL CHARACTERS WILL BE STRIPPED FROM THE PASSWORD ONLY NUMBERS AND LETTERS):<P> <input type='text' name='pass' onkeyup="valid(this)" onblur="valid(this)"/> <P> this can only be viewed by site admin via opening pass.php in a text editor.
        <input type='submit' value='SUBMIT'/>
		<BR/>NOTE: if special characters are injected into the textbox the password script will be broken.
    </form>
	<P><P><h4>TIMEZONE CONFIGURATION:</h4>
	<form action='setuptime.php' method='GET' id="newpost">
       your timezone:
	<select name="timezone">
	<option value="UTC">UTC</option>
<option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
<option value="America/Adak">(GMT-10:00) Hawaii-Aleutian</option>
<option value="Etc/GMT+10">(GMT-10:00) Hawaii</option>
<option value="Pacific/Marquesas">(GMT-09:30) Marquesas Islands</option>
<option value="Pacific/Gambier">(GMT-09:00) Gambier Islands</option>
<option value="America/Anchorage">(GMT-09:00) Alaska</option>
<option value="America/Ensenada">(GMT-08:00) Tijuana, Baja California</option>
<option value="Etc/GMT+8">(GMT-08:00) Pitcairn Islands</option>
<option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US & Canada)</option>
<option value="America/Denver">(GMT-07:00) Mountain Time (US & Canada)</option>
<option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
<option value="America/Dawson_Creek">(GMT-07:00) Arizona</option>
<option value="America/Belize">(GMT-06:00) Saskatchewan, Central America</option>
<option value="America/Cancun">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
<option value="Chile/EasterIsland">(GMT-06:00) Easter Island</option>
<option value="America/Chicago">(GMT-06:00) Central Time (US & Canada)</option>
<option value="America/New_York">(GMT-05:00) Eastern Time (US & Canada)</option>
<option value="America/Havana">(GMT-05:00) Cuba</option>
<option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
<option value="America/Caracas">(GMT-04:30) Caracas</option>
<option value="America/Santiago">(GMT-04:00) Santiago</option>
<option value="America/La_Paz">(GMT-04:00) La Paz</option>
<option value="Atlantic/Stanley">(GMT-04:00) Faukland Islands</option>
<option value="America/Campo_Grande">(GMT-04:00) Brazil</option>
<option value="America/Goose_Bay">(GMT-04:00) Atlantic Time (Goose Bay)</option>
<option value="America/Glace_Bay">(GMT-04:00) Atlantic Time (Canada)</option>
<option value="America/St_Johns">(GMT-03:30) Newfoundland</option>
<option value="America/Araguaina">(GMT-03:00) UTC-3</option>
<option value="America/Montevideo">(GMT-03:00) Montevideo</option>
<option value="America/Miquelon">(GMT-03:00) Miquelon, St. Pierre</option>
<option value="America/Godthab">(GMT-03:00) Greenland</option>
<option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires</option>
<option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
<option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
<option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
<option value="Atlantic/Azores">(GMT-01:00) Azores</option>
<option value="Europe/Belfast">(GMT) Greenwich Mean Time : Belfast</option>
<option value="Europe/Dublin">(GMT) Greenwich Mean Time : Dublin</option>
<option value="Europe/Lisbon">(GMT) Greenwich Mean Time : Lisbon</option>
<option value="Europe/London">(GMT) Greenwich Mean Time : London</option>
<option value="Africa/Abidjan">(GMT) Monrovia, Reykjavik</option>
<option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
<option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
<option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
<option value="Africa/Algiers">(GMT+01:00) West Central Africa</option>
<option value="Africa/Windhoek">(GMT+01:00) Windhoek</option>
<option value="Asia/Beirut">(GMT+02:00) Beirut</option>
<option value="Africa/Cairo">(GMT+02:00) Cairo</option>
<option value="Asia/Gaza">(GMT+02:00) Gaza</option>
<option value="Africa/Blantyre">(GMT+02:00) Harare, Pretoria</option>
<option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
<option value="Europe/Minsk">(GMT+02:00) Minsk</option>
<option value="Asia/Damascus">(GMT+02:00) Syria</option>
<option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
<option value="Africa/Addis_Ababa">(GMT+03:00) Nairobi</option>
<option value="Asia/Tehran">(GMT+03:30) Tehran</option>
<option value="Asia/Dubai">(GMT+04:00) Abu Dhabi, Muscat</option>
<option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
<option value="Asia/Kabul">(GMT+04:30) Kabul</option>
<option value="Asia/Yekaterinburg">(GMT+05:00) Ekaterinburg</option>
<option value="Asia/Tashkent">(GMT+05:00) Tashkent</option>
<option value="Asia/Kolkata">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
<option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
<option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
<option value="Asia/Novosibirsk">(GMT+06:00) Novosibirsk</option>
<option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
<option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
<option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
<option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
<option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
<option value="Australia/Perth">(GMT+08:00) Perth</option>
<option value="Australia/Eucla">(GMT+08:45) Eucla</option>
<option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
<option value="Asia/Seoul">(GMT+09:00) Seoul</option>
<option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
<option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
<option value="Australia/Darwin">(GMT+09:30) Darwin</option>
<option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
<option value="Australia/Hobart">(GMT+10:00) Hobart</option>
<option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
<option value="Australia/Lord_Howe">(GMT+10:30) Lord Howe Island</option>
<option value="Etc/GMT-11">(GMT+11:00) Solomon Is., New Caledonia</option>
<option value="Asia/Magadan">(GMT+11:00) Magadan</option>
<option value="Pacific/Norfolk">(GMT+11:30) Norfolk Island</option>
<option value="Asia/Anadyr">(GMT+12:00) Anadyr, Kamchatka</option>
<option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
<option value="Etc/GMT-12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
<option value="Pacific/Chatham">(GMT+12:45) Chatham Islands</option>
<option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
<option value="Pacific/Kiritimati">(GMT+14:00) Kiritimati</option>
</select>
	<input type='submit' value='SUBMIT'/>
    </form>
</body>
</html>
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
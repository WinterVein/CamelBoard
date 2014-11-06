<?php
#######################################################################
#				PHP Simple Captcha Script
#	Script Url: http://toolspot.org/php-simple-captcha.php
#	Author: Sunny Verma
#	Website: http://toolspot.org
#	License: GPL 2.0, @see http://www.gnu.org/licenses/gpl-2.0.html
########################################################################
session_start();
//$code=rand(1000,9999);
$code=substr(md5(rand()), 0, 6);
$_SESSION["code"]=$code;
$im = imagecreatetruecolor(60, 24);
$bg = imagecolorallocate($im, 0, 153, 0);
$fg = imagecolorallocate($im, 255, 255, 255);
imagefill($im, 5, 5, $bg);
imagestring($im, 5, 3, 5,  $code, $fg);
header("Cache-Control: no-cache, must-revalidate");
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>
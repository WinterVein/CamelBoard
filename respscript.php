<head>
<link rel="stylesheet" type="text/css" href="bootstrap-3.1.1-dist/css/bootstrap.css" />
</head>
<?php
require("timezone.php"); // You can Change this to your timezone if you want find list of timezones here:http://php.net/manual/en/timezones.php
$date = date('Y_m_d-H.i.s');
$captcha = $_GET['captcha'];
$title = $_GET['title'];
$retitle = $_GET['replyto'];
$uname = $_GET['uname'];
$img = $_GET['img'];
$srto = $_GET['srt'];
$comment = $_GET['comment'];
$fixdate = htmlentities($date);
$fixeds = htmlentities($uname);
$fixtitles = htmlentities($retitle);
$safetitles = htmlentities($title); 
$fixcomments = htmlentities($comment);
$fiximgs = htmlentities($img);
$srts = htmlentities($srto);
$fixtitlel = nl2br($fixtitles);
$fixcommentl= nl2br($fixcomments);
$fixedl = nl2br($fixeds);
$srtl = nl2br($srts);
$safetitlel = nl2br($safetitles);
$safetitle = str_replace(array("\r\n", "\r", "\n"), "", $safetitlel);
$fixtitle = str_replace(array("\r\n", "\r", "\n"), "", $fixtitlel);
$fixcomment = str_replace(array("\r\n", "\r", "\n"), "", $fixcommentl);
$fixed = str_replace(array("\r\n", "\r", "\n"), "", $fixedl);
$srt = str_replace(array("\r\n", "\r", "\n"), "", $srtl);
$meta = "<P><div id=\"" . $fixed . $safetitle . $fixdate ."\"><pre>";
$metae = "</div></pre></P>";
$mreplyid = $fixtitle . $fixdate;
if(empty($fixed) | empty($safetitle) | empty($fixcomment))
{
print "go back and fill out username and/or comment and/or title and retry.";
}
else if(strlen($fixed) > 20)
{
print "your username is too long";
}
else if(strlen($safetitle) > 50)
{
print "your title is too long.";
}
else if(strlen($fixcomment) > 1000)
{
print "your comment is too long.";
}
else if($captcha != 4)
{
print "you answered the captcha wrong, go back and try again"; 
}
else if(strlen($srt) > 0)
{
if(strlen($fixtitle) <= 0)
{
	print "if you enter a sub-reply id, you must enter a replyid for the original thread<P>refresh the page and try again,";
}

else{
	$file_handle = fopen("commentposts/" . $fixtitle . ".php", "a+");
	if(strlen($fiximg) > 0)
	{
	$file_contents =  "<P><div id=\"" . $fixed . $safetitle . $fixdate ."\"><hr style=\"background:#888888; border:0; height:2px\" /><blockquote><font size=\"2\">" . "title:<font size=\"4\">" . $safetitle . "</font><P>username:<font size=\"3\">" . $fixed .  "</font><P>Date:" . $fixdate . "<p>sub-replyid:" . $fixed . $safetitle . $fixdate . "<P><a href=\"" . $fiximg . "\"target=\"_blank\"><img src=\"" . $fiximg . "\" width=\"30%\" height=\"30%\"></a><P>" . "<P> comment:<P>" . $fixcomment . "<P><a href=\"#" . $srt . "\">In response to:". $srt ."</a>" . "</font></div></blockquote></P>" . "\n";
	}
	else
	{
	$file_contents =  "<P><div id=\"" . $fixed . $safetitle . $fixdate ."\"><hr style=\"background:#888888; border:0; height:2px\" /><blockquote><font size=\"2\">" . "title:<font size=\"3\">" . $safetitle . "</font><P>username:<font size=\"3\">" . $fixed .  "</font><P>Date:" . $fixdate . "<p>sub-replyid:" . $fixed . $safetitle . $fixdate . "<P><a href=\"" . $fiximg . "\"target=\"_blank\"><img src=\"" . $fiximg . "\"></a><P>" . "<P> comment:<P>" . $fixcomment . "<P><a href=\"#" . $srt . "\">In response to:". $srt ."</a>" . "</font></div></blockquote></P>" ."\n";
	}
	fwrite($file_handle, $file_contents);
	fclose($file_handle);

	print "Done! :)<head>
	<script type=\"text/javascript\">
   window.location=\"replies.html\";
	</script>
	</head>";
	}
}
else if(strlen($fixtitle) > 0)
	{
	$file_handle = fopen("commentposts/" . $fixtitle . ".php", "a+");
	if(strlen($fiximg) > 0)
	{
	$file_contents =  "<P><div id=\"" . $fixed . $safetitle . $fixdate ."\"><hr style=\"background:#888888; border:0; height:2px\" /><blockquote><font size=\"2\">" . "title:<font size=\"4\">" . $safetitle . "</font><P>username:<font size=\"3\">" . $fixed .  "</font><P>Date:" . $fixdate . "<p>sub-replyid:" . $fixed . $safetitle . $fixdate . "<P><a href=\"" . $fiximg . "\"target=\"_blank\"><img src=\"" . $fiximg . "\" width=\"30%\" height=\"30%\"></a><P>" . "<P> comment:<P>" . $fixcomment . "<P><a href=\"#" . $fixtitle . "\">In response to:". $fixtitle ."</a>" . "</font></div></blockquote></P>" . "\n";
	}
	else
	{
	$file_contents =  "<P><div id=\"" . $fixed . $safetitle . $fixdate ."\"><hr style=\"background:#888888; border:0; height:2px\" /><blockquote><font size=\"2\">" . "title:<font size=\"3\">" . $safetitle . "</font><P>username:<font size=\"3\">" . $fixed .  "</font><P>Date:" . $fixdate . "<p>sub-replyid:" . $fixed . $safetitle . $fixdate . "<P><a href=\"" . $fiximg . "\"target=\"_blank\"><img src=\"" . $fiximg . "\"></a><P>" . "<P> comment:<P>" . $fixcomment . "<P><a href=\"#" . $fixtitle . "\">In response to:". $fixtitle ."</a>" . "</font></div></blockquote></P>" ."\n";
	}
	fwrite($file_handle, $file_contents);
	fclose($file_handle);

	print "Done! :)<head>
	<script type=\"text/javascript\">
	window.location=\"replies.html\";
	</script>
	</head>";
}
else
{

if(strlen($fiximg) > 0)
{
$file_handle = fopen("commentposts/" . $fixed . $safetitle . $fixdate . ".php", "c+");
$old_content = file_get_contents($fixed . $safetitle . $fixdate .".php");
$file_contents =  $meta . "title:<font size=\"3\">" . $safetitle . "</font><P>username:<font size=\"3\">" . $fixed .  "</font><P>Date:" . $fixdate . "<p>replyid:" . $fixed . $safetitle . $fixdate . "<P><a href=\"" . $fiximg . "\"target=\"_blank\"><img src=\"" . $fiximg . "\" width=\"30%\" height=\"30%\"></a><P>" . "<P> comment:<P>" . $fixcomment . "</P>" ."\n". $old_content;
fwrite($file_handle, $file_contents);
fclose($file_handle);
}
else
{
$file_handle = fopen("commentposts/" .$fixed . $safetitle . $fixdate . ".php", "c+");
$old_content = file_get_contents($fixed . $safetitle . $fixdate .".php");
$file_contents =  $meta . "title:<font size=\"3\">" . $safetitle . "</font><P>username:<font size=\"3\">" . $fixed .  "</font><P>Date:" . $fixdate . "<p>replyid:" . $fixed . $safetitle . $fixdate . "<P><a href=\"" . $fiximg . "\"target=\"_blank\"><img src=\"" . $fiximg . "\"></a><P>" . "<P> comment:<P>" . $fixcomment . "</P>" ."\n". $old_content;
fwrite($file_handle, $file_contents);
fclose($file_handle);
}


$file_handle = fopen("replypostlist.php", "c+");

$file_contents = "<?php 
error_reporting(0);
\$file_handle = fopen(\"commentposts/" . $fixed . $safetitle . $fixdate . ".php\", \"r+\");
\$content = file_get_contents(\"commentposts/". $fixed . $safetitle . $fixdate . ".php\");
print \$content;
fclose(\$file_handle);
?>\n</div></pre></p>" . file_get_contents("replypostlist.php");
fwrite($file_handle, $file_contents);
fclose($file_handle);


print "Done! :)<head>
<script type=\"text/javascript\">
   window.location=\"replies.html\";
</script>
</head>";
}


?>
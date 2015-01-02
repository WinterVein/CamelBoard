<head>
<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.1.1-dist/css/bootstrap.css" />
</head>
<?php
require("timezone.php"); // You can Change this to your timezone if you want find list of timezones here:http://php.net/manual/en/timezones.php
$date = date('Y_m_d-H.i.s');// Year_Month_Date-Hour.Minute.Second
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
$fiximg = htmlentities($img); //might want to change this to a striptags(); function, im not sure yet though :'C im kind of torn about if this works or not, im scared it breaks links
$srts = htmlentities($srto);
$fixtitlel = nl2br($fixtitles);
$fixcommentl= nl2br($fixcomments);
$fixedl = nl2br($fixeds);
$srtl = nl2br($srts);
$safetitlel = nl2br($safetitles);
$safetitle = str_replace(array("\r\n", "\r", "\n"), "", $safetitlel);
$fixreplyid = str_replace(array("\r\n", "\r", "\n"), "", $fixtitlel);
$fixcomment = str_replace(array("\r\n", "\r", "\n"), "", $fixcommentl);
$fixed = str_replace(array("\r\n", "\r", "\n"), "", $fixedl);
$srt = str_replace(array("\r\n", "\r", "\n"), "", $srtl);
$meta = "<P><div id=\"" . $fixed . $fixdate ."\"><pre class=\"chanbody\">";
$metae = "</div></pre></P>";
//$mreplyid = $fixtitle . $fixdate;
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
else if(strlen($srt) > 0)
{
if(strlen($fixreplyid) <= 0)
{
	print "if you enter a sub-reply id, you must enter a replyid for the original thread<P>refresh the page and try again,";
}

else{
	$file_handle = fopen("commentposts/" . $fixreplyid . ".php", "a+");
	if(strlen($fiximg) > 0)
	{
	$file_contents =  "<P><div id=\"" . $fixed . $fixdate ."\"><hr style=\"background:#888888; border:0; height:1px\" /><blockquote><pre class=\"chanbody\"><font size=\"2\">" . "title:<font size=\"4\">" . $safetitle . "</font><P>username:<font size=\"3\">" . $fixed .  "</font><P>Date:" . $fixdate . "<p>sub-replyid:" . $fixed . $fixdate . "<P><a href=\"" . $fiximg . "\"target=\"_blank\"><img src=\"" . $fiximg . "\" width=\"30%\" height=\"30%\"></a><P>" . "<P> comment:<P>" . $fixcomment . "<P><a href=\"#" . $srt . "\">In response to:". $srt ."</a>" . "</font></div></blockquote></P>" . "\n";
	}
	else
	{
	$file_contents =  "<P><div id=\"" . $fixed . $fixdate ."\"><hr style=\"background:#888888; border:0; height:1px\" /><blockquote><pre class=\"chanbody\"><font size=\"2\">" . "title:<font size=\"3\">" . $safetitle . "</font><P>username:<font size=\"3\">" . $fixed .  "</font><P>Date:" . $fixdate . "<p>sub-replyid:" . $fixed . $fixdate . "<P><a href=\"" . $fiximg . "\"target=\"_blank\"><img src=\"" . $fiximg . "\"></a><P>" . "<P> comment:<P>" . $fixcomment . "<P><a href=\"#" . $srt . "\">In response to:". $srt ."</a>" . "</font></div></blockquote></P>" ."\n";
	}
	fwrite($file_handle, $file_contents);
	fclose($file_handle);

	print "Done! :)<head>
	<script type=\"text/javascript\">
   window.location=\"replies.php\";
	</script>
	</head>";
	}
}
else if(strlen($fixreplyid) > 0)
	{
	$file_handle = fopen("commentposts/" . $fixreplyid . ".php", "a+");
	if(strlen($fiximg) > 0)
	{
	$file_contents =  "<P><div id=\"" . $fixed . $fixdate ."\"><hr style=\"background:#888888; border:0; height:1px\" /><blockquote><pre class=\"chanbody\"><font size=\"2\">" . "title:<font size=\"4\">" . $safetitle . "</font><P>username:<font size=\"3\">" . $fixed .  "</font><P>Date:" . $fixdate . "<p>sub-replyid:" . $fixed . $fixdate . "<P><a href=\"" . $fiximg . "\"target=\"_blank\"><img src=\"" . $fiximg . "\" width=\"30%\" height=\"30%\"></a><P>" . "<P> comment:<P>" . $fixcomment . "<P><a href=\"#" . $fixreplyid . "\">In response to:". $fixreplyid ."</a>" . "</font></div></blockquote></P>" . "\n";
	}
	else
	{
	$file_contents =  "<P><div id=\"" . $fixed . $fixdate ."\"><hr style=\"background:#888888; border:0; height:1px\" /><blockquote><pre class=\"chanbody\"><font size=\"2\">" . "title:<font size=\"3\">" . $safetitle . "</font><P>username:<font size=\"3\">" . $fixed .  "</font><P>Date:" . $fixdate . "<p>sub-replyid:" . $fixed . $fixdate . "<P><a href=\"" . $fiximg . "\"target=\"_blank\"><img src=\"" . $fiximg . "\"></a><P>" . "<P> comment:<P>" . $fixcomment . "<P><a href=\"#" . $fixreplyid . "\">In response to:". $fixreplyid ."</a>" . "</font></div></blockquote></P>" ."\n";
	}
	fwrite($file_handle, $file_contents);
	fclose($file_handle);

	print "Done! :)<head>
	<script type=\"text/javascript\">
	window.location=\"replies.php\";
	</script>
	</head>";
}
else
{

if(strlen($fiximg) > 0)
{
$file_handle = fopen("commentposts/" . $fixed . $fixdate . ".php", "c+");
$old_content = file_get_contents($fixed . $fixdate .".php");
$file_contents =  $meta . "title:<font size=\"3\">" . $safetitle . "</font><P>username:<font size=\"3\">" . $fixed .  "</font><P>Date:" . $fixdate . "<p>replyid:" . $fixed . $fixdate . "<P><a href=\"" . $fiximg . "\"target=\"_blank\"><img src=\"" . $fiximg . "\" width=\"30%\" height=\"30%\"></a><P>" . "<P> comment:<P>" . $fixcomment . "</P>" ."\n". $old_content;
fwrite($file_handle, $file_contents);
fclose($file_handle);
}
else
{
$file_handle = fopen("commentposts/" .$fixed . $fixdate . ".php", "c+");
$old_content = file_get_contents($fixed . $fixdate .".php");
$file_contents =  $meta . "title:<font size=\"3\">" . $safetitle . "</font><P>username:<font size=\"3\">" . $fixed .  "</font><P>Date:" . $fixdate . "<p>replyid:" . $fixed . $fixdate . "<P><a href=\"" . $fiximg . "\"target=\"_blank\"><img src=\"" . $fiximg . "\"></a><P>" . "<P> comment:<P>" . $fixcomment . "</P>" ."\n". $old_content;
fwrite($file_handle, $file_contents);
fclose($file_handle);
}


$file_handle = fopen("replypostlist.php", "c+");

$file_contents = "\n
<?php 
error_reporting(0);
\$file_handle = fopen(\"commentposts/" . $fixed . $fixdate . ".php\", \"r+\");
\$content = file_get_contents(\"commentposts/". $fixed . $fixdate . ".php\");
print \$content;
fclose(\$file_handle);
?>\n</div></pre></p>" . file_get_contents("replypostlist.php");
fwrite($file_handle, $file_contents);
fclose($file_handle);


print "Done! :)<head>
<script type=\"text/javascript\">
   window.location=\"replies.php\";
</script>
</head>";
}


?>

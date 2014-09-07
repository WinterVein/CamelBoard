<head>
<link rel="stylesheet" type="text/css" href="bootstrap-3.1.1-dist/css/bootstrap.css" />
</head>
<?php
require("timezone.php"); // You can Change this to your timezone if you want find list of timezones here:http://php.net/manual/en/timezones.php
$date = date('Y-m-d H:i:s');
$captcha = $_GET['captcha'];
$title = $_GET['title'];
$retitle = $_GET['replyto'];
$uname = $_GET['uname'];
$img = $_GET['img'];
$comment = $_GET['comment'];
$fixdate = htmlentities($date);
$fixed = htmlentities($uname);
$fixtitle = htmlentities($retitle);
$safetitle = htmlentities($title); 
$fixcomment = htmlentities($comment);
$fiximg = htmlentities($img);
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
else
{
$file_handle = fopen("replypostlist.html", "r+");
$old_content = file_get_contents("replypostlist.html");


if(strlen($fiximg) > 0)
{
$file_contents =  $meta . "title:<font size=\"3\">" . $safetitle . "</font><P>username:<font size=\"3\">" . $fixed .  "</font><P>Date:" . $fixdate . "<p>replyid:" . $fixed . $safetitle . $fixdate . " <P><a href=\"" . $fiximg . "\"target=\"_blank\"><img src=\"" . $fiximg . "\" width=\"30%\" height=\"30%\"></a><P>" . "<P> comment:<P>" . $fixcomment . "<P><a href=\"#" . $fixtitle . "\">In response to:". $fixtitle ."</a>" . $metae ."\n". $old_content;
}
else
{
$file_contents =  $meta . "title:<font size=\"3\">" . $safetitle . "</font><P>username:<font size=\"3\">" . $fixed .  "</font><P>Date:" . $fixdate . "<p>replyid:" . $fixed . $safetitle . $fixdate . " <P><a href=\"" . $fiximg . "\"target=\"_blank\"><img src=\"" . $fiximg . "\"></a><P>" . "<P> comment:<P>" . $fixcomment . "<P><a href=\"#" . $fixtitle . "\">In response to:". $fixtitle ."</a>" . $metae ."\n". $old_content;
}

fwrite($file_handle, $file_contents);
fclose($file_handle);



print "Done! :)<head>
<script type=\"text/javascript\">
   window.location=\"replies.html\";
</script>
</head>";
}
?>
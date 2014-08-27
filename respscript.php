<?php
$date = $_GET['date'];
$title = $_GET['title'];
$retitle = $_GET['replyto'];
$uname = $_GET['uname'];
$img = $_GET['img'];
$comment = $_GET['comment'];
$fixdate = strip_tags($date);
$fixed = strip_tags($uname);
$fixtitle = strip_tags($retitle);
$safetitle = strip_tags($title); 
$fixcomment = htmlentities($comment);
$fiximg = htmlentities($img);
$meta = "<P><div id=\"" . $fixed . $safetitle . $fixdate ."\"><pre>";
$metae = "</div></pre></P>";
$mreplyid = $fixtitle . $fixdate;

$file_handle = fopen("replypostlist.html", "r+");
$old_content = file_get_contents("replypostlist.html");



$file_contents =  $meta . "title:" . $safetitle . "<p>replyid:" . $fixed . $safetitle . $fixdate . "<P>Date:" . $fixdate ."<P>username:" . $fixed . " <P><img src=\"" . $fiximg . "\"><P>" . "<P> comment:" . $fixcomment . "<P><a href=\"#" . $fixtitle . "\">In response to:". $fixtitle ."</a>" . $metae . $old_content;


fwrite($file_handle, $file_contents);
fclose($file_handle);



print "Done! :) Refresh the Page If you want to view your new post.";
?>
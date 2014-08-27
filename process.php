<?php
$title = $_GET['title'];
$date = $_GET['date'];
$meta = "<P><div><pre>";
$metae = "</div></pre></P>";
$img = $_GET['img'];
$comment = $_GET['comment'];

$file_handle = fopen("blogpostlist.html", "r+");
$old_content = file_get_contents("blogpostlist.html");
$file_contents = $meta . "Title:" . $title . "     " . "Date:" . $date . " <P><img src=\"" . $img . "\"><P>" . "<P> comment:" . $comment . $metae . $old_content;

fwrite($file_handle, $file_contents);
fclose($file_handle);
print "Done! :) <a href=\"index.html\">click here to go back to home</a><P>\"<a href=\"blogpostlist.html\">click here to view content list</a>";
?>
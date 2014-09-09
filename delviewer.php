<html>
<body>
<style type="text/css" media="screen">
    #editor { 
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
		
        left: 0;
		}
		 .over {
        z-index: 10;
        pointer-events: none;
        background: white;
    }
    
</style>
<div id="editor"><?php 
$file_handle = fopen("replypostlist.html", "r+");
$content = file_get_contents("replypostlist.html");
$fixcontent = htmlentities($content);
print $fixcontent;
fclose($file_handle);
?>
</div>
<script src="/ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.getSession().setMode("ace/mode/HTML");
</script>
</body>
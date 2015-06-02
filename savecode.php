<?php
$file = "savedfiles/".$_GET['filename'];

if(file_exists($file)){
	die('File already exists');
}

$fileHandle = fopen($file,'w') or die('Unable to create file');

$content = "
<!DOCTYPE html>
<html lang=\"en\">
<head>
	<meta charset=\"utf-8\">
	<title>{$_GET['filename']}</title>
<style type=\"text/css\">
{$_GET['style']}
</style>
</head>
<body>
{$_GET['markup']}
<script type=\"text/javascript\" src=\"js/jquery.js\"></script>
<script type=\"text/javascript\">
{$_GET['script']}
</script>
</body>
</html>
";

fwrite($fileHandle, $content);
fclose($fileHandle);
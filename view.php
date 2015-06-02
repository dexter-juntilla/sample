<!DOCTYPE html>
<html>
<head>
	<title>Saved snippets</title>
</head>
<body>
	<div class="container-fluid">
		<?php
			$itr = new DirectoryIterator('savedfiles');
			foreach ($itr as $file) {
				if(strpos($file, '.') !== 0){
					echo '<a href="savedfiles/'.$file.'" target="contentFrame">'.$file.'</a><br>';
				}
			}
		?>
	</div>
	<div><iframe style="width:100%;height:1000px;border:none;" name="contentFrame" id="contentFrame"></iframe></div>
</body>
</html>

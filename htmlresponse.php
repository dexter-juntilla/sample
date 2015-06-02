<?php
echo "
	<?php? include ''>
	<html>
		<head>
			<style>
				{$_GET['style']}
			</style>
		<head>
		<body>
			{$_GET['markup']}
		</body>
	</html>
";
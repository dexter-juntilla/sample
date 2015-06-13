<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Test</title>
	<link rel="stylesheet" type="text/css" href="css/canvastester.css">
	<link rel="stylesheet" href="codemirror-4.7/lib/codemirror.css">
	<link rel="stylesheet" href="codemirror-4.7/addon/display/fullscreen.css">
	<link rel="stylesheet" href="codemirror-4.7/theme/ambiance.css">
</head>
<body>
	
	<div style="padding: 3px;">
		<form method="get" action="">
			<input type="button" name="runPHP" id="runPHP" value="RUN" accesskey="r" />
			<input type="button" name="clear" id="clear" value="CLEAR" accesskey="l" />
			<input type="number" name="clear" id="width" value="400" />
			<input type="number" name="clear" id="height" value="400" />
			Grid<input type="checkbox" id="grid" checked="" />
			x-axis = <input type="text" id="cursorX" />
			y-axis = <input type="text" id="cursorY" />
		</form>

	</div>
	<div id="container">

		<form method="get" action="">

			<textarea class="code" name="markup" id="markup" placeholder="">
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var width = canvas.width;
var height = canvas.height;
</textarea>
		</form>	
	</div>

	
	<div name="output" id="output"><canvas id="canvas" width="400" height="400"></canvas></div>

	<script src="codemirror-4.7/lib/codemirror.js"></script>
	<script src="codemirror-4.7/mode/clike/clike.js"></script>
	<script src="codemirror-4.7/mode/javascript/javascript.js"></script>
	<script src="codemirror-4.7/mode/htmlmixed/htmlmixed.js"></script>
	<script src="codemirror-4.7/mode/htmlembedded/htmlembedded.js"></script>
	<script src="codemirror-4.7/mode/xml/xml.js"></script>
	<script src="codemirror-4.7/mode/css/css.js"></script>
	<script src="codemirror-4.7/mode/php/php.js"></script>
	<script src="codemirror-4.7/addon/display/placeholder.js"></script>
	<script src="codemirror-4.7/addon/selection/active-line.js"></script>
	<script src="codemirror-4.7/addon/edit/closebrackets.js"></script>
	<script src="codemirror-4.7/addon/edit/matchbrackets.js"></script>
	<script src="codemirror-4.7/addon/display/fullscreen.js"></script>	
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/canvastester.js"></script>
</body>
</html>

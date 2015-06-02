<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
	<title>PHP Test</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/htmltester.css">
	<link rel="stylesheet" href="codemirror-4.7/lib/codemirror.css">
	<link rel="stylesheet" href="codemirror-4.7/addon/display/fullscreen.css">
	<link rel="stylesheet" href="codemirror-4.7/theme/monokai.css">
</head>
<body>
	
	<div style="padding: 3px;">
		<form method="get" action="" >
			<!--input type="button" name="runHTML" id="runHTML" value="RUN HTML/CSS" /-->
			<input type="button" name="runJS" id="runJS" value="RUN JAVASCRIPT" />
			<input type="button" name="clear" id="clear" value="CLEAR" />
			<input type="text" name="filename" id="filename" placeholder="name of html/php file"/>
			<p id="fileexists" style="display:inline; color:red;"></p>
			<input type="button" name="save" id="save" value="SAVE" />
			<select id="bg" name="bg">
				<option value="img/blue.png" selected="selected">blue print</option>
				<option value="img/wood.png">wood</option>
				<option value="img/white.php">none</option>
			</select>
			<span><a href="view.php" target="_blank">View saved code snippets</a></span>
		</form>
	</div>
	<div id="wrapper">
		<div id="container" name="container">

			<form method="get" action="">

				<textarea class="code" name="markup" id="markup" placeholder="HTML goes here">
&lt;div id=&quot;d&quot;&gt;
    &lt;p id=&quot;pa&quot;&gt;click this text&lt;/p&gt; 
    &lt;button id=&quot;btn&quot; name=&quot;btn&quot; &gt; 
        button
    &lt;/button&gt;
&lt;/div&gt;
				</textarea>
				<textarea class="code" name="style" id="style" placeholder="CSS goes here">
@-webkit-keyframes bounce{
	0%{
		margin: 196px 150px;
		-webkit-transform: rotate(-20deg);
		-ms-transform: rotate(-20deg); 
		transform: rotate(-20deg);
		-ms-transform: scale(1,.8);
		-webkit-transform: scale(1,.8);
		transform: scale(1,.8);

	}
	25%{
		margin: 147px 168px;
		-ms-transform: scale(1,1);
		-webkit-transform: scale(1,1);
		transform: scale(1,1);

	}
	50%{
		margin: 98px 188px;
		-ms-transform: scale(1,1);
		-webkit-transform: scale(1,1);
		transform: scale(1,1);

	}
	75%{
		margin: 49px 206px;
		-ms-transform: scale(1,1);
		-webkit-transform: scale(1,1);
		transform: scale(1,1);

	}
	100%{
		margin: 0px 240px;
		-webkit-transform: rotate(30deg);
		-ms-transform: rotate(30deg); 
		transform: rotate(30deg);
		-ms-transform: scale(.9,1);
		-webkit-transform: scale(.9,1);
		transform: scale(.9,1);

	}
}

@keyframes bounce{
	0%{
		margin: 196px 150px;
		-webkit-transform: rotate(-20deg);
		-ms-transform: rotate(-20deg); 
		transform: rotate(-20deg);
		-ms-transform: scale(1,.8);
		-webkit-transform: scale(1,.8);
		transform: scale(1,.8);

	}
	25%{
		margin: 147px 168px;
		-ms-transform: scale(1,1);
		-webkit-transform: scale(1,1);
		transform: scale(1,1);

	}
	50%{
		margin: 98px 188px;
		-ms-transform: scale(1,1);
		-webkit-transform: scale(1,1);
		transform: scale(1,1);

	}
	75%{
		margin: 49px 206px;
		-ms-transform: scale(1,1);
		-webkit-transform: scale(1,1);
		transform: scale(1,1);

	}
	100%{
		margin: 0px 240px;
		-webkit-transform: rotate(30deg);
		-ms-transform: rotate(30deg); 
		transform: rotate(30deg);
		-ms-transform: scale(.9,1);
		-webkit-transform: scale(.9,1);
		transform: scale(.9,1);

	}
}

#pa{
	font-size: 2em;
    -webkit-transition: width 2s, height 2s, -webkit-transform 2s; 
    transition: width 2s, height 2s, transform 2s;
}
#pa:hover{
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
}
#btn{
	border:none;
	padding:20px 5px;
	position:relative;
	text-shadow: 1px 1px 1px #FF0000;
	font-weight: 600;
	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
	border-radius: 50px;
	animation-name: bounce;
    animation-duration: 1s;
    animation-timing-function: linear;
    animation-delay: 0s;
    animation-iteration-count: infinite;
    animation-direction: alternate-reverse;
    animation-play-state: running;
	-webkit-animation-name: bounce;
    -webkit-animation-duration: 1s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-delay: 0s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-direction: alternate-reverse;
    -webkit-animation-play-state: running;

}

#btn:hover{
	-webkit-transform: rotateY(180deg);
	transform: rotateY(180deg);
}

#d{
	border:none;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	position: relative;
	margin: auto;
	width: 300px;
	height: 300px;
	padding: 3px;
	-webkit-border-radius: 25px;
	-moz-border-radius: 25px;
	border-radius: 25px;
	-webkit-box-shadow:15px 15px 15px #ccc;
	-moz-box-shadow:15px 15px 15px #ccc;
	box-shadow:15px 15px 15px #ccc;
	-webkit-transform: rotate(30deg);
	 -ms-transform: rotate(30deg); 
    transform: rotate(30deg);
	-webkit-background: repeating-radial-gradient( #FFAFBD 5%, #C9FFBF 10%);
	-moz-background: repeating-radial-gradient( #FFAFBD 5%, #C9FFBF 10%);
	-o-background: repeating-radial-gradient( #FFAFBD 5%, #C9FFBF 10%);
	background: repeating-radial-gradient( #FFAFBD 5%, #C9FFBF 10%);
	-webkit-transform-origin: 30px 40px;
	-ms-transform-origin: 30px 40px;
	transform-origin: 30px 40px;
	-webkit-transform-style: preserve-3d;
	transform-style: preserve-3d;
}

				

				 

				

				</textarea>
				<textarea class="code" name="script" id="script" placeholder="Javascript goes here">
document.getElementById('btn').addEventListener('click', function(){
	alert('Button was clicked');
});

$(document).ready(function(){
  	$("p").click(function(){
    	$(this).css('color','red');
  	});
});
				</textarea>
			</form>	
		</div>
	</div>
	
	<div name="output" id="output"></div>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="codemirror-4.7/lib/codemirror.js"></script>
	<script src="codemirror-4.7/mode/javascript/javascript.js"></script>
	<script src="codemirror-4.7/mode/php/php.js"></script>
	<script src="codemirror-4.7/mode/clike/clike.js"></script>
	<script src="codemirror-4.7/mode/htmlmixed/htmlmixed.js"></script>
	<script src="codemirror-4.7/mode/htmlembedded/htmlembedded.js"></script>
	<script src="codemirror-4.7/mode/xml/xml.js"></script>
	<script src="codemirror-4.7/mode/css/css.js"></script>
	<script src="codemirror-4.7/addon/display/placeholder.js"></script>
	<script src="codemirror-4.7/addon/selection/active-line.js"></script>
	<script src="codemirror-4.7/addon/edit/closebrackets.js"></script>
	<script src="codemirror-4.7/addon/edit/closetag.js"></script>
	<script src="codemirror-4.7/addon/display/fullscreen.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/htmltester.js"></script>
</body>
</html>

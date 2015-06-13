function init() {
	if (window.Event) {
	document.captureEvents(Event.MOUSEMOVE);
	}
	document.getElementById('canvas').onmousemove = getCursorXY;
}

function getCursorXY(e) {
	var x = (window.Event) ? e.pageX : event.clientX + (document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft);
	var y = (window.Event) ? e.pageY : event.clientY + (document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop);
	document.getElementById('cursorX').value = x-612;
	document.getElementById('cursorY').value = y-38;
}

window.onload = function(){

	init();

  	var markupEditor = CodeMirror.fromTextArea(document.getElementById("markup"), {
        lineNumbers: true,
        lineWrapping: true,
        mode: "javascript",
        autoCloseBrackets: true,
		styleActiveLine: true,
        indentUnit: 4,
        indentWithTabs: true,
    	extraKeys: {
	        "F11": function(cm) {
	          cm.setOption("fullScreen", !cm.getOption("fullScreen"));
	        },
	        "Esc": function(cm) {
	          if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
	        }
    	}

    });

	document.getElementById('width').onchange = function(){
		document.getElementById('canvas').width = this.value;
		eval(markupEditor.getValue());
	}

	document.getElementById('height').onchange = function(){
		document.getElementById('canvas').height = this.value;
		eval(markupEditor.getValue());
	}

	document.getElementById('grid').onchange = function(){
		if(this.checked)
			document.getElementById('output').style.backgroundImage = "url('img/blue.png')";
		else
			document.getElementById('output').style.background = "#fff";
	}

	eval(markupEditor.getValue());

	markupEditor.setSize(null, 530);

    markupEditor.setOption("theme", "ambiance");

	document.getElementById('runPHP').onclick = function(){
		eval(markupEditor.getValue());
	}

	document.getElementById('clear').onclick = function(){
		markupEditor.setValue(
			"var canvas = document.getElementById('canvas');"
			+"\nvar context = canvas.getContext('2d');"
			+"\nvar width = canvas.width;"
			+"\nvar height = canvas.height;"
			);
		eval(markupEditor.getValue());
	}
}
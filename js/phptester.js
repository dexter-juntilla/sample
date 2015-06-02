window.onload = function(){

  	var markupEditor = CodeMirror.fromTextArea(document.getElementById("markup"), {
        lineNumbers: true,
        lineWrapping: true,
        mode: "application/x-httpd-php",
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

    markupEditor.setOption("theme", "ambiance");

	var htmlRequest = new AjaxRequest(
		"phpresponse.php",
		"output",
		["markup"]
	);

	htmlRequest.execute(
		htmlRequest.createQueryString(
			[markupEditor.getValue()]
		)
	);  

	document.getElementById('runPHP').onclick = function(){
		htmlRequest.execute(
			htmlRequest.createQueryString(
				[markupEditor.getValue()]
			)
		); 
	}

	document.getElementById('clear').onclick = function(){
		markupEditor.setValue("<?php\n");
		htmlRequest.execute(
			htmlRequest.createQueryString(
				[markupEditor.getValue()]
			)
		);  
	}


/*	var phpRequest = new AjaxRequest("phpresponse.php", "output", ["markup"]);
	phpRequest.execute();

	document.getElementById('runPHP').onclick = function(){
		phpRequest.execute();
	}

	document.getElementById('clear').onclick = function(){
		document.getElementById('markup').value = "";
		phpRequest.execute();
	}
	*/
}
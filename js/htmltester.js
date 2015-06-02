window.onload = function(){
	
  	var markupEditor = CodeMirror.fromTextArea(document.getElementById("markup"), {
        lineNumbers: true,
        lineWrapping: true,
        mode: 'text/html',
        autoCloseTags: true,
		styleActiveLine: true,
        indentUnit: 4,
        indentWithTabs: true,
    	extraKeys: {
	        "F10": function(cm) {
	          cm.setOption("fullScreen", !cm.getOption("fullScreen"));
	        },
	        "Esc": function(cm) {
	          if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
	        }
    	}

    });
        
    var styleEditor = CodeMirror.fromTextArea(document.getElementById("style"), {
        lineNumbers: true,
        lineWrapping: true,
        mode: "css",
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

    var scriptEditor = CodeMirror.fromTextArea(document.getElementById("script"), {
        lineNumbers: true,
        lineWrapping: true,
        mode: "javascript",
        autoCloseBrackets: true,
		styleActiveLine: true,
        indentUnit: 4,
        indentWithTabs: true,
    	extraKeys: {
	        "F12": function(cm) {
	          cm.setOption("fullScreen", !cm.getOption("fullScreen"));
	        },
	        "Esc": function(cm) {
	          if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
	        }
    	}
	});
	
	markupEditor.setOption("theme", "monokai");
	styleEditor.setOption("theme", "monokai");
	scriptEditor.setOption("theme", "monokai");
	
	var htmlRequest = new AjaxRequest(
		"htmlresponse.php",
		"output",
		["markup", "style"]
	);

	htmlRequest.execute(
		htmlRequest.createQueryString(
			[markupEditor.getValue(), styleEditor.getValue()]
		)
	);  

  	markupEditor.on("keyup", function(){
		htmlRequest.execute(
			htmlRequest.createQueryString(
				[markupEditor.getValue(), styleEditor.getValue()]
			)
		);  		
	});

	styleEditor.on("keyup", function(){
		htmlRequest.execute(
			htmlRequest.createQueryString(
				[markupEditor.getValue(), styleEditor.getValue()]
			)
		);  		
	});

	document.getElementById('clear').onclick = function(){
		markupEditor.setValue("");
		styleEditor.setValue("");
		scriptEditor.setValue("");
		htmlRequest.execute(
			htmlRequest.createQueryString(
				[markupEditor.getValue(), styleEditor.getValue()]
			)
		);  
	}

	document.getElementById('bg').onchange = function(){
		document.getElementById('output').style.backgroundImage = "url("+document.getElementById('bg').value+")";
	}

	document.getElementById('save').onclick = function(){
		if(checkFileName(document.getElementById('filename').value)){
			var saveFile = new AjaxRequest(
				"savecode.php", 
				"fileexists", 
				["markup", "style", "script", "filename"] 
			);
			saveFile.execute(
				saveFile.createQueryString([
					markupEditor.getValue(), 
					styleEditor.getValue(), 
					scriptEditor.getValue(), 
					document.getElementById('filename').value
				])
			);
		}
	}

	document.getElementById('runJS').onclick = function(){
		eval(scriptEditor.getValue());
	}
/*	var htmlRequest = new AjaxRequest("htmlresponse.php", "output", [markupEditor.getValue(), styleEditor.getValue()] );
	htmlRequest.execute();

	document.getElementById('markup').onkeydown = function(){		
		htmlRequest.execute();
	}

	document.getElementById('style').onkeydown = function(){		
		htmlRequest.execute();
	}

	document.getElementById('runJS').onclick = function(){
		eval(document.getElementById('script').value);
	}

	document.getElementById('clear').onclick = function(){
		document.getElementById('markup').value = "";
		document.getElementById('style').value = "";
		document.getElementById('script').value = "";
		htmlRequest.execute();
	}

	document.getElementById('save').onclick = function(){
		if(checkFileName(document.getElementById('filename').value)){
			var saveFile = new AjaxRequest("savecode.php", "fileexists", ["markup", "style", "script", "filename"] );
			saveFile.execute();
		}
	}

	document.getElementById('bg').onchange = function(){
		document.getElementById('output').style.backgroundImage = "url("+document.getElementById('bg').value+")";
	}
*/
}

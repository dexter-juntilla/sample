function AjaxRequest(url, targetElement, fieldArray){
	
	this.url = url;

	this.targetElement = targetElement;

	this.fieldArray = fieldArray;

	this.createQueryString = function(valueArray){

		if(this.fieldArray == undefined || valueArray == undefined){
			return "";
		} else {
			var queryString = "?";

			for (var i = 0; i < this.fieldArray.length; i++) {
				queryString += this.fieldArray[i] +"="+ encodeURIComponent(valueArray[i]);
				if (i != this.fieldArray.length - 1) {
					queryString += "&";
				};
			};
		}
		return queryString;

	}

	this.execute = function(queryString){
	
	var xmlhttp;
	
	if (window.XMLHttpRequest){
	 	xmlhttp=new XMLHttpRequest();
	}else{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
	    	document.getElementById(targetElement).innerHTML=xmlhttp.responseText;
	    }
	}
	xmlhttp.open("GET",url+queryString,true);
	xmlhttp.send();
	
	}
}

function checkFileName(filename){

	var ext = ['html','php','htm'];

	if(filename != ""){
	
		var bits = filename.split('.');
		for (var i = 0; i < ext.length; i++) {
			if(bits[1] == ext[i] && filename.length >= 6){
				return true;
			}
		}
		alert('Invalid file name');
	} else {
		alert('write a filename before saving');
	}
	return false;
}

function showSource(){;
    var source = "<html>";
    source += document.getElementsByTagName('html')[0].innerHTML;
    source += "</html>";
    //now we need to escape the html special chars, javascript has escape
    //but this does not do what we want
    source = source.replace(/</g, "&lt;").replace(/>/g, "&gt;");
    //now we add <pre> tags to preserve whitespace
    source = "<pre>"+source+"</pre>";
    //now open the window and set the source as the content
    sourceWindow = window.open('','Source of page','height=800,width=800,scrollbars=1,resizable=1');
    sourceWindow.document.write(source);
    sourceWindow.document.close(); //close the document for writing, not the window
    //give source window focus
    if(window.focus) sourceWindow.focus();
}
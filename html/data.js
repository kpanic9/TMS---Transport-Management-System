// JavaScript Document


var xmlHttp = createXmlHttpRequestObject();



//basic function to get Http XMl object
function createXmlHttpRequestObject(){
	
	var xmlHttp;
	
		
	try{
		xmlHttp = new XMLHttpRequest();
	}
	catch( Exception e ){
		xmlHttp = false;
	}
	
	if( !xmlHttp ){
		
	}
	else{
		return xmlHttp;
	}
	
}



//on loading page
function process(){

	if( xmlHttp.readyStste==4 || xmlHttp.readyState==0){
		var route = encodeURIComponent( document.getElementById("route").value;
		xmlHttp.open( "GET", "data.php?route="+route, true );
		xml.onreadystatechange = handleServerResponse;
		xmlHttp.send( null );
	}
	else{
		setTimeout( 'process()', 1000 );
	}
	
}




function handleServerResponse(){

	if( xmlHttp.readyState == 4 ){
		if( xmlHttp.status == 200 ){
			xmlResponse = xmlHttp.responseXML;
			xmlDocumentElement = xmlResponse.documentElement;
			message
	
}




function getContent(secretSource, divID, title){
	var XMLHttpRequestObject = false;
	if ( window.XMLHttpRequest) {
	 XMLHttpRequestObject = new XMLHttpRequest();
	}
	else if (window.ActiveXObject ) {
	 XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
	}

	if (XMLHttpRequestObject){
	  var obj = document.getElementById(divID);
	  XMLHttpRequestObject.open("GET",secretSource);

	  XMLHttpRequestObject.onreadystatechange = function(){
	  // this attaches this anonymous function to the onreadystatechange
	  // listener.

		if (XMLHttpRequestObject.readyState == 4  &&
			XMLHttpRequestObject.status == 200) {
		  document.getElementById('title').innerHTML = title;
		  obj.innerHTML = XMLHttpRequestObject.responseText;

		}
	   
	  }//end anonymous function

	  XMLHttpRequestObject.send(null);
	}
}

function laptopMouse(mouseOver)
{
	var obj = document.getElementById("win_laptop");
	if (mouseOver)
	{
		obj.src = "images/win_laptop_button_over.png";
	}
	else
	{
		obj.src = "images/win_laptop_button.png";
	}
}


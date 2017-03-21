<!DOCTYPE html>
<html>
<head>
	<title>Ajax Example</title>
</head>
<body>

	<script type="text/javascript">

		//Function to send AJAX request
		function sendRequest() {

			//Getting values dynamically from the fields
			var name = document.getElementById('name').value;
			var email = document.getElementById('email').value;

			//Creating new object for AJAX request
			var hr = new XMLHttpRequest();

			//Target url where request has to be sent
			var url = "request_handler.php";

			//Values to be sent to the page
			var vars = "name=" + name + "&" + "email=" + email;

			//Open a socket connection to page
			hr.open("POST", url, true);

			//Set header encoding
			hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

			//Set what to do after successfully executing the request
			hr.onreadystatechange = function() {
			    if(hr.status == 200) {

			    	//Getting response data
				    var return_data = hr.responseText;

				    //Passing the data to the document object
				    document.getElementById("xml-data").innerHTML = return_data;

			    }
		   	}
		    
		    //Actually send the request
		    hr.send(vars);
		}
		
		
	</script>

	<!-- Input boxes for dynamic values -->
	<input id="name" type="text" name="name">
	<br>
	<br>

	<input id="email" type="email" name="email">
	<br>
	<br>

	<!-- Buttons to send the request -->
	<button onclick="sendRequest()">Fire AJAX</button>
	<br>
	<br>

	<!-- Element to show data after execution of request -->
	Your received data is: <div id="xml-data"></div>


</body>
</html>
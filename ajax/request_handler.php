<?php 

	//Get the data sent throught AJAX
	$name = $_POST['name'];
	$email = $_POST['email'];


	//Pass the data after executing the request 
	echo "Your name is {$name}";
	echo "Your email is {$email}";

 ?>
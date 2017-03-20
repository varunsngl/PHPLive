<?php 
	
	/**
	 * Simple Login Logic for PHP
	 * @author Varun Kumar <varun@kfami.com>
	 */

	//Intitalize the session
	session_start();

	//Destroy the session to logout the user
	session_destroy();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
</head>
<body>
	You are successfully logged out.
	<a href="login.php">Login</a>
</body>
</html>
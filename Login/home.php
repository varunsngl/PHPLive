<?php

	/**
	 * Simple Login Logic for PHP
	 * @author Varun Kumar <varun@kfami.com>
	 */

	//initialize session to access session varibles
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	I'm a home page.<br>


	<?php 

		if (!isset($_SESSION['name'])) {
			header("Location: login.php");
		}
		else 
		{
			//Welcome note to logged in user
			echo "Welcome " . $_SESSION['name']; 
		}

	 ?>

	 <br>

	 <a href="logout.php">Logout</a>
</body>
</html>
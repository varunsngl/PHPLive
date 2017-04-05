<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="username">
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php

		include_once 'config.php';

		if (isset($_POST['username'])) {

			$username = $_POST['username'];

			$token = rand(10000000, 99999999);

			$insert_query = "INSERT INTO `password_reset` (`token`, `user_id`) VALUES ('{$token}', '{$username}')";

			$con->query($insert_query);

			$forget_text = "<html>";
			$forget_text .= "<body>";
			$forget_text .= "Please click here to reset your password: ";
			$forget_text .= "<a href=\"http://www.rmailweb.com/reset.php?username={$username}&token={$token}\">Click here to reset</a>";
			$forget_text .= "</body>";
			$forget_text .= "</html>";



			mail($username,"Forget Password", $forget_text, "From: do-not-reply@rmailweb.com");

		}


	?>
</body>
</html>
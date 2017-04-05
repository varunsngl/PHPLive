<?php

	include_once 'config.php';

	if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['token'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];
		$token = $_POST['token'];

		$query = "SELECT * FROM `password_reset` WHERE user_id = '{$username}' AND token = '{$token}'";

		$result = $con->query($query);

		if (!$result) {
			echo $con->error;
		}

		if ($result->num_rows > 0) {
			$password_query = "UPDATE `users` SET `password` = '{$password}' WHERE `users`.`email` = '{$username}' ";

			$result = $con->query($password_query);

			if (!$result) {
				echo $con->error;
			}
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Enter new password</title>
</head>
<body>

	<?php

		$user_id = "";
		if (isset($_POST['user_id'])) {
			$user_id = $_POST['user_id'];
		} else {
			die('Your answer was not right');
		}
	?>

	<form method="POST">
		Please enter new password:
		<input type="password" name="password">
		<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
		<input type="submit" name="submit" value="Save">
	</form>

	<?php

		require_once 'config.php';

		if (isset($_POST['submit'])) {
			if ($_POST['submit'] == 'Save') {

				$password = $_POST['password'];
				$user_id = $_POST['user_id'];

				$update_query = "UPDATE `users` SET `password` = '{$password}' WHERE `users`.`id` = {$user_id}";

				$con->query($update_query);
			}
		}
	?>

</body>
</html>
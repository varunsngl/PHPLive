<!DOCTYPE html>
<html>
<head>
	<title>Reset My Password</title>
</head>
<body>

	<?php

		$username = "";
		$token = "";

		if (isset($_GET['username']) && isset($_GET['token'])) {
			$username = $_GET['username'];
			$token = $_GET['token'];
		} else {
			die('invalid link');
		}

	 ?>
	<form action="reset_post.php" method="POST">
		<input type="text" name="username" value="<?= $username ?>" readonly>

		Enter New Password<input type="password" name="password">

		<input type="hidden" name="token" value="<?= $token ?>">

		<input type="submit" name="submit">
	</form>
</body>
</html>
<?php 


	/**
	 * Simple Login Logic for PHP
	 * @author Varun Kumar <varun@kfami.com>
	 */
	

	//Start a session
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<!-- Simple HTML Login Form -->
	<form method="POST">
		<input type="text" name="username">
		<br/>
		<br/>
		<input type="password" name="password">
		<br/>
		<br/>
		<input type="submit" name="submit" value="Login">
		<input type="reset" name="reset" value="Reset">
	</form>

	<a href="forgot.php">Forgot Password</a>

	<?php 

		//Check if username and password is sent through form on submit
		if (isset($_POST['username']) && isset($_POST['password'])) {

			$username = $_POST['username'];
			$password = $_POST['password'];

			//Establish a database connection
			$con = new mysqli('localhost', 'root', '', 'php');

			//Check if user exists in database with given credetials
			$login_query = "SELECT * FROM users WHERE email='{$username}' AND password='{$password}'";

			//Execute the query defined in previous step
			$result = $con->query($login_query);

			//Check if we returned exactly one row from database
			if ($result->num_rows == 1) {

				$name = "";

				//Fetch name of user logged in
				while ($row = $result->fetch_assoc()) {
					$name = $row['name'];
				}

				echo "Login Successful";

				//Forward the user to home page
				header("Location: home.php");

				//Store username in session to be used on other pages
				$_SESSION['name'] = $name;

			}
			
		}
	?>



</body>
</html>
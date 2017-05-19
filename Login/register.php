<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<form method="post">
		Name:
		<input type="text" name="name">
		<br/>
		Address:
		<textarea name="address"></textarea>
		<br/>
		Email
		<input type="email" name="email">
		<br/>
		Password:
		<input type="password" name="password">
		<br/>

		Select Question 1
		<select name="question-1">
			<option value="What is your favourite color?">What is your favourite color?</option>
			<option value="What is your favourite place?">What is your favourite place?</option>
			<option value="What is your nice name?">What is your nice name?</option>
			<option value="Who is your best friend?">Who is your best friend?</option>
		</select>

		<br/>
		Enter answer 1
		<input type="text" name="answer-1">
		<br/>


		<select name="question-2">
			<option value="Which was your first phone?">Which was your first phone?</option>
			<option value="Which was your first laptop?">Which was your first laptop?</option>
			<option value="Which was your first bike?">Which was your first bike?</option>
			<option value="Which was your first car?">Which was your first car?</option>
		</select>
		<br/>

		Enter answer 2
		<input type="text" name="answer-2">
		<br/>

		<input type="submit" name="submit" value="Submit">
	</form>
	<?php

		require_once 'config.php';

		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$address = $_POST['address'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$question_1 = $_POST['question-1'];
			$answer_1 = $_POST['answer-1'];
			$question_2 = $_POST['question-2'];
			$answer_2 = $_POST['answer-2'];

			$register_query = "INSERT INTO `users` (`name`, `Address`, `email`, `password`, `question_1`, `answer_1`, `question_2`, `answer_2`) VALUES ('{$name}', '{$address}', '{$email}', '{$password}', '{$question_1}', '{$answer_1}', '{$question_2}', '{$answer_2}')";

			$result = $con->query($register_query);

			if (!$result) {
				$con->error;
			}
	}



	?>
</body>
</html>
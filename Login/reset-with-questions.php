<!DOCTYPE html>
<html>
<head>
	<title>Reset with questions</title>
</head>
<body>

	<form method="POST">
		<input type="email" name="email">
		<input type="submit" name="submit" value="GO">
	</form>

	<?php

		require_once 'config.php';
		if (isset($_POST['submit'])) {

			$email = $_POST['email'];

			if ($_POST['submit'] === 'GO') {
				
				$question_query = "SELECT * FROM `users` WHERE `email` = '{$email}'";

				$result = $con->query($question_query);

				if ($result) {
					if ($result->num_rows > 0) {
						$row = $result->fetch_assoc();

						echo "<form action=\"reset-with-question-post.php\" method=\"post\">";

						echo "<h6>Question 1.: {$row['question_1']}</h6> ";
						echo "<input type=\"text\" name=\"answer-1\">";

						echo "<h6>Question 2.: {$row['question_2']}</h6> ";
						echo "<input type=\"text\" name=\"answer-2\">";

						echo "<input type=\"hidden\" name=\"user_id\" value=\"{$row['id']}\">";

						echo "<input type=\"submit\" name=\"submit\" value=\"reset\">";

						echo "</form>";
					}
				}
			}
			
		}
	?>

</body>
</html>
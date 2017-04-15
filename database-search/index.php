<!DOCTYPE html>
<html>
<head>
	<title>Database Search</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="search" placeholder="Search Products">
		<input type="submit" name="submit" value="search">
	</form>

	<?php

		include_once 'conf.php';

		$selection_query = "SELECT * FROM `products`";

		if (isset($_POST['submit'])) {

			$search = $_POST['search'];

			$selection_query = "SELECT * FROM `products` WHERE NAME LIKE '%{$search}%'";
		}

		$result = $con->query($selection_query);


		if ($result) {

			if ($result->num_rows > 0) {

				echo "<br/><br/>";

				echo "<table>";

				echo "<tr>";
					echo "<th>ID</th>";
					echo "<th>Name</th>";
					echo "<th>Price</th>";
					echo "<th>Brand</th>";
					echo "<th>Discount</th>";
				echo "</tr>";

				while ($row = $result->fetch_assoc()) {
					echo "<tr>";
						echo "<td>{$row['id']}</td>";
						echo "<td>{$row['name']}</td>";
						echo "<td>{$row['price']}</td>";
						echo "<td>{$row['brand']}</td>";
						echo "<td>{$row['discount']}</td>";
					echo "</tr>";
				}
			}
		}

		echo "</table>";

	?>
</body>
</html>
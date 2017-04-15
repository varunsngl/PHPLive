<!DOCTYPE html>
<html>
<head>
	<title>New Invoice</title>
</head>
<body>
	<form method="POST">

		<input type="text" name="buyer_name" placeholder="Buyer's Name">

		<select name="product_id">
			<?php

include_once 'conf.php';

$selection_query = "SELECT * FROM `products`";

$result = $con->query($selection_query);

if ($result) {
	
	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			echo "<option value=\"{$row['id']}\">";
				echo $row['product_name'];
			echo "</option>";
		}
	}
}


			?>
		</select>

		<input type="submit" name="submit" value="Create Bill">
	</form>

	<?php

		if (isset($_POST['submit'])) {
			
			$buyer_name = $_POST['buyer_name'];

			$product_id = $_POST['product_id'];

			$insertion_query = "INSERT INTO `billing` (buyer_name, product_id) values ('{$buyer_name}','{$product_id}')";

			$result = $con->query($insertion_query);

			if ($result) {
				echo "Bill Created Successfully";
			}
		}
	?>
</body>
</html>
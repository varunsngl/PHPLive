<!DOCTYPE html>
<html>
<head>
	<title>Show All bills</title>
</head>
<body>
	<table>
		<tr>
			<th>Bill ID</th>
			<th>Buyer's Name</th>
			<th>Order Time</th>
			<th>Product Bought</th>
			<th>Price</th>
			<th>Brand</th>
			<th>Discount</th>
			<th>Bill Amount</th>
		</tr>

		<?php

include_once 'conf.php';

$selection_query = "SELECT * FROM `billing` JOIN `products` ON `billing`.`product_id` = `products`.`id`";

$result = $con->query($selection_query);

if ($result) {
	
	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
				echo "<td>{$row['bill_id']}</td>";
				echo "<td>{$row['buyer_name']}</td>";
				echo "<td>", date("D, d M y",strtotime($row["buying_timestamp"])), "<br/>", date("h:i:s a",strtotime($row["buying_timestamp"])), "</td>";
				echo "<td>{$row['product_name']}</td>";
				echo "<td>{$row['price']}</td>";
				echo "<td>{$row['brand']}</td>";
				echo "<td>{$row['discount']}</td>";
				echo "<td>", $row['price'] - $row['discount'],"</td>";
			echo "</tr>";
		}

	}

}

		?>
	</table>
</body>
</html>
<?php 
	include_once 'config.php';

	$profile_base_path = "http://localhost/PHPLive/profile-image-database/uploads/profile/";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>All Images</title>
</head>
<body>
	<style type="text/css">
		.profile-image {
			height: 250px;
			width: 250px;
			object-fit: cover;
		}
	</style>

	<?php 
		//To select data from table 
		$selection_query = "SELECT * FROM `profile_file_upload`";
		//Executing as well as assigning the data to the variable
		$result = $con->query($selection_query);

		if ($result->num_rows > 0) {
			//Fetching the data using while loop
			while ($row = $result->fetch_assoc()) {?>

				<div style="display: inline-block;">
					<img class="profile-image" src="<?= $profile_base_path . $row['file_path']  ?>">

					<!--
						Second Method
					<?php echo "<img src=\"{$profile_base_path}my-profile.jpg\">" ?> -->
				</div>

			<?php }		//ending while loop
		}	//ending if loop
	 ?>

	
</body>
</html>

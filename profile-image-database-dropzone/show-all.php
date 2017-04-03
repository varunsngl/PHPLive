<?php 
	include_once 'config.php';

	$profile_base_path = "uploads/profile/";
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
		$selection_query = "SELECT * FROM `profile_file_upload`";
		$result = $con->query($selection_query);

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {?>

				<div style="display: inline-block;">
					<img class="profile-image" src="<?= $profile_base_path . $row['file_path']  ?>">

					<!--
						Second Method
					<?php echo "<img src=\"{$profile_base_path}my-profile.jpg\">" ?> -->
				</div>

			<?php }
		}
	 ?>

	
</body>
</html>
<?php

include_once 'config.php';	<!-- including connection file over here -->

$target_dir = "uploads/profile/";	<!-- storing file directory in a variable -->

$target_file = $target_dir . basename($_FILES["profile"]["name"]);	<!-- full file path plus file name -->

$file_name = basename( $_FILES["profile"]["name"]);	<!-- retrieving file with form using FILE global variable -->

if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)) {
	echo "The file {$file_name} has been uploaded.";

	$insert_query = "INSERT INTO `profile_file_upload` (`file_path`) VALUES ('{$file_name}')";	<!-- inserting file into database using sql query -->

	if (!$con->query($insert_query)) {	<!-- checking insertion query using connection variable -->
		echo "Unable to create a database entry<br>";
		echo $con->error;
	}
} else {
	echo "Sorry, there was an error uploading your file.";
}

?>

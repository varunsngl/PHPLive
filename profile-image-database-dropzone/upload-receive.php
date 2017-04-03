<?php

include_once 'config.php';

$target_dir = "uploads/profile/";

$target_file = $target_dir . basename($_FILES["file"]["name"]);

$file_name = basename( $_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
	echo "The file {$file_name} has been uploaded.";

	$insert_query = "INSERT INTO `profile_file_upload` (`file_path`) VALUES ('{$file_name}')";

	if (!$con->query($insert_query)) {
		echo "Unable to create a database entry<br>";
		echo $con->error;
	}
} else {
	echo "Sorry, there was an error uploading your file.";
}

?>
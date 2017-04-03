<!DOCTYPE html>
<html>
<head>
	<title>Upload Image</title>
</head>
<body>
	//Creating form to upload file using post method
	<form action="upload-receive.php" method="POST" enctype="multipart/form-data">
		
		<input type="file" name="profile">	//To select a file using file type input tag
		
		<input type="submit" name="submit">	//On submiting the control will move to upload-recieve.php file as mentioned in form action
	</form>
</body>
</html>

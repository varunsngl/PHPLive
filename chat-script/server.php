<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'chat';
 
$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname) 
or die ('Error connecting to mysql');

if (isset($_POST['message']) && isset($_POST['name'])) {
	# code...
	$message = $_POST['message'];
	$name = $_POST['name'];
 
	if($message != "")
	{
		$sql = "INSERT INTO `chat` VALUES('', '$name','$message')";
		$con->query($sql);
 	}
}
 
$sql = "SELECT * FROM `chat` ORDER BY `Id` DESC";
$result = $con->query($sql);

while($row = $result->fetch_assoc())
echo "{$row['name']} : {$row['Text']}\n";

?>
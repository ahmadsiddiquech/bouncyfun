<?php
include_once 'dbConnection.php';

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
	$title = $_POST['title'];
	$description = $_POST['description'];
	$link = $_POST['link'];

	$sql = "INSERT INTO video_table (title, description,link) VALUES ('$title' , '$description', '$link')";

	if ($conn->query($sql) === TRUE) {
	    header("location:video_dashboard.php");
	} else {
	    echo "Error";
	}
}
?>
<?php
include_once 'dbConnection.php';

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
	$title = $_POST['title'];
	$description = $_POST['description'];
	$link = $_POST['link'];

	$embed_link =  convertYoutube($link);

	$sql = "INSERT INTO video_table (title, description,link) VALUES ('$title' , '$description', '$embed_link')";

	if ($conn->query($sql) === TRUE) {
	    header("location:video_dashboard.php");
	} else {
	    echo "Error";
	}
}

function convertYoutube($string) {
	return preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","https://www.youtube.com/embed/$1",$string);
}
?>
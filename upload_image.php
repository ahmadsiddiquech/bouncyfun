<?php
include_once 'dbConnection.php';

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
	if (($_FILES['my_file']['name']!="")){
		$title = $_POST['title'];
		$description = $_POST['description'];
		$target_dir = "upload/";
		$file = $_FILES['my_file']['name'];
		$path = pathinfo($file);
		$filename = $path['filename'];
		$ext = $path['extension'];
		$temp_name = $_FILES['my_file']['tmp_name'];
		$path_filename_ext = $target_dir.$filename.".".$ext;
		move_uploaded_file($temp_name,$path_filename_ext);
		$sql = "INSERT INTO image_table (title, description,image) VALUES ('$title' , '$description', '$path_filename_ext')";
	}
	else{
		$sql ='';
	}

	if ($conn->query($sql) === TRUE) {
	    header("location:image_dashboard.php");
	} else {
	    echo "Error";
	}
}
?>
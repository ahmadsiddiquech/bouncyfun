<?php
include_once 'dbConnection.php';

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
	$email = $_POST['email'];
	$password = $_POST['Password'];
	// print_r($password);exit();

	$result = mysqli_query($conn,"SELECT *  FROM login WHERE email = '$email' and password = '$password'") or die('Error');

	$count=mysqli_num_rows($result);
	if($count==1){
		session_start();

		if(isset($_SESSION["login_session"])){
			session_unset();
		}
		$_SESSION["login_session"] = $email;

		header("Location:image_dashboard.php");
	}
	else {
		header("location:login.php");
	}
}
?>
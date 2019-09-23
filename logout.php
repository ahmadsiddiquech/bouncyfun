<?php

	session_start();

	if(isset($_SESSION["login_session"])){
		session_unset();
	}

	header("location:login.php");

?>
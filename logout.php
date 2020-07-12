<?php
	session_start(); // Starting the session for the user

	require_once 'functions.php'; // Getting all the functions from the functions.php

	if (isset($_SESSION['user'])) { // Checks if the user is logged in before loging them out.
		if (destroySession()) {
			header("Location: index.php");
			die();
		}
	}
?>	
<!-- Default html to tell the user that they have not been loged in -->
<!DOCTYPE html>
<html>
	<head>
		<title>Log out</title>
	</head>
	<body>
		<h1>Probably you are not even logged in!</h1>
		<span>Click <a href="index.php">here</a> to return to main page!</span>
	</body>
</html>
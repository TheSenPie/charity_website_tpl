<?php 
	session_start(); // Starting the user session
	echo "<!DOCTYPE html>\n<html><head>";

	require_once 'functions.php'; // Get all the functions from functions.php

	if (isset($_SESSION['user'])) // Checking if the user is logged in
	{
		$user     = $_SESSION['user']; // Saving the username
		$loggedin = TRUE;
	}
	else {
		$loggedin = FALSE;
	}

	echo <<<_END
			<!-- Required meta tags -->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

			<!-- Required css files -->
			<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="styles/style.css">


			<title>Home Page</title>
		</head>
		<body>
			<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			  	<a href="index.php" class="navbar-brand mb-0 h1">Project</a>
			  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon"></span>
			  	</button>
			  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  		<div class="navbar-nav mr-auto">
				     	<a class="nav-item nav-link section-driver" href="#carousel">Top</a>
				     	<a class="nav-item nav-link section-driver" href="#about">What we do?</a>
				     	<a class="nav-item nav-link section-driver" href="#support">Become a donor</a>
				     	<a class="nav-item nav-link section-driver" href="#contact">Contact us</a>
				    </div>
_END;
	if ($loggedin) { // Will show the dropdown on the navbar
		echo <<<_END
		<div class="navbar-nav">
			<div class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					$user
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="profile.php">Profile</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="logout.php">Log Out</a>
				</div>
			</div>
		</div>
_END;
	}
	else { // Else we will see the register and login links
		echo <<<_END
					<div class="navbar-nav">
				    	<a class="nav-item nav-link" href="login.php">Login</a>
				    	<span class="d-none d-lg-block navbar-text">/</span>
				    	<a class="nav-item nav-link" href="register.php">Register</a>
				    </div>
_END;
	}			    			
?>
				</div>
			</nav>
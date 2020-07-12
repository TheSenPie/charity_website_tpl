<?php
	session_start(); // Starting the session for the user

	require_once 'functions.php'; // Getting all the functions from the functions.php
	$error = $user = $pass = $logged = ""; // Initializing the main variables


	if (isset($_POST['user'])) { // if user filled the log in inputs
		$user = sanitizeString($_POST['user']);
		$pass = $before_salt . sanitizeString($_POST['pass']) . $after_salt;

		if ($user == "" || $pass == "")
			$error = "Not all fields were entered<br>"; // Priny alert of empty fields
		else {
			$result = queryMySQL("SELECT username,password FROM users WHERE username='$user'"); // Gets the user data from db

			if ($result->num_rows) {

				$row  = $result->fetch_array(MYSQLI_ASSOC);

				if (password_verify($pass, $row['password'])) { // Verifies if the passwords match
					$_SESSION['user'] = $user;
					$_SESSION['pass'] = $pass;
					$user = "";
					$pass = "";
					$logged = true;
				}

				else { // If the password is wrong, tells the client to retry
					$error = "<span class='error'>Username/Password invalid</span>";
				}
			}
			else {
				$error = "<span class='error'>Username/Password invalid</span>";
			}	
		}
	}

echo <<<_END
<!DOCTYPE html>
<html class="h-100">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Required css files -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="styles/style.css">

		<title>Login page</title>
	</head>
	<body class="h-100">
		<div class="container login">
		<div class="row">
_END;
	if 	($error)
		echo "<div class=\"alert alert-danger col-md-12\" role=\"alert\">$error</div>";
	if 	($logged) 
		echo "<div class=\"alert alert-success col-md-12\" role=\"alert\">
			You are now logged in. Please <a href='profile.php'>" .
				"click here</a> to continue.
		</div>";
echo <<<_END
			<form class="col-md-12" method="post" action="login.php">
			  	<div class="form-group">
			    	<label for="user">Username</label>
			    	<input type="text" class="form-control" id="user" aria-describedby="emailHelp" placeholder="Enter username" name="user" maxlength="32" value="$user">
			  	</div>
			  	<div class="form-group">
			    	<label for="password">Password</label>
			    	<input type="password" class="form-control" id="password" placeholder="Enter password" name="pass" maxlength="32" value="$pass">
			  	</div>
			  	<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>
		</div>
_END;
?>
	</body>
</html>

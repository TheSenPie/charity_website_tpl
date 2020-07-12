<!-- CREATE TABLE users (
id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(32) UNIQUE,
email VARCHAR(255),
password CHAR(60),
role VARCHAR(16),
INDEX(email(20)),
INDEX(role(8))) ENGINE MyISAM;

#Inserting the first admin
INSERT INTO users(id, username, email, password, role) 
		VALUES (NULL, 'admin', 'admin@localhost', 'password1234', 'admin'); -->
<!DOCTYPE html>
<html>
	<head>
		<title>Setting up database</title>
	</head>
	<body>
		<h3>Setting up...</h3>


<?php // Where the all magic happens 
	require_once 'functions.php';

	createTable('users',
             	'id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
				username VARCHAR(32) UNIQUE,
				email VARCHAR(255),
				password CHAR(60),
				role VARCHAR(16),
				INDEX(email(20)),
				INDEX(role(8))');

	insertIntoTable('users', '(id, username, email, password, role)', "(NULL, 'admin', 'admin@localhost', '$2y$10$8HX2JTpZTdYBRvlbGZSJ4erRymqfQUet1xx2vXQ4sZIy3YjPdlpBe', 'admin')");
?>

<br>...done.
  </body>
</html>

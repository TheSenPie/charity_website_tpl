<?php // login.php saving all the info to connect to our mySQL database
	$dbhost = 'localhost'; // pretty unlikely to be changed
	$dbname = 'project'; // write the database name
	$dbuser = 'username'; // write the username of the user in your database
	$dbpass = 'password'; // write the password of the user in your database.

	$before_salt = '*784'; // salt used for user password
	$after_salt = '61#%'; // salt used for user password

	// Setting connection
	$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	if ($connection->connect_error) die($connection->connect_error);

	// Create a table in our database, used by setup.php
	function createTable($name, $query) {
    	queryMysql("CREATE TABLE IF NOT EXISTS $name($query) ENGINE MyISAM");
    	echo "Table '$name' created or already exists.<br>";
  	}

  	function insertIntoTable ($table, $inputs, $values) {
  		queryMysql("INSERT IGNORE INTO $table" . $inputs . " VALUES " . $values);
  		echo "Values inserted or already exists.<br>";
  	}

  	// Get data from db
	function queryMysql ($query) {
		global $connection;
		$result = $connection->query($query);
		if (!$result) die($connection->error);
		return $result;
	}

	// Make the user's input clean, so the hackers won't be able to inject code in mysql
	function sanitizeString($string) {
		return htmlentities(mysql_fix_string($string));
	}	

	function mysql_fix_string($string) {
		global $connection;
		if (get_magic_quotes_gpc()) $string = stripslashes($string);
		return $connection->real_escape_string($string);
	}

	// When the user logs out
  	function destroySession () {
  		$_SESSION = array();

  		if (session_id() != "" || isset($_COOKIE[session_name()]))
  			setcookie(session_name(), '', time()-2592000, '/');

  		session_destroy();

  		return 1;
  	}
?>
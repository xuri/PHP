<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Connect to MySQL</title>
</head>
<body>
<?php // Script 12.2 - mysql_connect.php #2
/* This script connects to the MySQL server. */

// Attempt to connect to MySQL and print out messages:
if ($dbc = @mysql_connect('localhost', 'root', 'password')) {

	print '<p>Successfully connected to MySQL!</p>';

	// try to create the database:
	if (@mysql_query('CREATE DATABASE myblog')) {

		print '<p>The database has been created!</p>';

	} else // Cloud not creat it.
		print '<p style="color: red;">Cloud not create the database because:<br />' . mysql_error() . '.</p>';

	mysql_close(); // Close the connection.

} else {

	print '<p style="color: red; ">Could not connect to MySQL:<br />' . mysql_error() . '.</p>';

}

?>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Create a Table</title>
</head>
<body>
<?php  // Script 12.4 - create_table.php
/* This script connects to the MySQL server, selects the database, and creates a table. */

// Connect and select:
if ($dbc = @mysql_connect('localhost', 'root', 'password')) {

	// Handle the error if the database couldn't be selected:
	if (!@mysql_select_db('myblog')) {
		print '<p style="color: red;">Cloud not select the database because:<br />' . mysql_error() . '.</p>';
		mysql_close();
		$dbc = FALSE;
	}

} else { // Connection failure.
	print '<p style="color: red;">Could not connect to MySQL:<br />' . mysql_error() . '.</p>';
}

if ($dbc) {

	// Define the query:
	$query = 'CREATE TABLE entries (
		entry_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
		title VARCHAR(100) NOT NULL,
		entry TEXT NOT NULL,
		date_entered DATETIME NOT NULL
		)';

	// Execute the query:
	if (@mysql_query($query)) {
		print '<p>The table has been created.</p>';
	} else {
		print '<p style="color: red;">Could not create the table because:<br />' . mysql_error() . '.</p><p>The query being run was: ' . $query . '</p>';
	}

	mysql_close(); // Close the connection.

}

?>
</body>
</html>
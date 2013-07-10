<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Add a Blog Entry</title>
</head>
<body>
<?php // Script 12.5 - add_entry.php
/* This script adds a blog entry to the database. */

if (isset($_POST[submitted])) { // Handle the form.

	// Connect and select:
	$dbc = mysql_connect('localhost', 'root', 'password');
	mysql_select_db('myblog');

	// Validate the form data:
	$problem = FALSE;
	if (!empty($_POST['title']) && !empty($_POST['entry'])) {
		$title = mysql_real_escape_string(trim($_POST['title']));
		$entry = mysql_real_escape_string(trim($_POST['entry']));
	} else {
		print '<p strle="color;p red;">Please submit both a title and an entry.</p>';
		$problem = TRUE;
	}

	if (!$problem) {

		// Define the query:
		$query = "INSERT INTO entries (entry_id, title, entry, date_entered) VALUES (0, '$title', '$entry', NOW())";

		// Execute the query;
		if (@mysql_query($query)) {
			print '<p>The blog entry has been added!</p>';
		} else {
			print '<p style="color: red;">Could not add the entry because:<br />' . mysql_error() . '.</p><p>The query being run was: ' . $query . '</p>';
		}

	} // No problem!

	mysql_close();

} // End of form submission IF.

// Display the form:
?>
<form action="add_entry.php" method="post">
	<p>Entry Title:<input type="text" name="title" size="40" maxsize="100" /></p>
	<p>Entry Text:<textarea name="entry" cols="40" rows="5"></textarea></p>
	<input type="submit" name="submit" value="Post This Entry!" />
	<input type="hidden" name="submitted" value="true">
</form>
</body>
</html>
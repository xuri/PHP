<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Edit a Blog Entry</title>
</head>
<body>
<?php // Script 12.9 - edit_entry.php
/* This script edits a blog entry using an UPDATE query. */

// Connect and select;
$dbc = mysql_connect('localhost', 'root', 'password');
mysql_select_db('myblog');

if (isset($_GET['id']) && is_numeric($_GET['id']) ) { // Display the entry in a form:

	// Define the query.
	$query = "SELECT title, entry FROM entries WHERE entry_id={$_GET['id']}";
	if ($r = mysql_query($query)) { // Run the query.

		$row = mysql_fetch_array($r); // Retrieve the information.

		// Make the form:
		print '<form action="edit_entry.php" method="post">
		<p>Entry Title:<input type="text" name="title" size="40" maxsize="100" value="' . htmlentities ($row['title']) . '" /></p>
		<p>Entry Text:<textarea name="entry" cols="40" rows="5">' .htmlentities($row['entry']) . '</textarea></p>
		<input type="hidden" name="id" value="' . $_GET['id'] . '" />
		<input type="submit" name="submit" valur="Update this Entry!" />
		</form>';

	} else { // Couldn't get the information.
	print '<p style="color: red;">Could not retrieve the blog entry because:<br />' . mysql_error() . '.</p><p>The query being run was: ' . $query . '</p>';
	}

} elseif (isset($_POST['id']) && is_numeric($_POST['id'])) { // handle the form.

	// Validate and secure the form data:
	$problem = FALSE;
	if (!empty($_POST['title']) && !empty($_POST['entry'])) {
		$title = mysql_real_escape_string(trim($_POST['title']));
		$entry = mysql_real_escape_string(trim($_POST['entry']));
	} else {
		print '<p style="color: red;">Please submit both a title and an entry.</p>';
		$problem = TRUE;
	}

	if (!$problem) {

		// Define the query.
		$query = "UPDATE entries SET title='$title', entry='$entry' WHERE entry_id={$_POST['id']}";
		$r = mysql_query($query); // Execute the query.

		// Report on the result:
		if (mysql_affected_rows() == 1) {
			print '<p>The blog entry has been updated.</p>';
		} else {
			print '<p style="color: red;">Could not update the entry because:<br />' . mysql_error() . '.</p><p>The query being run was: ' . $query . '</p>';
		}

	} // No problem!

} else { // No ID set.
	print '<p style="color: red;">This page had been accessed in error.</p>';
} // End of mian IF.

mysql_close(); // Close the database connection.

?>
</body>
</html>
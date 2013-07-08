<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Login</title>
</head>
<body>
<?php // Script 11.7 - login.php
/* This script logs a user in by check the stored values in text file. */

if (isset($_POST['submitted'])) { // Handle the form.

	$loggedin = FALSE; // Not currently logged in.

	// Enable auto_detect_line_settings;
	ini_set('auto_detect_line_endings', 1);

	// Open the file;
	$fp = fopen('users/users.txt', 'rb');

	// Loop through the file:
	while ( $line = fgetcsv($fp, 100, "\t") ) {

		// Check the file data against the submitted data:
		if ( ($line[0] == $_POST['username']) AND ($line[1] == md5(trim($_POST['password1']))) ){

			$loggedin = TRUE; // Correct username/passsword combination.

			// Stop lopping through the file;
			break;

		} // Ehd og IF.

	} // End of WHILE.

	fclose($fp); // Close the file.

	// Print a message;
	if ($loggedin) {
		print '<p>You are now logged in.</p>';
	} else {
		print '<p style="color :red;">The username and passwword you entered do not match those of file.</p>';
	}

} else { // Display the form.

// Leave PHP and display the form:
?>
<form action="login.php" method="post">
	<p>Username: <input type="text" name="username" size="20" /></p>
	<p>Password:<input type="password" name="password1" size="20" /></p>
	<input type="submit" name="submit" value="Login" />
	<input type="hidden" name="submitted" value="true" />
</form>
<?php } //; End of submission IF. ?>
</body>
</html>
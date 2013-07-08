<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Register</title>
	<style type="text/css">
	.error { color: red; }
	</style>
</head>
<body>
<?php // Script 11.6 - register.php
/* This script registers a user by storing their information in a text file and creating a directory for them. */

if (isset($_POST['submitted'])) { // Hadnle the form.

	$problem = FALSE; // No problems so far.

	// Check for each value...

	if (empty($_POST['username'])) {
		$problem = TRUE;
		print '<p class="error">Please enter a username!</p>';
	}

	if (empty($_POST['password1'])) {
		$problem = TRUE;
		print '<p class="error">Please enter a password!</p>';
	}
	if ($_POST['password1'] != $_POST['password2']) {
		$problem = TRUE;
		print '<p class="error">Your password did not match your confirmed password!</p>';
	}

	if (!$problem) { // If there weren't any problems...

		if ($fp = fopen ('users/users.txt', 'ab')) { // Open the file.

			// Set the encording:
			// stream_encording($fp, 'utf-8');

			// Creat the data to be written:
			$dir = time() . rand(0, 4596);
			$data = $_POST['username'] . "\t" .md5(trim($_POST['password1'])) ."\t" . $dir . "\n"; // \r\n on Windows

			// Write the data and close the file:
			fwrite ($fp, $data);
			fclose ($fp);

			// Creat the directory
			mkdir("users/$dir");

			// Print a message:
			print '<p>You are now registered!</p>';

		} else { // Couldn't write to the file.
		print '<p class="error">You could not be registered due to a system error.</p>';
		}

	} else { // Fogot a field.
		print '<p class="error">Please go back and try again!</p>';
	}

} else { // Display the form.

// Leave PHP and display the form:
?>

<form action="register.php" method="post">
	<p>Username:<input type="text" name="username" size="20" /></p>
	<p>Password:<input type="password" name="password1" size="20" /></p>
	<p>Confirm Password:<input type="password" name="password2" size="20" /></p>
	<input type="submit" name="submit" value="Register" />
	<input type="hidden" name="submitted" value="true" />
</form>
<?php } // End of submission IF. ?>
</body>
</html>
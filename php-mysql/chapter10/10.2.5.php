<?php
	
	// Read the file into an array
	$users = file("users.txt");

	// Cycle though the array
	foreach ($users as $user) {

		// Parse the line, retrieving the name and e-mail address
		list($name, $email) = explode(" ", $user);

		// Remove newline from $email
		$email = trim($email);

		// Output the formatted name and e-amil address
		echo "<a href=\"mailto:$email\">$name</a> <br />";
	}
?>
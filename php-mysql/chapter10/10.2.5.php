<?php
	
	// Read the file into a string variable
	$userfile = file_get_contents("users.txt");

	// Place each line of $userfile into array
	$users = explode("\n", $userfile);
	

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
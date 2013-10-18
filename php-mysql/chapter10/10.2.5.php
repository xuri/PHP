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

	echo "<hr />";

	// Read the file into an array
	$users = file("/var/www/php/php-mysql/chapter10/subscribers.csv");

	foreach ($users as $user){

		// Break each line of the file into three parts
		list($name, $email, $phone) = explode(",", $user);

		// Output the data in HTML format
		printf("<p>%s (%s) Tel. %s</p>", $name, $email, $phone);
	}
?>
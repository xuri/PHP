<?php
	// Open the user.txt file
	$users = fopen ("users.txt", "r");

	// While the EOF hasn't been reached, get the next line
	while ($line = fgets($users, 4096)){

		// use explode() to spearate each piece of data.
		list($name, $occupation,$color) = explode("|",$line);
		// format and output the data
		printf("Name: %s <br />",$name);
		printf("Occupation: %s <br />",$occupation);
		printf("Favorite color: %s <br />",$color);

	}
	fclose($users);
?>
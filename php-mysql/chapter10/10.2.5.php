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


	echo "<hr />";

	// Open a handle to users.txt
	$fh = fopen("/var/www/php/php-mysql/chapter10/users.txt", "rt");
	// While the EOF isn't reached, read in another line and output it
	while (!feof($fh)) echo fgets($fh);

	// Close the handle
	fclose($fh);

	echo "<hr />";

	// Build list of accepeable tags
	$tags = "<h2><h3><p><b><a><img>";

	// Open the article, and read its contents.
	$fh = fopen("article.html", "rt");

	while (!feof($fh)) {
		$article .= fgetss($fh, 1024, $tags);
	}
	// Close the handle
	fclose($fh);

	// Open the file up in write mode and output its contents.
	$fh = fopen("article.html", "wt");
	fwrite($fh, $article);

	// Close the handle
	fclose($fh);

	// fread()

	$file = "/var/www/php/php-mysql/chapter10/users.txt";

	// Open the file for reading
	$fh = fopen($file, "rt");

	// Read in the entire file
	$userdata = fread($fh, filesize($file));

	// Close the file handle
	fclose($fh);

	// readfile()

	// Output the article to the browser.
	$bytes = readfile($file);
	

?>
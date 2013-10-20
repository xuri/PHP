<?php
	// Data we'd like to write to the subscribers.txt file
	$subscriberInfo = "Jason Gilmore|jason@example.com";

	// Open subscribers.txt for writing
	$fh = fopen("/var/www/php/php-mysql/chapter10/subscribers.txt", "at");

	// Write the data
	fwrite($fh, $subscriberInfo);

	// Close the handle
	fclose($fh);
?>
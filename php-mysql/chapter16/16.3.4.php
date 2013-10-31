<?php
	// Create a new file, creatively name "textfile.txt";
	$fh = fopen("textfile.txt", "w");

	// Write the word "bandwidth" repeatedly to the file.
	for ($x=0; $x<170400;$x++) fwrite($fh, "bandwith");

	// Close the file
	fclose($fh);

	// Retrieve the data to send to the user
	$data = file_get_contents("textfile.txt");

	// Determine the data's total size, in kilobytes
	$fsize = filesize("textfile.txt") / 1024;

	// Define the start time
	$start = time();

	//Send the data to teh user
	echo "<!-- $data -->";

	// Define the stop time
	$stop = time();

	// Calculate the time taken to send the date
	$duration = $stop - $start;

	// Divide the file size by the number of seconds taken to transmit it
	$speed = round($fsize / $duration, 2);

	// Display the calculated speed in kilobytes per second
	echo "Your network speed: $speed KB/sec.";
?>
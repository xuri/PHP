<?php
	$info = "J. Gilmore:jason@example.com|Columbus, Ohio";

	// delimiters include coln (:), vertical bar (|), and comma (,)
	$tokens = ":|,";
	$tokenized = strtok($info, $tokens);

	// print out each element in the $tokenized array
	while ($tokenized) {
		echo "Element = $tokenized<br>";
		// Don't include the first arguement in sybsequent calls.
		$tokenized = strtok($tokens);
	}

	echo "<hr />";

	$summary = <<< summary
	In the latest installment of the ongoing Developer.com PHP series,
	I discuss the many improvements and additions to
	<a href="http://www.php.net">PHP 5's</a> object-oriented architecture.
summary;
	$words = sizeof(explode(' ',strip_tags($summary)));
	echo "Total words in summary: $words";

	echo "<hr />";

	$cities = array("Colimbus", "Akron", "Cleveland", "Cincinnati");
	echo implode("|", $cities);

	echo "<hr />";

	$substr = "index.html";
	$log = <<< logfile
	192.168.1.11:/www/htdocs/index.html:[2006/02/10:20:36:50]
	192.168.1.13:/www/htdocs/about.html:[2006/02/11:04:15:23]
	192.168.1.15:/www/htdocs/index.html:[2006/02/15:17:25]
logfile;

	// What is first occurrence of the time $substr in log?
	$pos = strpos($log, $substr);

	// Find the numerical position of the end of the line
	$pos2 = strpos($log, "\n", $pos);

	// Calculate the beginning of the timestamp
	$pos = $pos + strlen($substr) + 1;
	// Retrieve the timestamp
	$timestamp = substr($log,$pos,$pos2-$pos);

	echo "The file $substr was first accessed on: $timestamp";
?>
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


	echo "<hr />";

	// Limit $summary2 to how many characters?
	$limit = 100;

	$summary2 = <<< summary2
	In the lastest installment of the ongoing Developer.com PHP series,
	I discuss the many improvements and additions to
	<a href="http://www.php.net">PHP 5's</a> object-oriented architecture.
summary2;
	
	if (strlen($summary2) > $limit)
		$summary2 = substr($summary2, 0, strrpos(substr($summary2, 0, $limit),
			' ')) . '...';
	echo $summary2;

	echo "<hr />";

	$author = "jason@example.com";
	$author = str_replace("@", "(at)", $author);
	echo "Contact the author of this article at $author.";

	echo "<hr />";

	$car = "1994 Ford";
	echo substr($car, 5);

	echo "<hr />";

	$buzzwords = array("mindshare", "synergy", "space");

	$talk = <<< talk
	I'm certain that we could dominate mindshare in theis space with
	our new product, establishing a true synergy between the marketing
	and product developement teams. We'll own this space in three months.
talk;

	foreach ($buzzwords as $bw) {
		echo "The word $bw appers " . substr_count($talk, $bw). " time(s).<br />";
	}
?>
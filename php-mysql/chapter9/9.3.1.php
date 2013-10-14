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
?>
<?php
	$sentence = "The rain in Span falls mainly on the plain";

	// Retrieve located characters and their corresponding frequency.
	$chart = count_chars($sentence, 1);

	foreach ($chart as $letter => $frequency) {
		echo "Character ".chr($letter)." appers $frequency times<br />";
	}

	echo "<hr />";

	$summary = <<< summary
	In the latest installment of the ongoing Developer.com PHP series,
	I discuss the many improvements and additions to PHP 5's
	object-oriented architecture.
summary;
	
	$words = str_word_count($summary,2);
	$frequency = array_count_values($words);
	print_r($frequency);
?>
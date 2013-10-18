<?php
	$foods = array("pasta", "steak", "fish", "potatoes");
	$food = preg_grep("/^p/", $foods);
	print_r($food);

	echo "<hr />";

	$line = "vim is the greatest word processor ever created!";
	if (preg_match("/\bVim\b/i", $line, $match)) print "Match found!";

	echo "<hr />";

	$userinfo = "Name :<b>Zeev Suraski</b> <br> Title: <b>PHP Guru</b>";
	preg_match_all("/<b>(.*)<\/b>/U", $userinfo, $pat_array);
	printf("%s <br /> %s", $pat_array[0][0],$pat_array[0][1]);

	echo "<hr />";

	$text = "Tickets for the bout are going for $500.";
	echo preg_quote($text);

	echo "<hr />";

	$text1 = "This is a link to http://www.mrxuri.com/.";
	echo preg_replace("/http:\/\/(.*)\//", "<a href=\"\${0}\">\${0}</a>", $text1);

	echo "<hr />";

	$draft = "in 2007 the company faced plummeting revenues and scandal.";
	$keywords = array("/faced/", "/plummeting/", "/scandal/");
	$repacements = array("celebrated", "skyrocketing", "expansion");
	echo preg_replace($keywords, $repacements, $draft);

	echo "<hr />";

	// This function will add the acronym's long form
	// directly after any acronyms found in $matches
	function acronym($matches) {
		$acronyms = array(
			'WWW' => 'Word Wide Web',
			'IRS' => 'Internal Revenue Service',
			'PDF' => 'Portable Document Format');
		if (isset($acronyms[$matches[1]]))
			return $matches[1] . " (" . $acronyms[$matches[1]] . ")";
		else
			return $matches[1];
	}

		// The target text
		$text3 = "The <acronym>IRS</acronym> offers tax forms in
		<acronym>PDF</acronym> format on the <acronym>WWW</acronym>.";

		// Add the acronyms' long forms to the target text
		$newtext = preg_replace_callback("/<acronym>(.*)<\/acronym>/U", 'acronym', $text3);

		print_r($newtext);

	echo "<hr />";

	$delinitedText = "Jason+++Gilmore+++++++++++++Columbus+++OH";
	$fields = preg_split("/\+{1,}/", $delinitedText);
	foreach ($fields as $field) echo $field . "<br />";
?>
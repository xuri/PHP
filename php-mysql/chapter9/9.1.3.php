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
?>
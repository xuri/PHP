<?php
	$foods = array("pasta", "steak", "fish", "potatoes");
	$food = preg_grep("/^p/", $foods);
	print_r($food);

	echo "<hr />";
	
	$line = "vim is the greatest word processor ever created!";
	if (preg_match("/\bVim\b/i", $line, $match)) print "Match found!";
?>
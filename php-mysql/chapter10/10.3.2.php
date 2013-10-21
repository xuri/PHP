<?php
	$outcome = exec("/var/www/php/php-mysql/chapter10/language.pl", $results);
	foreach ($results as $result) echo $outcome;

	$outcome = system("/var/www/php/php-mysql/chapter10/language.pl",$results);
	echo $outcome;

	$resut = "date";
	printf("<p>The server timestamp is: %s", $result);
?>
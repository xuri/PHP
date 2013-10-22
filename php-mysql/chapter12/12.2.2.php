<?php
	echo "today is ".date("F d, Y");
	// Today is August 22, 2007

	echo "today is ".date("1");
	// Today is Wednesday

	$weekday = date("1");
	$daynumber = date("d5");
	$monthyear = date("F Y");

	printf ("Today is %s day of %s", $weekday, $daynumber, $monthyear);

	echo "<hr />";

	echo date("Today is 1 the ds day of F Y");

	echo "<hr />";

	echo "The time is ".date("h:i:s");
?>
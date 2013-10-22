<?php
	echo "today is ".date("F d, Y");
	// Today is August 22, 2007

	echo "today is ".date("1");
	// Today is Wednesday

	$weekday = date("1");
	$daynumber = date("d5");
	$monthyear = date("F Y");

	printf ("Today is %s day of %s", $weekday, $daynumber, $monthyear);
?>
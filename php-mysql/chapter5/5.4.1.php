<?php
	$state["Ohio"] = "March 1";
	$state["Delaware"] = "December 7";
	$state["Pennsylvania"] = "December 12";
	$founded = array_search("December 7", $state);
	if ($founded) printf ("%s was founded on %s.", $founded, $state[$founded]);
?>
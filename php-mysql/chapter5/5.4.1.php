<?php
	$state["Delaware"] = "December 7, 1787";
	$state["Pennsylvania"] = "December 12, 1787";
	$state["Ohio"] = "March 1, 1803";
	if (array_key_exists("Ohio", $state))
		printf("Ohio joined the Union on %s", $state["Ohio"]);
?>
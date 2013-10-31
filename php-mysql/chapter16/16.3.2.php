<?php
	$target = "www.example.com";
	echo "<pre>";
	system("/usr/bin/namp $target");
	echo "</pre>";

	// Kill the task
	system("Killall -q namp");
?>
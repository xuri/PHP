<?php
	$username = "jasoN";
	if (ereg("([^a-z])",$username))
		echo "Username must be all lowercase!";
	else
		echo "Username is all lowercase";	
?>
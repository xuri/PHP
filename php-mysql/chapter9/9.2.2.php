<?php
	$pswa = "supersecret";
	$pswd2 = "supersecret2";

	if(strcmp($pswd,$pswd2) != 0)
		echo "Passwords do not match!";
	else
		echo "Password match!";

	echo "<hr />";

	$email1 = "admin@example.com";
	$email2 = "ADMIN@example.com";

	if (! strcasecmp($email1, $email2))
		echo "The email adddresses are identical!";
?>
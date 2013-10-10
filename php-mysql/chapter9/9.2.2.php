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

	echo "<hr />";

	$password = "3312345";
	if (strspn($password, "1234567890") == strlen($password))
		echo "The password cannot consist solely of numbers!";
?>
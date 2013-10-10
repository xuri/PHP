<?php
	$pswa = "supersecret";
	$pswd2 = "supersecret2";

	if(strcmp($pswd,$pswd2) != 0)
		echo "Passwords do not match!";
	else
		echo "Password match!";
?>
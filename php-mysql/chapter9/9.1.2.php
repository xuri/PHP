<?php
	$username = "jasoN";
	if (ereg("([^a-z])",$username))
		echo "Username must be all lowercase!";
	else
		echo "Username is all lowercase";

	echo "<br /><hr />";

	$url = "http://www.apress.com";

	// Break $url down into three distinct pieces:
	// "http://www", "appress", and "com"
	$parts = ereg("^(http://www)\.([[:alnum:]]+)\.([[:alnum:]]+)", $url, $regs);

	echo $regs[0];		// output the entire string "http://www.appress.com"
	echo "<br />";
	echo $regs[1];		// outputs "http://www"
	echo "<br />";
	echo $regs[2];		// outputs "apress"
	echo "<br />";
	echo $regs[3];		// outputs "com"

	echo "<br /><hr />";

	$pswd = "jasonaf";
	if (!eregi("^[a-zA-Z0-0]{8,10}$",$pswd))
		echo "Invalid password!";
	else 
		echo "Valid password!";
?>
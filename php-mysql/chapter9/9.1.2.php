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

	echo "<br /><hr />";

	$text = "This is a link to http://www.mrxuri.com/.";
	echo ereg_replace("http://([a-zA-z0-9./-]+)$", "<a href=\"\\0\">\\0</a>", $text);

	echo "<br /><hr />";

	$url = "Apress (http://www.apress.com)";
	$url = ereg_replace("http://([a-zA-Z0-9./-]+)([a-zA-Z/]+)",
						"<a href=\"\\0\">\\0</a>",$url);
	echo $url;
	// Displays Apress (<a href="http://www.apress.com">http://www.apress.com</a>)

	echo "<br /><hr />";

	$text2 = "This is \tsome text that\nwe might like to parse.";
	print_r(split("[\n\t]", $text2));
?>
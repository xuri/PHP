<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Thanks!</title>
</head>
<body>
	<?php

	// Get  the values from the $_GET array:
	$name = $_GET['name'];
	$email = $_GET['email'];

	print "<p>Thank you, $name.We will contect you at $email.</p>";

	?>
</body>
</html>
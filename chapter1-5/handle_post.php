<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Forum Posting</title>
</head>
<body>
	<?php

	$first_name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$posting = trim($_POST['posting']);

	$name = $first_name . ' ' . $last_name;

	$words = str_word_count($posting);

	$posting = str_ireplace('badword', 'XXXXXX', $posting );

	$html_post = htmlentities($_POST ['posting']);
	$strip_post = strip_tags($_POST['posting']); 

	print "<div>Thyank you , $name, for your posting: 
	<p> $posting...</p>
	<p>($words words)</p>
	<p>$html_post</p>
	<p>$strip_post</p></div>";

	
	$name = urlencode($name);
	$email = urlencode($_POST['email']);
	print "<p>Click <a href=\"thanks.php?name=$name$email\">here</a> to continue.</p>";

	?>
</body>
</html>
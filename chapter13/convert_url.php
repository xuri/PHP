<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Make URL Click-able</title>
	</head>
<body>
<?php // Script 13.2 - convert_url.php
/* This script turns a valid URL into an HTML link. */

if (isset($_POST['submitted'])) { // Has the form been submitted?

	// Trim off extraneous spaces, just in case
	$url = trim($_POST['url']);

	// Establish the patterns:
	$pattern1 = '^((http|https|ftp)://){1}([[:alnum:]-])+(\.)([[:alnum:]-]){2,6}([[:alnum:]/+ =%&_.~?-]*)$';
	$pattern2 = '^([[:alnum:]-])+(\.)([[:alnum:]-]){2,6}([[:alnum:]/+ =%&_.~?-]*)$';

	// Test the submitted value against the patterns....
	if (eregi($pattern1, $url)) { // Check for an exisiting http/https/ftp.

		$url = eregi_replace($pattern1, '<a href="\\0">\\0</a>', $url);
		print "<p>Here is the URL: $url<br />The code is now: " . htmlentities($url) . "</p>";

	} elseif (eregi($pattern2, $url)) { // No http/https/ftp, add http;//.

		$url = eregi_replace($pattern2, '<a href="http://\\0">\\0</a>', $url);
		print "<p>Here is the URL: $url<br />The code is now: " . htmlentities($url) . "</p>";

	} else { // Invalis URL.
		print '<p>Please enter a valid URL.</p>';
	}

} // End of main conditional.
// Displaty the HTML form:
?>
<form action="convert_url.php" method="post">
	<p>URL: <input type="text" name="url" size="30" /></p>
	<input type="submit" name="submit" value="Convet" />
	<input type="hidden" name="submitted" value="true" />
</form>
</body>
</html>

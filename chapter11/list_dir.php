<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Directory Contents</title>
</head>
<body>
<?php // Script 11.5 - list_dir.php
/* This script ;ists the directories and files in a dictory. */

// Set the time zone;
date_default_timezone_set('America/New_York');

// Set the directory name and scan it:
$search_dir = '.';
$contents = scandir($search_dir);

// List the directories first...
// Print a caption and start a list:
print '<h2>Directory</h2>
<ul>';
foreach ($contents as $item) {
	if ( (is_dir($item))AND (substr($item, 0, 1) != '.') ) {
		print "<li>$item</li>\n";
	}
}

print '</ul>'; // Close the list.

// Creat a table header:
print '<hr /><h2>Files</h2>
<table cellpadding="2" cellspacing="2" align="left">
<tr>
<td>Name</td>
<td>Size</td>
<td>Last Modified</td>
</tr>';

// List the files:
foreach ($contents as $item) {
	if ( (is_file($item)) AND (substr($item, 0, 1) != '.') ) {

		// Get the file size:
		$fs = filesize($item);

		// Get the file's modification date:
		$lm = date('F j, Y', filemtime($item));

		// Print the information:
		print "<tr>
		<td>$item</td>
		<td>$fs bytes</td>
		<td>$lm</td>
		</tr>\n";

	} // CClose the IF.

} // Close the FOREACH.

print '</table>'; // Close the HTML table.

?>
</body>
</html>
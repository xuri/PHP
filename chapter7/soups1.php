<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>No Soup for You!</title>
</head>
<body>
<h1>Mmm...soups</h1>
<?php 

$soups = array (
	'Monday' => 'Clam Chowder',
	'Tuesday' =>'White Chicken Chili',
	'Wednesday' => 'Vegetarian'
	);

	$soups['Thursday'] = 'Chicken Noodle';
	$soups['Friday'] = 'Tamato';
	$soups['Saturday'] = 'Cream of Broccoli';

	$count2 = count ($soups);
	print "<p>After adding 3 more soups, the array now has $count2 elements.</p>";

var_dump ($soups);


?>
</body>
</html>
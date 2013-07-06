<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>No Soup for You!</title>
</head>
<body>
<h1>Mmm...soups2</h1>
<?php 

$soups = array (
	'Monday' => 'Clam Chowder',
	'Tuesday' =>'White Chicken Chili',
	'Wednesday' => 'Vegetarian'
	);

$soups2 = array(
	'Thuresday' => 'Chicken Noodle',
	'Friday' => 'Tomato',
	'Saturday' => 'Cream of Broccoli',
	);

$soups = array_merge($soups, $soups2);

var_dump ($soups);


?>
</body>
</html>
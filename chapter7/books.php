<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>No Soup for You!</title>
</head>
<body>
<h1>My Books and Chapters</h1>
<?php 

$phpvqs = array (1 => 'Getting Started', 'Variables', 'HTML Forms and PHP', 'Using Numbers');

$phpadv = array (1 => 'Advanced PHP Yechniques', 'Developing Web Applications', 'Advanced Database Concepts', 'Security Techniques');

$phpmysql = array (1 => 'Intrdouction to PHP', 'Programming with PHP', 'Creating Dynamic Web Sites', 'Introduction to MySQL');

//Creat the multidimensional array;
$books = array (
	'PHP VQS' => $phpvqs,
	'PHP 5 Advanced VQP' => $phpadv,
	'PHP 6 and MySQL 5 VQP' => $phpmysql
	);

print "<p>The third chapter of my first book is <i>{$books['PHP VQS'][3]}</i>.</p>";
print "<p>The first chapter of my second book is <i>{$books['PHP 5 Advanced VQP'][1]}</i>.</p>";
print "<p>The fourth chapter of my fourth book is <i>{$books['PHP 6 and My SQL 5 VQP'][4]}</i>.</p>";

foreach ($books as $key => $value){
	print "<p>$key: $value</p>\n";
}

?>
</body>
</html>
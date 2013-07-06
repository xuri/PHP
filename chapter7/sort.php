<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>My little Gradebook</title>
</head>
<body>

<?php 
	$grades = array(
		'Richard' => 95,
		'Sherwood' => 82,
		'Toni' => 98,
		'Franz' => 87,
		'Melissa' => 75,
		'Roddy' => 85
		);

	print'<p>Originally the array looks like this:<br />';
	foreach ($grades as $student => $grade) {
		print "$student: $grade<br />\n";	
		}
		print'</p>';

	arsort ($grades);
	print '<p>After sorting the array by value using arsort(), the array looks likes this:<br />';
	foreach ($grades as $student => $grade ){
		print "$student: $grade<br />\n";
	}
	print"</p>";

	ksort ($grades);
	print '<p>After sorting the array by key using ksort(), the array looks like this:<br /></p>';
	foreach ($grades as $student => $grade){
		print "$student:$grade<br />\n";
	}
	print '</p>';
?>
</body>
</html>
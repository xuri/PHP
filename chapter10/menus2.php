<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Date Menus</title>
</head>
<body>
<?php // Script 10.2 - menus2.php 
/* This script defines and calls a function that takes arguments. */

// This function makes three pull-down for the months, days, and years.
// This function requires two arguments be pass to it.
function make_date_menus($start_year, $num_years){

	// Array to store the months:
	$months=array (1 => 'January', 'Februday', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

	// Make the month pull-down menu:
	print '<select name="month">';
	foreach ($months as $key => $value) {
		print "n<option value=\"key\">$value</option>";
	}
	print '</select>';

	// Make the day pull-down menu:
	print '<select name="day">';
	for ($day = 1; $day <= 31; $day ++){
		print "\n<option value=\"$day\">$day</option>";
	}
	print '</select>';

	// Make the year pull-down menu:
	print '<select name="year">';
	for ($y = $start_year; $y <= ($start_year + $num_years); $y++){
		print "\<option value=\"$y\">$y </option>";
	}
	print '</select>';
} // End of make_date_menus() function.

// Make the form:
print '<form action="" method="post">';
make_date_menus(2009, 15);
print '</form>';

?>
</body>
</html>
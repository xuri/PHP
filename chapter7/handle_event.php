<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Add an Event</title>
</head>
<?php 

print"You want to add an event called <b>{$_POST['name']}</b> which takes place on:<br />";

//Print each weekday:
if(isset ($_POST['weekdays']) AND is_array($_POST['weekdays'])){

	foreach ($_POST['weekdays'] as $day) {
		print "$day<br />\n";
	}
}
else {
	print 'Please select at least once weekday for this event!';
}
print '</p>';

?>
</body>
</html>
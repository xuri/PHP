<form action="15.3.4.php" enctype="multipart/from-data" method="post">
	Last Name:<br /><input type="text" name="name" value="" /><br />
	Homework #1:<br /><input type="file" name="homework1" value="" /><br />
	Homework #2:<br /><input type="file" name="homework2" value="" /><br />
	Homework #3:<br /><input type="file" name="homework3" value="" /><br />
	Homework #4:<br /><input type="file" name="homework4" value="" /><br />
	Homework #5:<br /><input type="file" name="homework5" value="" /><br />
	<p><input type="submit" name="submit" value="Submit Notes" /></p>
</form>
<?php
	require('HTTP/Upload.php');

	$homework = new HTTP_Upload();
	$hw1 = $homework->getFiles('homework1');
	$hw2 = $homework->getFiles('homework2');
	$hw3 = $homework->getFiles('homework3');
	$hw4 = $homework->getFiles('homework4');
	$hw5 = $homework->getFiles('homework5');
	
?>

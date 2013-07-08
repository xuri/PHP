<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Upload a File</title>
</head>
<body>
<?php // Script 11.4 - upload_file.php
/* This script display and handles on HTML form. This script takes a file upload and stores it on the server. */

if (isset($_POST['submitted'])) { // Handle the form.

	// Try to move the uploaded file:
	if( move_uploaded_file ($_FILES['thefile']['tmp_name'], "./uploads/{$_FILES['thefile']['name']}" )) {

		print '<p>Your file has been uploaded.</p>';

	} else { // Promlem!

		print '<p style="color: red;">Your file could not be uploaded because: ';

		// Print a message based upon the error:
		switch ($_FILES['thefile']['error']) {
			case 1:
				print 'The file exceeds the upload_max_filesize setting in php.ini';
				break;
			case 2:
				print 'The file exceeds thge MAX_FILE_SIZE setting in the HTML form';
				break;
			case 3:
				print 'Thg file was only partially uploaded';
				break;
			case 4:
				print 'No file was uploaded';
				break;
			case 6:
				print 'The temporary folder does not exist.';
				break;
			default:
				print 'Something unforessen happended.';
				break;
		}

		print '.</p>'; // Cpmplete the paragraph.

	} // End of move_uploaded_file() IF.

} // Leave PHP and display the form:
?>

<form action="upload_file.php" enctype="multipart/form-data" method="post">
	<p>Upload a file using this form:</p>
	<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
	<p><input type="file" name="thefile" /></p>
	<p><input type="submit" name="submit" value="Upload This File" /></p>
	<input type="hidden" name="submitted" value="true" />
</form>

</body>
</html>
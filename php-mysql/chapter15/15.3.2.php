<?php
	require('HTTP/Upload.php');

	// New HTTP_Ypload object
	$upload = new HTTP_Upload();
	// Retrieve the classnotes file
	$file = $upload->getFiles('classnotes');

	// If no problems with uploaded file
	if ($file->isValid()) {
		$file->moveTo('/home/httpd/html/uploads');
		echo "File successfully uploaded!";
	} else {
		$file->errorMsg();
	}
?>
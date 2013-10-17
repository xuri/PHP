<?php
	$file = "/var/www/php/php-mysql/chapter10/10.1.3.php";
	printf("File last accessed: %s", date("m-d-y g:i:sa", fileatime($file)));

	echo "<hr />";

	printf("File inode last changed: %s", date("m-d-y g:i:sa",
		filectime($file)));
?>
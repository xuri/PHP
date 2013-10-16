<?php
	$file = "/var/www/php/php-mysql/chapter10/10.1.2.php";
	$bytes = filesize($file);
	$kilobytes = round($bytes/1024, 2);
	printf("File %s is $bytes, or %.2f kulobytes", basename($file), $kilobytes);
?>
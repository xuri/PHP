<?php
	$file = "/var/www/php/php-mysql/chapter10/10.1.3.php";
	printf("File last accessed: %s", date("m-d-y g:i:sa", fileatime($file)));
?>
<?php
	$path = "/home/www/data/users.txt";
	printf("Filename: %s <br />", basename($path));
	printf("Filename sans extension: %s <br />", basename($path, " .txt"));

	printf ("Directory path: %s", dirname($path));

	echo "<hr />";
	
	$pathinfo = pathinfo("/home/www/htdocs/book/chapter10/index.html");
	printf("Dir name: %s <br />", $pathinfo[dirname]);
	printf("Base name: %s <br />", $pathinfo[basename]);
	printf("Extension: %s <br />", $pathinfo[extension]);

?>
<?php
	$dh = opendir("/var/www/php/");
	while ($file = readdir($dh))
		echo "$file <br />";
	closedir($dh);

	echo "<hr />";

	print_r(scandir("/var/www/php"));
?>
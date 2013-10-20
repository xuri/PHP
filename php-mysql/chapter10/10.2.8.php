<?php
	$dh = opendir("/var/www/php/");
	while ($file = readdir($dh))
		echo "$file <br />";
	closedir($dh);
?>
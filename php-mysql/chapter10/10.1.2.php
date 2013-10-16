<?php
	$file = "/var/www/php/php-mysql/chapter10/10.1.2.php";
	$bytes = filesize($file);
	$kilobytes = round($bytes/1024, 2);
	printf("File %s is $bytes, or %.2f kulobytes", basename($file), $kilobytes);

	echo "<hr />";

	$partition = $driver = "/home/luxurioust";

	printf("Remaining MB on %s: %.2f", $driver,
		round((disk_free_space($driver) / 1048576),2 ));

	echo "<hr />";

	// Determine total partition space
	$totalSpace = disk_total_space($partition) / 1048576;

	// Determine used partition space
	$usedSpace = disk_free_space($partition) / 1048576;

	printf ("Partition: %s (Allocated: %.2f MB. Used: %.2f MB.)", 
		$partition, $totalSpace, $usedSpace);
?>
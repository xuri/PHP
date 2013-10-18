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

	echo "<hr />";

	function directory_size($directory) {

		$directorySize = 0;

		// Open the directory and read its contents.
		if ($dh = @opendir($directory)) {

			// Iterate thought each directory entry.
			while (($filename = readdir ($dh))) {

				// Filter out some of the unwanted directory entries.
				if ($filename != "." && $filename != "..")
				{
					// File, so determine size and add to total.
					if (is_file($directory."/".$filename))
						$directorySize += filesize($directory."/".$filename);

					// New directory, so initiate recursion. */
					if (is_dir($directory."/".$filename))
						$directorySize += directory_size($directory."/".$filename);
				}
			}
		}

		@closedir($dh);
		return $directorySize;

	} #end directory_size()

	$directory = "/var/www/php/php-mysql/chapter10/";
	$totalSize = round((directory_size($directory) / 1048576), 2);
	echo "Directory $directory: ".$totalSize. "kb.";
?>
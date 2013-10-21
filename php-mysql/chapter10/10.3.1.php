<?php
	function dele_directory($dir)
	{
		if ($dh = opdir($dir))
			// Iterate through directory contents
			while (($file = readdir($dh))!= false)
			{
				if (($file == ".")|| ($file == "..")) continue;
				if (is_dir($dir . '/' .$file))
					dele_directory($dir . '/' . $file);
				else 
					unlink($dir . '/' . $file);
			}

			closedir($dh);
			rmdir($dir);
	}

	$dir = "/var/www/php/php-mysql/chapter10/test/";
	rmdir($dir);
?>
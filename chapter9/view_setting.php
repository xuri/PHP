<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>View Your Settings</title>
	<style type="text/css">
	body{	
		<?php // Script 9.2 - view_settings.php

		// Check for a font_size value:
		if (isset($_COOKIE['font_color'])){
			print "\t\tfont-size: " . htmlentities($_COOKIE['font_size']) . ";\n"; // "\t"Horizontal tab character (hex 09)
		} else {
			print "\t\tfont-size: medium;\n";
		}

		// Check for a font_color value:
		if (isset($_COOKIE['font_color']))
		{
			print "\t\tcolor: #" . htmlentities($_COOKIE['font_color']) . ";\n";
		} else {
			print "\t\tcolor: #000; \n";
		}

		?>
	}
	</style>
</head>
<body>
	<p><a href="customize.php">Customize Your Settings</a></p>
	<p><a href="reset.php">Reset Your Settings</a></p>

	<p>
	yadda yadda yadda yadda yadda
	yadda yadda yadda yadda yadda
	yadda yadda yadda yadda yadda
	yadda yadda yadda yadda yadda
	yadda yadda yadda yadda yadda
	</p>
</body>
</html>
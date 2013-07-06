<?php // Script 9.4 - reset.php

// Delet the cookies:
setcookie('font_size', '', time() - 600, '/', '', 0);
setcookie('font_color', '', time() - 600, '/', '', 0);

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Reset Your Settings</title>
</head>
<body>
	<p>Your setting have been reset! Click <a href="view_setting.php">here</a> to go back to the main page.</p>
</body>
</html>
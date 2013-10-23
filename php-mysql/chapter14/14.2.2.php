<?php
	// If the username or password isn't set, display the authentication windows
	if (!isset($_SERVER['PHP_AUTH_USER']) || isset($_SERVER['PHP_AUTH_PW'])) {
		header('WWW-Authenticate: Basic Realm="Authentiction"');
		header("HTTP/1.1 401 Unanthorized");

	// If the username and password are set, output their credentials
	} else {
		echo "Yoursupplied username: ".$_SERVER['PHP_AUTH_USER']."<br />";
		echo "Your password: ".$_SERVER['PHP_AUTH_PW']."<br />";
	}
?>
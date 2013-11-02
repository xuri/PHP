<?php
	// Initiate sessiob annd create a few session variables
	session_start();

	// Set a few session variavles.
	$_SESSION['username'] = "jason";
	$_SESSION['loggedon'] = date("M d Y H:i:s");

	// Encode all session data into a single string and return the resulr
	$sessionVars = session_encode();
	echo $sessionVars;
?>
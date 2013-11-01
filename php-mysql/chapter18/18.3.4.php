<?php
	session_start();
	$_SESSION['username'] = "jason";
	printf("Your username is %s.", $_SESSION['username']);
	unset($_SESSION['username']);
	printf("Username now set to: %s", $_SESSION['username']);
?>
<?php

	session_start();

	// Has a session been initiated previously?
	if (!isset($_SESSION['username'])) {

		// If no previous session, has the user submitted the from?
		if (isset($_POST['username']))
		{
			$username = mysql_real_escape_string($_POST['username']);
			$pswd = mysql_real_escape_string($_POST['pswd']);

			// Connect to the MySQL server and select the database
			mysql_connect("localhost","root","password");
			mysql_select_db("test");

			// Look for the user in he users table
			$query = "SELECT username FROM users WHERE username='$username' AND pswd='$pswd'";
			$result = mysql_query($query);

			// Has the user been located?
			if (mysql_num_rows($result) == 1)
			{
				$_SESSION['username'] = mysql_result($result, 0, "username");
				echo "You've successfully logged in. ";
			}

		// If the user has not previously logged in, show the login from
		} else {
			include "login.html";
		}

	// The user has returned. Offer a welcoming note.
	} else {
		printf("Welcome back, %s!", $_SESSION['username']);
	}
?>
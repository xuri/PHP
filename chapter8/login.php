<?php //Script 8.8 - login.php

/*This page lets people log into the site (in theory) */

//Set the page title and include the heaqder file:
define('TITLE', 'Login');
require('templates/header.html');

//Print some introductory text:
print'<h1>Login Form</h1>
<p>Users who are logged in can take advantage of certain features like this, that, and the other thing.</p>';
//Check if the form has been submitted:
if ( isset($_POST['submitted'])){

	//Hadele the form:
	if((!empty($_POST['email'])) && (!empty($_POST['password']))){

		if((strtolower($_POST['email'] == 'me@example.com')) && ($_POST['password'] =='testpass')){ // Correct!
			// print '<p>You aer logged in!<br />Now you can blah, blah, blah...</P>';
			// Redirect the user to the welcome page!
			ob_end_clean(); // Destory the buffer!
			header ('Location: welcome.php');
			exit();
			
		}else{ //Incorrect!

			print '<p>The submmitted email address and password do not match those on file!<br />Go back and try again.</p>';

		}
	}else{ // Froget a fiels.

		print '<p>Please make sure you enter both an email address and a password!<br />Go back and try again.</p>';
	}
} else { // Display the form.

	print '<form action="login.php" method="post">
	<p>Email Adress:<input type="text" name="email" size="20" /></p>
	<p>Password:<input type="password" name="password" size="20" /></p>
	<p><input type="submit" name="submit" value="Log In!" /></p>
	<input type="hidden" name="submitted" balue="true" />
	</form>';

}
require('templates/footer.html'); // Need the footer.
?>
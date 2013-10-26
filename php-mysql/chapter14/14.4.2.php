<?php
	
	// Create unique identifier
	$id = md5(uniqid(rand(),1));

	// User's email address
	$address = $_POST[email];

	// Set user's hash field to a unique id
	$query = "UPDATE logins SET hash='$id' WHERE email='$address'";
	$result = mysql_query($query);

	$email = <<< email
Dear user,
Click on the following link to reset your password:
http://www.example.com/users/lostpassword.php?id=$id
email;
	// Email user password reset options
	mail($address,"PAssword recovery","$email", "FROM: services@example.com");
	echo "<p>Instructions regarding resetting your password have been sent to $address</p>";
?>
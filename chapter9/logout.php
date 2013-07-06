<?php // Script 9.7 - logout.php
/* This is the logout page. It destroys the session information. */

// Need the session:
session_start();

// Delet the session variable:
unset($_SESSION);

// Destroy the session date;
session_destroy();

// Define a page title and include the header:
define('TITLE', 'Logout');
require('templates/header.html');

?>
<h1>Welcome to the Elliott Smith Fan Club!</h1>
<p>You are now logged out.</p>
<p>Thank you for using this site. We hope that liked it.<br />
Blah, blah, blah...
Blah, blah, blah...</p>

<?php require ('templates/footer.html') ?>
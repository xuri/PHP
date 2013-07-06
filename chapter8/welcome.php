<?php //Script 8.14 - welcome.php
/* This is the welcome pag. Yhe user is redirected here after they successfully log in.  */

// Set the page title and include the header file:
define('TITLE', 'Welcome to the Elliott Smith Fan Club!');
require('templates/header.html');

// Leave the PHP section to display lots of HTML:
?>

<h1>Welcome to the Elliott Smith Club!</h1>
<p>You've successfully logged in and can now take advantage og everything the site has to offer.</p>
<p>Here's a whole lotta text.Here's a whole lotta text.Here's a whole lotta text.Here's a whole lotta text.Here's a whole lotta text.Here's a whole lotta text.Here's a whole lotta text.Here's a whole lotta text.</p>

<?php require('templates/footer.html'); // Need the footer. ?>
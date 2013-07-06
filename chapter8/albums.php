<?php //Script 8.5 - albums.php
/*This page lists Elliott Smith's discography. */

//Set the page title and include the header file:
define ('TITLE', 'Records by Elliott Smith');
require ('templates/header.html');

// Leave the PHP section to display lots of HTML:
?>

<h1>Elliott Smith's Albums</h1>
<p><ul>
	<li>Raman Candle</li>
	<li>Elliott Smith</li>
	<li>Either/Or</li>
	<li>Figure 8</li>
	<li>New Moon</li>
</ul></p>

<?php //Reture to PHP and include the footer:
	require ('templates/footer.html');
?>
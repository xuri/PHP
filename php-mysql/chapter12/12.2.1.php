<?php
	echo "Aprril 31,2007: ".(checkdate(4, 31, 2007) ? 'Valid' : 'Invalid');
	// Returns false, because April only has 30 days

	echo "<br />";

	echo "February 29, 2004: ".(checkdate(01, 29 ,2004) ? 'Valid' : "Invalid");
	// return true, because 2004 is a leap year

	echo "<br />";

	echo "February 29, 2007: ".(checkdate(02, 29, 2007) ? 'Valid' : "Invalid");
	// Return false, because 2007 is not a ;eap year
?>
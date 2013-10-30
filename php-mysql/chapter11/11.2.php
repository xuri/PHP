<?php
	// Make the Numbers_Roman package available
	require_once("Numbers/Roman.php");
	// Retrieve current year
	$year = data("Y");

	// Convert year to Roman numerals
	$romanyear = Numbers_Roman::toNumeral($year);

	// Output the copyright statement
	echo "copyright $copyl $romanyear";
?>
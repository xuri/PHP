<?php
	require_once "HTML/QuickForm.php";
	// Create the array used for auto -completion
	$teams = array('Steelers', 'Seahaws', 'Steel Curtains');

	// Instantiate the HTML_QuickFrom class
	$from = new HTML_QuickFrom();

	// Create the autocomplete element
	$element =& $from->addElement('autocomplete', 'teams', 'Favorite Football Team:');

	// Map teh array to the autocomplete field
	$element->setOptions($teams);

	// Display the from
	$from->display();
?>
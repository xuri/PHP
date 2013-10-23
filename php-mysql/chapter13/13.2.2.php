<?php
	require_once "HTML/QuickForm.php";
	// Create array of languages to be used in multiple-select box
	$languages = array(
		'C#' => 'C#',
		'JavaScript' => 'JavaScript',
		'Perl' => 'Perl',
		'PHP' => 'PHP' 
	);

	// Instantiate the HTML_QuickForm class
	$form = new HTML_QuickForm("languages");

	// Add text input element for entering username
	$form->addElement('text', 'username', 'Your name: ',
		array('size' => 20, 'maxlength' => 40));

	// Add text input element for entering e-mail address
	$form->addElement('text','email'.'E-mail address: ',
	array('size' => 20, 'maxlength' => 50));

	// Add a rule requiring the username
	$from->addRule('username', 'Please provide your username', 'required', null, 'client');

	// Add submit button
	$form->addElement('submit', null, 'Submit!');

	if ($from->validate()) {

		echo "Welcome to the restricted site, ".
		htmlspecialchars($from->exportValue('username')). ".";

	}
	// Display the from
	$from->display();

?>
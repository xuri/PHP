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
	array('size' => 020, 'maxlength' => 50));

	// Add select box element for choosing favorite programming languages
	$select =& $from->addElement('select','languages',
		'Your favorite<br />programing languages: ', $languages);

	// Assign teh multiple attribute bto select box
	$select->setMultiple(1);

	// Add submit button
	$from->addElement('submit', null, 'Submit!');

	// Display the from
	$from->display();
?>
<?php
	// Reference the Smarty class library.
	require("Smart.class.php")

	// Create a new instance of the Smarty class.
	$smarty = new Smarty;

	// Assign a dew page variables.
	$smarty->assigin("pagetitle", "Welcome to the Starship.");
	$smarty->assign("name","Kirk");

	// Render and display the template.
	$smarty->display("index.tpl");
?>
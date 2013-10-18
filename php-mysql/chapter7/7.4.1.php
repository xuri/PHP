<?php

	// Define a base Wmployee class
	class Employee {

		private $name;

		// Define a setter for the private $name member.
		function setName($name) {
			if($name == "") echo "Name cannot be blank!";
			else $this->name = $name;
		}

		// Define a getter for the private $name member
		function getName() {
			return "My name is ".$this->name."<br />";
		}
	
		function __construct($name) {
			echo "<p>CEO object created!</p>";
		}
	} // end Employee class

	interface IPillage
	{
		function emptyBankAccount();
		function burnDocuments();

	}

	class Assistant extends Employee implements IPillage
	{
		function takeMemo()
		{
			echo "Taking memo...";
		}

		function emptyBankAccount()
		{
			echo "Go on shopping spree with office credit card.";
		}

		function burnDocuments()
		{
			echo "Start small fire in the trash can.";
		}
	}
?>
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

	class Executive extends Employee implements IPillage
	{
		private $totalStockOptions;

		function emptyBankAccount()
		{
			echo "Call CFO and ask to transfer funds to Swiss bank account.";
		}

		function burnDocuments()
		{
			echo "Torch the office suite.";
		}
	}
?>
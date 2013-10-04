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
	
		function __construct() {
			echo "<p>CEO object created!</p>";
		}
	} // end Employee class

	//Definr an Executive class that inherits from Employee
	class Executive extends Employee {

		// Define a method unique to Employee
		function pillageCompany() {
			echo "i'm selling company assets to finance my yacht!";
		}
	} // end Executive class

	class CEO extends Executive {
		function getFacelift() {
			echo "nip nip tuck tuck";
		}
	}

	$ceo = new CEO("Dennis");
	echo $ceo->getName();
?>
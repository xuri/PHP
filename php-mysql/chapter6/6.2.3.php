<?php
	class Employee{
		var $name;
		// Other field and method declarations follow...
	}
	$employee = new Employee();
	$employee->name = "Mary Swanson";
	$name = $employee->name;
	echo "New employee: $name";
?>
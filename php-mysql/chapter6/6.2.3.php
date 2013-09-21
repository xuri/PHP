<?php
	class Employee{
		var $name;
		function __set($propName, $propValue)
		{
			echo "Nonexistent variable: \$$propName!";
		}
	}
	$employee = new Employee();
	$employee->name = "Mario";
	$employee->title = "Executive Chef";
?>
<?php
	class Visitors
	{
		public function greetVisitor()
		{
			echo "Hello<br />";
		}

		function sayGoodbye()
		{
			echo "Goodbye<br />";
		}
	}

	Visitors::greetVisitor();
	$visitor = new Visitors();
	$visitor->sayGoodbye();

	print"<hr />";

	class Employee
	{
		private $ein;
		function __construct($ein)
		{
			if ($this->verifyEIN($ein)) {
				echo "EIN verified. Finish";
			}
		}
		protected function verifyEIN($ein)
		{
			return TRUE;
		}
	}
	$employee = new Employee("123-45-6789");
?>
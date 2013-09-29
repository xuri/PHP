<?php
	class Book
	{
		private $title;
		private $isbn;
		private $copies;

		function __construct($isbn)
		{
			echo "<p>Book class instance created.</p>";
		}
		function __destruct()
		{
			echo "<p>Book class instance destroyed.</p>";
		}
	}
	$book = new book("1893115852");
?>
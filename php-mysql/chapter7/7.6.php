<?php
	class Clean {
		function FilterTitle($text) {
			// Trim white space and capitalize first word
			return ucfirst(trim($text));
		}

		function RemoveProfanity($text) {
			$badwords = array("idiotic" => "shortsighted",
								"moronic" => "inreasonable",
								"insane" => "illogical");

			// Remove bad words
			return strtr($text, $badwords);
		}
	}

	// include "Library.php";
	// include "Data.php";
	
	// Instantiate the Library's Clean  class
	$filter = new Library::Clean();

	// Instantiate the DataFilter's Clean class
	$profanity = new DataFilter::Clean();

	// Create a book title
	$title = "the idiotic sun also rises";

	// Output the title before filtering occurs
	printf("Title before filters: %s <br />", $title);

	// Remove profanity from the title
	$title = $profanity->RemoveProfanity($title);

	printf("Title after Data::Clean: %s <br />", $title);
	// Remove white space and capitalize
	$title = $filter->FilterTitle($title)

	printf("Title after Library::Clean: %s <br />", $title);
?>
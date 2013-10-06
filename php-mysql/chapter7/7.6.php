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
?>
<?php
	class Clean {
		function FilterTitle($text) {
			// Trim white space and capitalize first word
			return ucfirst(trim($text));
		}
	}
?>
<?php
	$recipe = "3 tablespoons Dijon mustard
	1/3 cup Caesar salad dressing
	8 ounces grilled chicken breast
	3 cups romaine lettuce";

	// convert the newlines to <br />'s.
	echo nl2br($recipe);

	echo "<hr />";

	$input = "I just can't get <<enough>> of PHP!";
	echo htmlspecialchars($input);

	echo "<hr />";

	$table = array("<b>" => "<strong>","</b>" => "</strong>");
	$html = "<b>Today In PHP-Powerd News</b>";
	echo strtr($html, $table);

	echo "<hr />";

	$input = "Email <a href='spammer@example.com'>sapmmer@example.com</a>
			is <b>awesom</b>!";
	echo strip_tags($input,"<a>");
?>
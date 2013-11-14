<?php
	$xml = simplexml_load_file("books.xml");
	foreach($xml->book[2]->cast->children() AS $character) {
		echo "$character<br />";
	}

	echo "<hr />";

	$authors = $xml->xpath("/library/book/author");
	foreach ($authors AS $author) {
		echo "$author<br />";
	}
?>
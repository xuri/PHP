<?php
	$xml = simplexml_load_file("books.xml");
	foreach($xml->book as $book) {
		printf("%s is %s.<br />", $book->author, $book->author->attributes());
	}
?>
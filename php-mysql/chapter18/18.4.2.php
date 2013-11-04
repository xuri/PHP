<?php
	// Start session
	session_start();

	// Connect to server and select database
	mysql_connect("localhost","root","password");
	mysql_select_db("test");

	// Retrive requested article id
	$articleid = mysqli_real_escape_string($_GET['id']);

	// User wants to view an article, retrieve it from database
	$query = "SELECT title, contect FROM articles WHERE id='$id'";
	$result = mysql_query($query);

	// Retrieve query results
	list($title, $content) = mysql_fetch_row($result);

	// Add article title and link to list
	$articlelink = "<a href='18.4.2.php?id=$id'>$title</a>";

	if (! in_array($articlelink, $_SESSION['articles']))
		$_SESSION['articles'][] = $articlelink;

	// Output list of requested articles
	echo "<p>$title</p><p>$content</p>";
	echo "<p>Recently Viewed articles</p>";
	echo "<ul>";

	foreach ($SESSION['articles' ]as $doc) echo "<li>$doc</li>";
	echo "</ul>";
?>
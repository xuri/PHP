<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>handle_form</title>
</head>
<body>
<?php 

ini_set ('display_errors', 1);
error_reporting(E_ALL | E_STRICT);

$name = $_GET['name'];
print"<p>Hello ,<span style=\"font-weight :blod;\"> $name </span></p>";
?>
<?php 

ini_set ('display_errors', 1);
error_reporting(E_ALL | E_STRICT);
$title = $_POST['title'];
$name = $_POST['name'];
$response = $_POST['response'];
$comments = $_POST['comments'];

print "<p>Thank you, $title $name, for your comments.</p>

<p>You stated that you found example to be '$response' and added: <br /> $comments</p>";
?>

</body>
</html>
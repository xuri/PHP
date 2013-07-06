<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Hello, Word!</title>
</head>
<body>
<!--Script 3.6 - Hello.html-->
<div><p>Click a link to say hello:</p></div>
<ul>
	<li><a href="handle_form.php?name=Michael">Michael</a></li>
	<li><a href="handle_form.php?name=Celia">Celia</a></li>
	<li><a href="handle_form.php?name=June">June</a></li>
	<li><a href="handle_form.php?name=Sophine">Sophine</a></li>
</ul>

<div><p>Please complete this form to submit your feedback:</p></div>
<form action="handle_form.php" method="post">

	<p>Name: <select name="title">
	<option value="Mr.">Mr.</option>
	<option value="Mrs.">Mrs.</option>
	<option value="Ms.">Ms.</option>
	</select>
	<input type="text" name="name" size="20"/>
	</p>
	
	<p>E-mail Address:<input typt="text" name="email" size="20" /></p>
	<p>Response: This is...
	<input type="radio" name="response" value="excellent" />excellent
	<input type="radio" name="response" value="okay" />okay
	<input type="radio" name="response" value="boring" />boring
	</p>

	<p>Comments:<textarea name="comments" row="3" cols="30"></textarea></p>
	<input type="submit" name="submit" value="Send My Feedback">

</form>
<?php

$first_name = "Ri";
$last_name = 'Xu';
print "Hi~ I'm $first_name  $last_name";

?>
<p>The following was created by PHP: <br />
<pre>
<?php 
	echo "<span style=\"font-weight: blod; \"> Hello, Word!</span>\n";
	print_r ($_SERVER);
	print "I said, 'How are you?'";
?>


<?php print"<span style=\"color: red;\">Hellow Word!</span>" ?>

<?php 

$string = "555"; //变量的类型不是锁定的
$string = "hello" ;
print "$string" ;

?>
</p>
</pre>
</body>
</html>
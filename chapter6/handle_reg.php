<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Registration</title>

	<style type="text/css" media="screen">
	.error {color: red;}
	</style></head>
<body>
<h2>Registration Results</h2>
<?php 
$okay = TURE;

if (empty($_POST['email'])){
	print '<p class="error">Please enter your email adreess.</p>';
	$okay = FALSE;
}
if (empty($_POST['password'])){
	print'<p class="error">Please enter your password</p>';
	$okay = FALSE;
}

if($_POST['password'] != $_POST['confirm']){
	print'<p class="error">Your confirmed password does not match the original password.</p>';
	$okay = FALSE;
}
$birthday = '';

 if (is_numeric($_POST['month'])){
 	$birthday = $_POST['month'] . '-';
 }
 else
 {
 	print '<p class="error">Please select the month you were born.</p>';
 	$okay = FALSE;
 }
 if (is_numeric($_POST['day'])){
	$birthday .= $_POST['day'] . '-';
 }
 else{
 	print '<p class="error">Please select the bay you were born.</p>';
 	$okay = FALSE;
 }


 if (is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4)){
 	if($_POST['year'] >= 2013){
	 	print '<p class="error">Either you entered your birth year wrong or you come from the  futurel!</p>';
	 	$okay = FALSE;
 	}
	 else{
	 	print'<p class="error">Please enter the year you were born four digits.</p>';
	 	$okay = FALSE;
	 }
 }

 switch ($_POST['color']){
 	case 'red';
 		print '<p style="color:red">Red is your favorite color.</p>';
 		break;
 	case 'yellow';
 		print '<p style="color:yellow">Yellow is your favorite color.</p>';
 		break;
 	case 'green';
 		print '<p style="color:green">Green is your favorite color.</p>';
 		break;
 	case 'blue';
 		print '<p style="color:blue">Blue is your favorite color.</p>';
 		break;
 	default:
 		print '<p class="error">Please select your favorite color.</p>';
 		$okay = FALSE;
 		break;
}
/*
if ($_POST['color'] == 'red'){
	print '<p style="clolor:red";>Red is your favorite color.</p>';
}elseif ($_POST['color'] == 'yellow') {
	print '<p style="clolor:red";>Yellow is your favorite color.</p>';
}
elseif ($_POST['color'] == 'green') {
	print '<p style="clolor:red";>Green is your favorite color.</p>';
}
elseif ($_POST['color'] == 'blue') {
	print '<p style="clolor:red";>Blue is your favorite color.</p>';
}else{
	print '<p style="color:red";>Please select your favorite color.</p>';
	$okay = FALSE;
}
*/
if ($okay){
	print'<p>You have been successfully registeresd (but not really).</p>';
	print"<p>You entered your birthday as $birthday.</p>";
}

?> 
</body>
</html>
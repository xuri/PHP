<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Registration Form</title>
</head>
<body>
<div><p>Please complete this form to register</p>
<form action="handle_reg.php" method="post">
	<p>Email:<input type="text" name="email" size="30" /></p>
	<p>Password:<input type="password" name="password" size="20" /></p>
	<p>Confirm Password:<input type="password" name="confirm" size="20" /></p>
	<p>Data Of Birth:
	<select name="month">
		<option value="">Month</option>
		<option value="1">Month</option>
		<option value="2">fevruary</option>
		<option value="3">March</option>
		<option value="4">April</option>
		<option value="5">May</option>
		<option value="6">june</option>
		<option value="7">July</option>
		<option value="8">August</option>
		<option value="9">September</option>
		<option value="10">October</option>
		<option value="11">November</option>
		<option value="12">December</option>
	</select>
	<select name="day">
	<?php 

	for ($d = 1; $d <=31; $d++){
		print "<option value=\"$d\">$d</option>\n";
	}

	?>
		<!-- <option value=""></option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option> -->
	</select>
	<input type="text" name="year" value="YYYY" size="4" />
	</p>
	<p>Favorite Color:
	<select name="color">
		<option value="">Pick One</option>
		<option value="red">Red</option>
		<option value="yellow">Yellow</option>
		<option value="blue">Blue</option>
	</select></p>
	<input type="submit" name="submit" value="Register" />
	</p>
</form></div>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Produvt Cost Calculator</title>
</head>
<body>
<div><p>Fill out this form to calculator the total cost</p></div>
<form action="handle_calc.php" method="post">
	<p>Price:<input type="text" name="price" size="5" /></p>
	<p>Quantity:<input type="text" name="quantity" size="5" /></p>
	<p>Discount:<input type="text" name="discount" size="5" /></p>
	<p>Tax:<input type="text" name="tax" size="3" />(%)</p>
	<p>Sipping method:<select name="shipping">
		<option value="5.00">Slow and steady</option>
		<option value="8.95">Put a move on it.</option>
		<option value="19.36">I need it yesterday!</option>
	</select></p>
	<p>Number of payments to make:<input type="text" name="payments" size="3" /></p>
	<input type="submit" name="submit" value="Calculate!" />

</form>
</body>
</html>
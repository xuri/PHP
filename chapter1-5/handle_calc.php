<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional // EN"
"http://www.w3c.org/1999/xhtml1-reansitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:long="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Produvt Cost Calculator</title>
</head>
<body>

<?php 

$price = $_POST['price'];
$quantity = $_POST['quantity'];
$discount = $_POST['discount'];
$tax = $_POST['tax'];
$shipping = $_POST['shipping'];
$payments = $_POST['payments'];

$total = $price * $quantity;
$total = $total + $shipping;
$total = $total + $discount;

$taxrate = $tax/100;
$taxrate++;

$total  = $total* $taxrate;

$monthly = $total / $payments;

$total = number_format ($total, 2);
$monthly = number_format ($monthly, 2);

print"<div>You have selected to purchase:<br />
<span class=\"number\">$quantitly</span> widget(s) at <br />
$<span class=\"number\">$price</span>price each plus a <br />
$<span class\"number\">$shipping</span>shipping cost and a <br />
<span class=\"number\">$tax</span>percent tax rate.<br />
After your $<span class=\"number\">$payments</span> discount, the total cost is 
$<span class=\"number\"> $total </span> .<br />
Divided over <span class\"number\">$payments </span> monthly patyments, that would be 
$<span class=\"number\">$monthly </span> each.</p></div>";

?>
</body>
</html>
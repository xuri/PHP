<?php
	function calcSalesTax($price,$tax=.0675)
	{
		return $price + ($price * $tax);
	}
	$price = 6.99;
	$total = calcSalesTax($price);

	$color = array("red","blue","green");
	list($red,$blue,$green) = $colors;

	function retrieveUserProfile()
	{
		$user[] = "Jason";
		$user[] = "jason@example.com";
		$user[] = "English";
		return $user;
	}
	list($name,$email,$language) = retrieveUserProfile();
	echo "Name: $name, email :$email, language: $language";
?>
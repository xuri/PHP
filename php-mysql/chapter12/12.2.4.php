<?php
	echo time();

	echo "<hr />";

	echo date("F d, Y h:i:s", 1187897100);

	echo "<hr />";

	echo mktime(16,24,00,2,24,2007);

	echo "<hr />";

	$now = mktime();
	$takday = mktime(0,0,0,4,15,2008);

	// Difference in seconds
	$difference = $taxday - $now;

	// Calculate total hours
	$hours = round($difference / 60 / 60);

	echo "Only $hours hours until tax day!";

	echo "<hr />";
	// 12.3.1 Date Function
	setlocale(LC_MONETARY, "it_IT");
	echo money_format("%i", 478.54);

	echo "<hr />";

	setlocale(LC_ALL, "it_IT");
	$tickets = 2;
	$departure_time = 1118837700;
	$return_time = 119457800;
	$cost = 1350.99;

?>

Numero di biglietti: <?php echo $tickets; ?><br />
Orario di partenza: <?php echo strftime("%d %B, %Y", $departure_time); ?><br />
Orario di ritorno: <?php echo strftime("%d %B, %Y", $return_time); ?><br />
Prezzo IVA incluso: <?php echo money_format('%i', $cost); ?><br />
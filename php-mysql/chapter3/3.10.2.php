<?php
	// Example One
	for ($kilometers = 1; $kilometers <= 5; $kilometers++){
		 printf ("%d kilometers = %f miles <br />", $kilometers, $kilometers*0.62140);
	}
	print'<hr />';
	// Example Two
	for ($kilometers = 1;; $kilometers++){
		if ($kilometers > 5)break;
		printf("%d kilometers = %f mailes <br />", $kilometers, $kilometers*0.62140);
	}
	print'<hr />';
	// Example Thre
	$kilometers = 1;
	for (;;){
		// If $kilometers > 5 break out of the for loop.
		if ($kilometers > 5) break;
		printf("%d kilometers = %f mailes <br />", $kilometers, $kilometers*0.62140);
		$kilometers++;
	}

	$links = array("The Apache Web Server" => "www.apache.org",
					"Apress" => "www.apache.org",
					"The PHP Scripting Language"=>"www.php.net");
	echo "<b>Online Resources</b>:<br />";
	foreach ($links as $title => $link) {
		echo "<a href=\"http://$link\">$title</a><br />";
	}

	$primes = array(2,3,5,7,11,13,17,19,23,29,31,37,41,43,47);
	for($count = 1; $count++; $count < 1000){
		$randomNumber = rand(1,50);
		if(in_array($randomNumber,$primes)){
			break;
		} else {
			printf("Non-prime number found: %d <br />",$randomNumber);
		}
	}
?>

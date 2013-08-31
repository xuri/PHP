<?php
	// Example One
	for ($kilometers = 1; $kilometers <= 5; $kilometers++){
		 printf ("%d kilometers = %f miles <br />", $kilometers, $kilometers*0.62140);
	}
	// Example Two
	for ($kilometers = 1;; $kilometers++){
		if ($kilometers > 5)break;
		printf("%d kilometers = %f mailes <br />", $kilometers, $kilometers*0.62140);
	}
	// Example Thre
	$kilometers = 1;
	for (;;){
		// If $kilometers > 5 break out of the for loop.
		if ($kilometers > 5) break;
		printf("%d kilometers = %f mailes <br />", $kilometers, $kilometers*0.62140);
		$kilometers++;
	}
?>
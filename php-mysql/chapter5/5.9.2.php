<?php
	$cards = array("jh","ks","jd","qh","qs","qd","qc","kh","ks","kd","kc","ah","as","ad","ac");
	// ahuffle the cards
	shuffle($cards);
	print_r($cards);

	$grades = array(42, "hello", 42);
	$total = array_sum($grades);
	print $total;
?>
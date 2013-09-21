<?php
	$cards = array("jh","ks","jd","qh","qs","qd","qc","kh","ks","kd","kc","ah","as","ad","ac");
	// ahuffle the cards
	shuffle($cards);
	
	// Use array_chunk() to divide the cards into four equal "hands"
	$hands = array_chunk($cards, 4);

	print_r($hands);
	print"<hr />";

	$grades = array(42, "hello", 42);
	$total = array_sum($grades);
	print $total;
?>
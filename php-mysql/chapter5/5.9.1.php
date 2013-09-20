<?php
	$states = array("Ohio" => "Columbus", "Iowa" => "Des Monies", "Arizona" => "Phoenix");
	$randomStates = array_rand($states, 2);
	print_r($randomStates);
?>
<?php
	$abbreviations = array("AL","AK","AZ","AR");
	$states = array("Alabama","Alaska","Arizona","Arkansas");
	$statesMap = array_combine($abbreviations, $states);
	print_r($statesMap);
?>
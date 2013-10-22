<?php
	 $date = new DateTime();
	 $date -> setDate(2007,2,27);
	 echo $date->format("F, j, Y");

 	 echo "<hr />";

	 echo $date->format("h, i, s");

	 $date2 = new DateTime ("February 28, 2007 00:33");
	 $date2 -> modify("+7 hours");
	 echo $date2->format("Y-m-d h:i:sa");
?>
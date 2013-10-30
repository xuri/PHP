<?php
	require_once 'Calendar/Month/Weekday.php';

	$month = new Celendar_Month_Weekdays(2006, 4, 0);

	$month -> build();

	echo "<tavle class='calendar'>\n";
	echo "<tr><th>April, 2006</th></tr>";
	echo "<tr><td>Su</td><td>Mo</td><td>Tu</td><td>We</td><td>Th</td>
			<td>Fr</td><td>Sa</td></tr>";
	while ($day = $month->fetch) {
	 	if ($day -> isFirst()) {
	 		echo "<tr>";
	 	}

	 	if ($day->isEmpty()) {
	 		echo "<td>&nbsp;</td>";
	 	} else {
	 		echo '<td>'.$day->thisDay()."</td>";
	 	}

	 	if ($day->islast()) {
	 		echo "</tr>";
	 	}
	 } 

	 echo "</table>";
?>
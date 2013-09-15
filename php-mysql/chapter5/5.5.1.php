<?php
	$capitals = array("Ohio" => "Columbus", "Iowa" => "Des Moines");
	echo "<p>Can you name the capitals of these states?</p>";
	while($key = key($capitals)) {
		printf("%s <br />", $key);
		next($capitals);
	}
?>
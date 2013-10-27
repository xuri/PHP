<?php
	echo "HTTP's default port number is: ".getservbyname("http", "tcp");

	echo "<hr />";

	echo "Port 80's default service is: ".getservbyport(80, "tcp");
?>
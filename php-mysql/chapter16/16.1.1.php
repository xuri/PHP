<?php
	$recordexists = checkdnsrr("example.com", "ANY");
	if ($recordexists) echo "The domain name has been reserved. Sorry!";
	else echo "The domain name is available!";

	echo "<hr />";

	$email = "ceo@example.com";
	$domain = explode("@",$email);

	$valid = checkdnsrr($domain[1], "ANY");

	if($valid) echo "The domain exists!";
	else echo "Cannot locate MX record for $domain[1]!";

	echo "<hr />";

	$result = dns_get_record("example.com");
?>
<pre><?php print_r($result); ?></pre>

<?php

	echo "<hr />";
	getmxrr("wjgilmore.com", $mxhosts);
	print_r($mxhosts);
?>
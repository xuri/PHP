<form action="16.3.3.php" method="post">
<p>
IP Address: <br />
<input type="text" name="ip[]" size="3" maxlength="3" value="" />
<input type="text" name="ip[]" size="3" maxlength="3" value="" />
<input type="text" name="ip[]" size="3" maxlength="3" value="" />
<input type="text" name="ip[]" size="3" maxlength="3" value="" />
</p>

<p>
Subnet Mask:<br />
<input type="text" name="sm[]" size="3" maxlength="3" value=" /">
<input type="text" name="sm[]" size="3" maxlength="3" value=" /">
<input type="text" name="sm[]" size="3" maxlength="3" value=" /">
<input type="text" name="sm[]" size="3" maxlength="3" value=" /">
</p>

<input type="submit" name="submit" value="Calculate" />
</form>

<?php
	if (isset($_POST['submit'])) {
		// Concatenate the IP form components and convert to IPV4 format
		$ip = implode(".", $_POST['ip']);
		$ip = ip2long($ip);

		// Concatenate the netmask from components and convert to IPV4 foemat
		$netmask = implode(".", $_POST['sm']);
		$netmask = ip2long($netmark);

		// Calcuate the network address
		$na = ($ip & $netmark);
		// Calcuate the broadcast address
		$ba = $na | (~$netmask);
		// Calculate the address back to the dot-format representation and display
		echo "<ul>";
		echo "<li>IP Address: ". long2ip($ip)."</li>";
		echo "<li>Subnet Mask: ". long2ip($netmask)."</li>";
		echo "<li>Network Address: ". long2ip($na)."</li>";
		echo "<li>Broadcast Address: ". long2ip($ba)."</li>";
		echo "<li>Tool Available Host: ". ($ba - $na - 1)."</li>";
		echo "<li>Host Range: ". long2ip($na + 1)."  - ".
		long2ip($ba - 1)."</li>";
		echo "</li>";

	}
?>
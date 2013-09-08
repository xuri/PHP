<?php
	function amortizationTable ($pNum,$periodicPayment,$balance,$monthlyInterest)
	{
		// Calculate payment interest
		$paymentInterest = round ($balance * $monthlyInterest, 2);

		// Calaulate payment principal
		$paymentPrintcopal = round($periodicPayment - $paymentInterest,2);

		// Deduct principal from remaining balance
		$newBalance = round ($balance - $paymentPrintcopal, 2);
		// If new banlance < monthly payment, set to zero
		if ($newBalance < $paymentPrintcopal) {
			$newBalance = 0;
		}

		printf('<tr><td>%d</td>',$pNum);
		printf("<td>$%s</td>",number_format($newBalance, 2));
		printf("<td>$%s</td>",number_format($periodicPayment, 2));
		printf("<td>$%s</td></tr>",number_format($paymentInterest, 2));
		# If balance not yet zero, recursively call amortizationTable()
		if ($newBalance > 0) {
			$pNum++;
			amortizationTable($pNum,$periodicPayment,$newBalance, $monthlyInterest);
		} else {
			return 0;
		}
	} #end amortizationTable()

   # Loan balance
   $balance = 200000.00;

   # Loan interest rate
   $interestRate = .0575;

   # Monthly interest rate
   $monthlyInterest = .0575 / 12;

   # Term length of the loan, in years.
   $termLength = 30;

   # Number of payments per year.
   $paymentsPerYear = 12;

   # Payment iteration
   $paymentNumber = 1;

   # Perform preliminary calculations
   $totalPayments = $termLength * $paymentsPerYear;
   $intCalc = 1 + $interestRate / $paymentsPerYear;
   $periodicPayment = $balance * pow($intCalc,$totalPayments) * ($intCalc - 1) /  
                                    (pow($intCalc,$totalPayments) - 1);
   $periodicPayment = round($periodicPayment,2);

   # Create table
   echo "<table width='50%' align='center' border='1'>";
   print "<tr>
          <th>Payment Number</th><th>Balance</th>
          <th>Payment</th><th>Interest</th><th>Principal</th>
          </tr>";

   # Call recursive function
   amortizationTable($paymentNumber, $periodicPayment, $balance, $monthlyInterest);

   # Close table
   print "</table>";

?>
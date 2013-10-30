<?php
	// Include the Mail and Mime_Mail Packages
	include('Mail.php');
	include('Mail/mime.php');

	// Recipient Name and E-mail Address
	$name = "Jason Gilmore";
	$recipient = "jason@example.com";

	// Sender Address
	$from = "bram@examle.com";

	// Message Subject
	$subject = "Thank you for your inquiry - HTML Format";

	// E-mail Body
	$html = <<< html
	<html><body>
	<h3>Example.com Stamp Company</h3>
	<p>
	Dear $name,<br />
	Thank you for you interest in <b>Rxample.com's</b> fine selection of
	number and a suggested date and time to chat.
	</p>

	<p>I look forward to hearing frome you.</p>

	<p>
	Sincerely,<br />
	Bram Brownstein<br />
	President, Example.com Stamp Supply
html;

	// Identify the Relevant Mail Headers
	$headers['From']	= $from;
	$headers['Subject'] = $subject;
	// Instantiate Mail_mime Class
	$mimemail = new Mail_mime();

	// Set HTML Message
	$mimemail->setHTMLBody($html);

	// Build Message
	$mimemail = $mimemail->get();

	// Prepare the Headers
	$mailheaders = $mimemail->headers($headers);

	// Create New Instance of Mail Class
	$email =& Mail::factory('mail');

	// Send the E-mail Already!
	$email->send($recipient, $mailheaders, $messages) or die("Can't send message!");


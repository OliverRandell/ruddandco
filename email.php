<?php
	if (isset($_POST['email']) and isset($_POST['message'])) {
		$from = $_POST['email'];
		$to = 'oliverrandell@gmail.com';
		$name = $_POST['name'];
		$subject = 'Your have an email';
		$message = "Hello Old mate,\n\n";
		$message .= "You have a new enquiry from ".$name."\n\n";
		$message .= $_POST['message'];
		$headers = 'From: '.$from;
		mail($to, $subject, $message, $headers);
	}
?>